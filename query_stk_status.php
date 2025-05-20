<?php
require_once 'generate_token.php';

if (!isset($_POST['CheckoutRequestID'])) {
    echo json_encode(['ResultCode' => 1, 'status' => 'error', 'message' => 'Missing CheckoutRequestID']);
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
    'BusinessShortCode' => '174379',
    'Password' => base64_encode('174379' . 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919' . date('YmdHis')),
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

// Log response for debugging
file_put_contents('stk_query_response.log', print_r($stkResponse, true));

// Determine the STK push status
$statusMessage = "Pending";
if (isset($stkResponse['ResultCode'])) {
    switch ($stkResponse['ResultCode']) {
        case 0:
            $statusMessage = "STK Push Accepted - Payment Successful";
            break;
        case 1032:
            $statusMessage = "STK Push Cancelled by User";
            break;
        case 1:
            $statusMessage = "STK Push Timed Out";
            break;
        default:
            $statusMessage = "Unknown Status - " . ($stkResponse['ResultDesc'] ?? 'No details available');
            break;
    }
}

// Return structured response with explicit STK status
echo json_encode([
    'ResultCode' => $stkResponse['ResultCode'] ?? 999,
    'status' => $statusMessage,
    'message' => $stkResponse['ResultDesc'] ?? 'Unable to retrieve STK status'
]);
?>