<?php
require_once 'generate_token.php';

if (!isset($_POST['CheckoutRequestID'])) {
    echo json_encode(['ResultCode' => 1, 'message' => 'Missing CheckoutRequestID']);
    exit;
}

$checkoutID = $_POST['CheckoutRequestID'];
$accessToken = generateAccessToken(); // Get fresh M-Pesa API token

$stkQueryUrl = 'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query';
$stkQueryHeader = [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $accessToken
];

// Prepare query payload
$stkQueryData = [
    'BusinessShortCode' => 'YourShortCode',
    'Password' => base64_encode('YourShortCode' . 'YourPasskey' . date('YmdHis')),
    'Timestamp' => date('YmdHis'),
    'CheckoutRequestID' => $checkoutID
];

// Send request to Safaricom
$curl = curl_init($stkQueryUrl);
curl_setopt($curl, CURLOPT_HTTPHEADER, $stkQueryHeader);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($stkQueryData));
$response = curl_exec($curl);
curl_close($curl);

// Decode response
$stkResponse = json_decode($response, true);

// Return the live STK status