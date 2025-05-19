<?php
require_once 'generate_token.php';

if (isset($_POST['submit'])) {
    date_default_timezone_set('Africa/Nairobi');

    // Get configurations
    $config = include 'config.php';
    $BusinessShortCode = $config['businessShortCode'];
    $Passkey = $config['passkey'];
    $CallbackURL = $config['callbackUrl'];

    // Allowed fixed button values
    $allowedAmounts = [10, 20, 30, 50, 80, 200];
    $PartyA = $_POST['phone'];
    $Amount = (int) $_POST['amount'];

    // Generate Password and Timestamp
    $Timestamp = date('YmdHis');
    $Password = base64_encode($BusinessShortCode . $Passkey . $Timestamp);
    $AccountReference = 'Raynger Hotspot';
    $TransactionDesc = 'Raynger Hotspot';

    // Generate Access Token
    $accessToken = generateAccessToken();

    // Send STK Push request
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

    $curl = curl_init('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');
    curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($postData));
    $response = curl_exec($curl);
    curl_close($curl);

    $responseData = json_decode($response, true);
}
?>