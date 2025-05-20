<?php
// Capture incoming callback data
$callbackData = json_decode(file_get_contents("php://input"), true);
file_put_contents('stk_callback.log', print_r($callbackData, true)); // Debugging log

if (isset($callbackData['Body']['stkCallback'])) {
    $response = $callbackData['Body']['stkCallback'];
    $checkoutID = $response['CheckoutRequestID'];
    $resultCode = $response['ResultCode'];

    // Update payments.json file
    $filename = 'payments.json';
    $payments = file_exists($filename) ? json_decode(file_get_contents($filename), true) : [];

    // Store payment status
    $payments[$checkoutID] = [
        'ResultCode' => $resultCode,
        'message' => $response['ResultDesc']
    ];
    file_put_contents($filename, json_encode($payments));

    // Respond to Safaricom
    echo json_encode(['status' => 'updated', 'ResultCode' => $resultCode]);
}
?>