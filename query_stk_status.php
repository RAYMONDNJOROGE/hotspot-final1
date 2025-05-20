<?php
require_once 'generate_token.php';

$checkoutID = $_POST['CheckoutRequestID'];
$accessToken = generateAccessToken(); // Get fresh M-Pesa API token

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

// Log request payload
file_put_contents('stk_query_request.log', json_encode($stkQueryData, JSON_PRETTY_PRINT) . "\n", FILE_APPEND);

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

// Decode response
$stkResponse = json_decode($response, true);

// Log API response
file_put_contents('stk_query_response.log', "[" . date('Y-m-d H:i:s') . "] " . json_encode($stkResponse, JSON_PRETTY_PRINT) . "\n", FILE_APPEND);

// Determine status
$statusMessage = match ($stkResponse['ResultCode']) {
    0     => "STK Push Accepted - Payment Successful",
    1032  => "STK Push Cancelled by User",
};

// Return structured response
echo json_encode([
    'ResultCode' => $stkResponse['ResultCode'],
    'statusMessage' => $statusMessage,
    'message' => $stkResponse['ResultDesc'] ?? 'Unable to retrieve STK status'
]);
?>