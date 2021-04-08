<?php
require_once '../data/user.php';
$cus = new User();      
if(isset($_GET['id'])){
    $cus->block($_GET['id'],1);
    header("location:http://localhost/ecommerce/admin.php");
}
?>