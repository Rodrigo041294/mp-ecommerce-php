<?php
require_once 'vendor/autoload.php';
MercadoPago\SDK::setAccessToken('TEST-4818673285371487-112515-961f0fd15bcbb99e0182b0409c088ea5-176213646');

$preference = new MercadoPago\Preference();

$item = new MercadoPago\Item();
$item->title = 'Producto 1';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
//echo json_encode($preference->items);
?>

<script
    src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
    data-preference-id="<?php echo $preference->id; ?>">
</script>
