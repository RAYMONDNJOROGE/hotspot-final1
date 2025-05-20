<?php
require_once 'generate_token.php';

if (isset($_POST['submit'])) {
    date_default_timezone_set('Africa/Nairobi');

    // Get configurations
    $config = include 'config.php';
    $BusinessShortCode = $config['businessShortCode'];
    $Passkey = $config['passkey'];
    $CallbackURL = $config['callbackUrl'];

    // Validate phone number and amount
    $allowedAmounts = [10, 20, 30, 50, 80, 200];
    $PartyA = $_POST['phone'];
    $Amount = (int) $_POST['amount'];

    if (!in_array($Amount, $allowedAmounts)) {
        echo json_encode(["ResponseCode" => 1, "errorMessage" => "Invalid amount selected."]);
        exit;
    }

    // Generate Password and Timestamp
    $Timestamp = date('YmdHis');
    $Password = base64_encode($BusinessShortCode . $Passkey . $Timestamp);
    $AccountReference = 'Raymond Njoroge';
    $TransactionDesc = 'Raynger Hotspot';

    // Generate Access Token
    $accessToken = generateAccessToken();

    // STK Push request headers
    $stkheader = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $accessToken
    ];

    $postData = [
        'BusinessShortCode' => $BusinessShortCode,
        'Password' => $Password,
        'Timestamp' => $Timestamp,
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' => $Amount,
        'PartyA' => $PartyA,
        'PartyB' => $BusinessShortCode,
        'PhoneNumber' => $PartyA,
        'CallBackURL' => $CallbackURL,
        'AccountReference' => $AccountReference,
        'TransactionDesc' => $TransactionDesc
    ];

    // Send STK Push request
    $curl = curl_init('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');
    curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($postData));
    $response = curl_exec($curl);
    curl_close($curl);

    // Decode response data
    $responseData = json_decode($response, true);

    // Log the API response for debugging
    file_put_contents('stk_response.log', print_r($responseData, true));

    // Return the correct response to the front-end
    if (isset($responseData['ResponseCode']) && $responseData['ResponseCode'] == 0 && isset($responseData['CheckoutRequestID'])) {
        echo json_encode([
            "ResponseCode" => $responseData['ResponseCode'],
            "CheckoutRequestID" => $responseData['CheckoutRequestID']
        ]);
    } else {
        echo json_encode([
            "ResponseCode" => $responseData['ResponseCode'] ?? 1,
            "errorMessage" => $responseData['errorMessage'] ?? "STK push request failed."
        ]);
    }
}
?>