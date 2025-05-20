<?php
if (!isset($_POST['CheckoutRequestID'])) {
    echo json_encode(['ResultCode' => 1, 'message' => 'Missing CheckoutRequestID']);
    exit;
}

$checkoutID = $_POST['CheckoutRequestID'];
$filename = 'stk_push_data.json';

if (!file_exists($filename)) {
    error_log("File not found: $filename"); // Debugging log
    echo json_encode(['ResultCode' => 2, 'message' => 'No STK push data yet']);
    exit;
}

$pushData = json_decode(file_get_contents($filename), true);

if ($pushData === null) {
    error_log("JSON decode error: " . json_last_error_msg()); // Debugging log
    echo json_encode(['ResultCode' => 4, 'message' => 'Corrupt STK push data']);
    exit;
}

// Check if STK push exists
if (!isset($pushData[$checkoutID])) {
    echo json_encode(['ResultCode' => 3, 'message' => 'STK push pending']);
    exit;
}

// Return STK push response
$pushStatus = $pushData[$checkoutID];
echo json_encode($pushStatus);
?>