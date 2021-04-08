<?php
require_once '../data/store_data.php';
$store = new Store();      
if(isset($_GET['id'])){
    $store->delete($_GET['id']);
    header("location:http://localhost/ecommerce/admin.php");
}
?>