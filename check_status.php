<?php
if (!isset($_POST['CheckoutRequestID'])) {
    echo json_encode(['ResultCode' => 1, 'message' => 'Missing CheckoutRequestID']);
    exit;
}

$checkoutID = $_POST['CheckoutRequestID'];
$filename = 'payments.json';

// Ensure the file exists before reading
if (!file_exists($filename)) {
    echo json_encode(['ResultCode' => 2, 'message' => 'No payment data yet']);
    exit;
}

$payments = json_decode(file_get_contents($filename), true);

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