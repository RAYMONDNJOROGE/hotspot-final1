<?php
if (!isset($_POST['CheckoutRequestID'])) {
    echo json_encode(['ResultCode' => 1, 'message' => 'Missing CheckoutRequestID']);
    exit;
}

$checkoutID = $_POST['CheckoutRequestID'];
$filename = 'payments.json';

// Ensure the file exists before reading
if (!file_exists($filename)) {
    error_log("File not found: $filename"); // Debugging log
    echo json_encode(['ResultCode' => 2, 'message' => 'No payment data yet']);
    exit;
}

// Decode JSON safely with error handling
$paymentsData = file_get_contents($filename);
$payments = json_decode($paymentsData, true);

// Check if JSON decoding failed
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

// Check for completed or cancelled payments
$paymentStatus = $payments[$checkoutID];

if ($paymentStatus['ResultCode'] === 0) {
    echo json_encode(['ResultCode' => 0, 'message' => 'Payment successful']);
} elseif ($paymentStatus['ResultCode'] === 1032) {
    echo json_encode(['ResultCode' => 1032, 'message' => 'Payment cancelled by user']);
} else {
    echo json_encode(['ResultCode' => $paymentStatus['ResultCode'], 'message' => 'Payment failed']);
}
?>