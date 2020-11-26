<?php
require_once 'vendor/autoload.php';
MercadoPago\SDK::setAccessToken('TEST-4818673285371487-112515-961f0fd15bcbb99e0182b0409c088ea5-176213646');

$token = $_REQUEST["token"];
$payment_method_id = $_REQUEST["payment_method_id"];
$installments = $_REQUEST["installments"];
$issuer_id = $_REQUEST["issuer_id"];



$payment = new MercadoPago\Payment();
$payment->token = $token;

$payment->description = $_POST['title'];

$payment->installments = $installments;
$payment->payment_method_id = $payment_method_id;
$payment->issuer_id = $issuer_id;
$payment->payer = array(
    "email" => "cheyenne@gmail.com"
);
$payment->save();
var_dump($payment);
// Guarda y postea el pago
//
//...
// Imprime el estado del pago

//...*/
?>