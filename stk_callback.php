<?php
// Capture incoming STK Push callback data
$callbackData = json_decode(file_get_contents("php://input"), true);
file_put_contents('stk_callback.log', print_r($callbackData, true)); // Debugging log

if (isset($callbackData['Body']['stkCallback'])) {
    $response = $callbackData['Body']['stkCallback'];
    $checkoutID = $response['CheckoutRequestID'];
    $resultCode = $response['ResultCode'];

    // Update payments.json file
    $filename = 'stk_push_data.json';
    $pushData = file_exists($filename) ? json_decode(file_get_contents($filename), true) : [];

    // Store STK push response status
    $pushData[$checkoutID] = [
        'ResultCode' => $resultCode,
        'message' => $response['ResultDesc']
    ];
    file_put_contents($filename, json_encode($pushData));

    echo json_encode(['status' => 'updated', 'ResultCode' => $resultCode]);
}
?>