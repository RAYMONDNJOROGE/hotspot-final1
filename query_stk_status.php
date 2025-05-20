<?php
require_once 'generate_token.php';

date_default_timezone_set('Africa/Nairobi');

$config = include 'config.php';
$BusinessShortCode = $config['businessShortCode'];
$Passkey = $config['passkey'];

if (!isset($_POST['CheckoutRequestID']) || empty($_POST['CheckoutRequestID'])) {
    echo json_encode(['ResultCode' => 1, 'statusMessage' => 'Missing CheckoutRequestID']);
    exit;
}

$checkoutID = $_POST['CheckoutRequestID'];
$accessToken = generateAccessToken(); // Get fresh M-Pesa API token

// Fail if token isn't generated
if (!$accessToken) {
    error_log("Access token generation failed.");
    echo json_encode(["ResultCode" => 999, "statusMessage" => "Failed to generate access token"]);
    exit;
}

// Prepare query payload
$timestamp = date('YmdHis');
$password = base64_encode($BusinessShortCode . $Passkey . $timestamp);

$stkQueryData = [
    'BusinessShortCode' => $BusinessShortCode,
    'Password' => $password,
    'Timestamp' => $timestamp,
    'CheckoutRequestID' => $checkoutID
];

// Log query request for debugging
file_put_contents('stk_query_request.log', json_encode($stkQueryData, JSON_PRETTY_PRINT) . "\n", FILE_APPEND);

$stkQueryUrl = 'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query';
$stkQueryHeader = [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $accessToken
];

// Send request to Safaricom
$curl = curl_init($stkQueryUrl);
curl_setopt($curl, CURLOPT_HTTPHEADER, $stkQueryHeader);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($stkQueryData));
$response = curl_exec($curl);
$httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$error = curl_error($curl);
curl_close($curl);

// Handle errors
if ($error || !$response || $httpStatus !== 200) {
    error_log("STK Query Error: HTTP $httpStatus - $error");
    echo json_encode([
        'ResultCode' => 999,
        'statusMessage' => 'Error querying STK status',
        'message' => 'Failed to retrieve STK status',
        'errorDetails' => $error
    ]);
    exit;
}

// Decode response
$stkResponse = json_decode($response, true);

// Log API response for debugging
file_put_contents('stk_query_response.log', json_encode($stkResponse, JSON_PRETTY_PRINT) . "\n", FILE_APPEND);

// Determine payment status
$statusMessage = match ($stkResponse['ResultCode']) {
    0     => "Payment Successful",
    1032  => "Payment Cancelled by User",
    1     => "STK Push Timed Out",
    default => "Unknown Status - " . ($stkResponse['ResultDesc'] ?? 'No details available'),
};

// Return structured response
echo json_encode([
    'ResultCode' => $stkResponse['ResultCode'] ?? 999,
    'statusMessage' => $statusMessage,
    'message' => $stkResponse['ResultDesc'] ?? 'Unable to retrieve STK status'
]);
?>