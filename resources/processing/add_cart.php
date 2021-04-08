<?php
require_once '../data/cart_data.php';
$cart = new cart();      
if(isset($_GET['id'])){
    $cart->post(1,$_GET['id'],1);
    header("location:http://localhost/ecommerce/inde.php");
}

?>