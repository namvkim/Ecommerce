<?php 
   require_once 'connect.php';
   $conn1= new connect_data();

   
    class admin{
        public function add($name, $pass){
            $data= $conn1->connect();
            $sql="insert into admin  value('$name', '$pass')";
            $result= $conn1->req($data,$sql);
        }
    }

    
?>