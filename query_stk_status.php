<?php
require_once 'generate_token.php';

if (!isset($_POST['CheckoutRequestID'])) {
    echo json_encode(['ResultCode' => 1, 'statusMessage' => 'Missing CheckoutRequestID']);
    exit;
}

$checkoutID = $_POST['CheckoutRequestID'];
$accessToken = generateAccessToken(); // Get fresh M-Pesa API token

// Fail if token isn't generated
if (!$accessToken) {
    echo json_encode(["ResultCode" => 999, "statusMessage" => "Failed to generate access token"]);
    exit;
}

$stkQueryUrl = 'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query';
$stkQueryHeader = [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $accessToken
];

// Prepare query payload
$timestamp = date('YmdHis');
$password = base64_encode('174379' . 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919' . $timestamp);

$stkQueryData = [
    'BusinessShortCode' => '174379',
    'Password' => $password,
    'Timestamp' => $timestamp,
    'CheckoutRequestID' => $checkoutID
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

// Determine payment status
$statusMessage = match ($stkResponse['ResultCode']) {
    0     => "Payment Successful",
    1032  => "Payment Cancelled by User",
    1     => "STK Push Timed Out",
    default => "Unknown Status - " . ($stkResponse['ResultDesc'] ?? 'No details available'),
};

// Return structured response
echo json_encode([
    'ResultCode' => $stkResponse['ResultCode'],
    'statusMessage' => $statusMessage,
    'message' => $stkResponse['ResultDesc'] ?? 'Unable to retrieve STK status'
]);
?>