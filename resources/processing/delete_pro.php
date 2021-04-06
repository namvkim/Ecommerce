<?php
require_once '../data/product_data.php';
$pro = new Product();      
if(isset($_GET['id'])){
    echo $_GET['id'];
    $pro->delete($_GET['id']);
    header("location:http://localhost/ecommerce/admin.php");
}

?>