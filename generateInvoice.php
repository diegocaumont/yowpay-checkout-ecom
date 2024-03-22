<?php
require_once './yowpayApi.php';

function generatePaymentLink($amount, $currency, $orderId, $language) {
    $token = 'APP_TOKEN';
    $secret = 'APP_SECRET';

    $data = array(
        'amount' => $amount,
        'currency' => $currency,
        'orderId' => $orderId,
        'language' => $language,
        'token' => $token,
        'timestamp' => time()
    );

    $hash = YowPayApi::createSignature($data, $secret);

    $queryParams = http_build_query($data);
    $paymentLink = "https://yowpay.com/transaction/create?$queryParams&hash=$hash";

    return $paymentLink;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $currency = $_POST['currency'];
    $orderId = $_POST['orderId'];
    $language = $_POST['language'];

    $paymentLink = generatePaymentLink($amount, $currency, $orderId, $language);

    // Redirect the user to the generated payment link
    header("Location: $paymentLink");
    exit();
}
?>