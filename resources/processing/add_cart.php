<?php
session_start();
require_once '../data/cart_data.php';
$cart = new cart();      
if(isset($_GET['id'])){
    $cart->post($_SESSION['user'],$_GET['id']);
    header("location:http://localhost/ecommerce/inde.php");
}

?>