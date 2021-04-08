<?php

require_once 'connect.php';
require_once 'order_details_data.php';

class orders
{
  public function post($ID_user, $datee)
  {
    $conn1 = new connect_data();
    $data = $conn1->connect();
    $sql = "INSERT INTO orders ( ID_user, datee, status) VALUES ($ID_user,'$datee',1)";
    $conn1->req($data, $sql);
  }

  public function put($ID_order, $ID_user, $datee, $status)
  {
    $conn1 = new connect_data();
    $data = $conn1->connect();
    $sql = "UPDATE orders SET ID_user= $ID_user,datee='$datee, status=$status WHERE ID_order=$ID_order";
    $conn1->req($data, $sql);
  }

  public function delete($ID_order)
  {
    $conn1 = new connect_data();
    $data = $conn1->connect();
    $sql = "DELETE FROM orders WHERE ID_order= $ID_order";
    $conn1->req($data, $sql);
  }

  public function get()
  {
    $conn1 = new connect_data();
    $data = $conn1->connect();
    $sql = "select * from orders";
    return $conn1->req($data, $sql);
  }
  
  public function get_user($id,$status)
  {
    $conn1 = new connect_data();
    $data = $conn1->connect();
    $sql = "select * from orders where ID_user = $id and status= $status";
    return $conn1->req($data, $sql);
  }
}
?>
