<?php
require_once 'vendor/autoload.php';
MercadoPago\SDK::setAccessToken('TEST-4818673285371487-112515-961f0fd15bcbb99e0182b0409c088ea5-176213646');

$token = $_REQUEST["token"];
$payment_method_id = $_REQUEST["payment_method_id"];
$installments = $_REQUEST["installments"];
$issuer_id = $_REQUEST["issuer_id"];

$preference = new MercadoPago\Preference();

$item = new MercadoPago\Item();
$item->id = "1234";
$item->description = "Compra de pruebas";
$item->title = htmlspecialchars( $_POST["title"] );
$item->quantity = intval( $_POST["unit"] );
$item->unit_price = floatval( $_POST["price"] );
$preference->items = array( $item );



$total = floatval($_POST['unit'] * $_POST['price']);

$payment = new MercadoPago\Payment();
$payment->transaction_amount = $total;
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