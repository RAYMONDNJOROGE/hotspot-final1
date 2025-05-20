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

    // Fail fast if token isn't generated
    if (!$accessToken) {
        echo json_encode(["ResponseCode" => 999, "errorMessage" => "Failed to generate access token"]);
        exit;
    }

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

    // Log request payload before sending
    file_put_contents('stk_request.log', json_encode($postData, JSON_PRETTY_PRINT) . "\n", FILE_APPEND);

    // Send STK Push request
    $curl = curl_init('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');
    curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($postData));
    $response = curl_exec($curl);
    $curlError = curl_error($curl);
    curl_close($curl);

    if ($curlError) {
        error_log("CURL Error: " . $curlError);
        echo json_encode(["ResponseCode" => 999, "errorMessage" => "Network error: " . $curlError]);
        exit;
    }

    // Validate API response
    if (!$response) {
        echo json_encode(["ResponseCode" => 999, "errorMessage" => "Empty response from API"]);
        exit;
    }

    // Decode response data
    $responseData = json_decode($response, true);

    // Log the API response for debugging
    file_put_contents('stk_response.log', json_encode($responseData, JSON_PRETTY_PRINT) . "\n", FILE_APPEND);

    // Validate API response structure
    if (!isset($responseData['ResponseCode'])) {
        echo json_encode(["ResponseCode" => 999, "errorMessage" => "Invalid API response"]);
        exit;
    }

    // Return the correct response to the frontend
    if ($responseData['ResponseCode'] == 0 && isset($responseData['CheckoutRequestID'])) {
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