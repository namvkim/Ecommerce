<?php
require_once '../data/cart_data.php';
$cart = new cart();      
if(isset($_GET['id'])){
    $cart->delete($_GET['id']);
    header("location:http://localhost:8080/Ecommerce/cart.php");
}

?>