<?php
require_once 'vendor/autoload.php';
MercadoPago\SDK::setAccessToken('TEST-4818673285371487-112515-961f0fd15bcbb99e0182b0409c088ea5-176213646');

$payment = new MercadoPago\Payment();
$payment->transaction_amount = 141;
$payment->token = "YOUR_CARD_TOKEN";
$payment->description = "Ergonomic Silk Shirt";
$payment->installments = 1;
$payment->payment_method_id = "visa";
$payment->payer = array(
    "email" => "larue.nienow@email.com"
);

$payment->save();

//echo "pay".$payment->status;
echo json_encode($payment);
?>