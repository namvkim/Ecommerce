<?php 
require_once 'connect.php';
  class orders_details{
      public function get($ID_order, $ID_pro, $quantity){        
        $conn1= new connect_data();
        $data= $conn1->connect();
        $sql="INSERT INTO order_details value($ID_order, $ID_pro, $quantity)";
        $result= $conn1->req($data, $sql);
      }

      public function update($ID_order, $ID_pro, $quantity){
        $conn1= new connect_data();
        $data= $conn1->connect();
        $sql = "UPDATE order_details SET ID_pro = $ID_pro, quantity =$quantity WHERE ID_order = $ID_order and ID_pro = $ID_pro";
        $result= $conn1->req($data, $sql);     
    }

    public function delete($ID_order, $ID_pro){
        $conn1= new connect_data();
        $data= $conn1->connect();
        $sql = "DELETE from order_details WHERE ID_order = $ID_order and ID_pro = $ID_pro";
        return $conn1->req($data, $sql);
    }

    public function delete_All($ID_order){
        $conn1= new connect_data();
        $data= $conn1->connect();
        $sql = "DELETE from order_details WHERE ID_order = $ID_order";
        return $conn1->req($data, $sql);
    }


    public function view($ID_order){
        $conn1= new connect_data();
        $data= $conn1->connect();
        $sql = "select * from order_details where ID_order =$ID_order";
        return $conn1->req($data, $sql);
    }
    
  }

?>