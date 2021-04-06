<?php
require_once '../data/user.php';
$cus = new User();      
if(isset($_GET['id'])){
    $cus->delete($_GET['id']);
    header("location:http://localhost/php/Ecommerce/admin.php");
}

?>