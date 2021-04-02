<?php 
require_once 'connect.php';

 $conn1= new connect_data();

 
  class orders_details{
      public function add($ID_order, $ID_pro, $quantity, $datee){
          $data= $conn1->connect();
          $sql="INSERT INTO admin  value($ID_order, $ID_pro, $quantity, '$datee')";
          $result= $conn1->req($ID_order, $ID_pro, $quantity, $datee);
      }

      public function update($ID_order, $ID_pro, $quantity, $datee){
        $sql = "UPDATE `orders` SET ID_order = $ID_order, ID_pro = $ID_pro, quantity =$quantity, datee = $datee WHERE id='$id'";
        if ($conn->req($sql) === TRUE) {
            header('location:admin.php');
        } 
        else {
            echo "Error updating record: " . $conn->error;
        }

    }
    


?>