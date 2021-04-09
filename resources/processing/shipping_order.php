<?php
require_once '../data/order_data.php';
$order = new orders();      
if(isset($_GET['id'])){
    $order->put_status($_GET['id'],3);
    header("location:http://localhost/ecommerce/admin.php");
}
?>