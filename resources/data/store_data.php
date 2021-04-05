<?php 
   require_once 'connect.php';

     class Store {
        public function get(){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="SELECT * from materials";
            return $conn->req($data,$sql);
        }

        public function post($name_mate, $amount_mate, $price_mate,$date_input){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="INSERT INTO materials( name_mate, amount_mate, price_mate, date_input) 
            VALUES('$name_mate', '$amount_mate', $price_mate, '$date_input')";
            $conn->req($data,$sql);
        }

        public function delete($id){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="DELETE FROM materials WHERE ID_mate = '$id'";
            $conn->req($data,$sql);
        }

        public function put($id, $name_mate, $amount_mate,$price_mate, $date_input){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql ="UPDATE materials SET name_user =' $name_mate', pass = '$amount_mate', phone_num = $price_mate,
            email = '$price_mate' WHERE ID_user=$id ";
            $conn->req($data,$sql);
        }

    }

?>