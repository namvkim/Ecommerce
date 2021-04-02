<?php

require_once 'connect.php';
require_once 'order_details_data.php';
 
  class orders{
      public function add($ID_user, $datee){
        $conn1= new connect_data();
          $data= $conn1->connect();
          $sql="INSERT INTO `orders`( `ID_user`, `datee`) VALUES ('$ID_user','$datee')";
          $result= $conn1->req($data,$sql);
      }

      public function update($ID_order, $ID_user,$datee){
        $conn1= new connect_data();
        $data= $conn1->connect();
        $sql = "UPDATE `orders` SET `ID_user`=' $ID_user',`datee`='$datee' WHERE `ID_order`='$ID_order'";
        $result= $conn1->req($data,$sql);
      }

      public function delete($ID_order){
        $conn1= new connect_data();
        $order = new orders_details();
        $order->delete_All($ID_order);
        $data= $conn1->connect();
        $sql = "DELETE FROM `orders` WHERE `ID_order`= '$ID_order'";
        $result= $conn1->req($data,$sql);
      }

      public function view(){
        $conn1= new connect_data();
        $data= $conn1->connect();
        $sql = 'select * from orders';
        return $conn1->req($data,$sql);
       
      }

    }
?>