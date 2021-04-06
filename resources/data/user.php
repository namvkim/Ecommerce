<?php 
   require_once 'connect.php';

     class User {
        public function get(){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="SELECT * from users";
            return $conn->req($data,$sql);
        }
        public function getUser($email, $pass){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="SELECT * from users WHERE email = '$email' and pass = '$pass'";
            return $conn->req($data,$sql);
        }

        public function post($name, $password, $phone,$email, $address){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="INSERT INTO users( name_user, pass, phone_num, email, address) 
            VALUES('$name', '$password', $phone, '$email', '$address')";
            $conn->req($data,$sql);
        }

        public function delete($id){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="DELETE FROM users WHERE ID_user = '$id'";
            $conn->req($data,$sql);
        }

        public function put($id, $name, $password, $phone,$email, $address){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql ="UPDATE users SET name_user =' $name', pass = '$password', phone_num = $phone,
            email = '$email', address = '$address' WHERE ID_user=$id ";
            $conn->req($data,$sql);
        }

        public function block($id,$status){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql ="UPDATE users SET  status = $status WHERE ID_user=$id ";
            $conn->req($data,$sql);
        }

    }

?>
