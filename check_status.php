<?php
if (!isset($_POST['CheckoutRequestID'])) {
    echo json_encode(['ResultCode' => 1, 'message' => 'Missing CheckoutRequestID']);
    exit;
}

$checkoutID = $_POST['CheckoutRequestID'];
$filename = 'payments.json';

if (!file_exists($filename)) {
    error_log("File not found: $filename"); // Debugging log
    echo json_encode(['ResultCode' => 2, 'message' => 'No payment data yet']);
    exit;
}

$payments = json_decode(file_get_contents($filename), true);

if ($payments === null) {
    error_log("JSON decode error: " . json_last_error_msg()); // Debugging log
    echo json_encode(['ResultCode' => 4, 'message' => 'Corrupt payment data']);
    exit;
}

// Check if payment exists
if (!isset($payments[$checkoutID])) {
    echo json_encode(['ResultCode' => 3, 'message' => 'Payment still pending']);
    exit;
}

// Return the latest payment status
$paymentStatus = $payments[$checkoutID];
echo json_encode($paymentStatus);
?>