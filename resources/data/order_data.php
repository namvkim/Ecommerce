<?php
 require_once 'connect.php';
 $conn1= new connect_data();

 
  class orders{
      public function add($ID_user){
          $data= $conn1->connect();
          $sql="INSERT INTO admin(ID_user)  value('$ID_user')";
          $result= $conn1->req($data,$sql);
      }

      public function update($ID_user){
        $sql = "UPDATE `orders` SET ID_user = $ID_user WHERE id='$ID_user'";
        if ($conn->$sql === TRUE) {
            header('location:admin.php');
        } 
        else {
            echo "Error updating record: " . $conn->error;
        }

      }

      public function delete($ID_user){
        if(isset($_REQUEST['ID_user']) and $_REQUEST['ID_user']!=""){
            $id=$_GET['ID_user'];
            $sql = "DELETE FROM user WHERE ID_user='$ID_user'";
        if ($conn->req($sql) === TRUE) {
            header('location:admin.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }
        
        }
     
      $conn->close();
      }

    }
?>