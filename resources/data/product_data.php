
<?php 
    require_once 'connect.php';
   
    class product{
     
        public function post($name, $price, $describes, $category){
            $conn = new connect_data();
            $data = $conn->connect();
            $sql = "insert into products(name_pro, price, describes, category) value ('$name','$price','$describes', '$category')";
            return $conn->req($data,$sql);
        }
        public function put($id, $name, $price, $describes){
            $conn = new connect_data();
            $data = $conn->connect();
            $sql = "UPDATE `products` SET name_pro ='$name', price ='$price', describes='$describes' where ID_pro= $id";
            return $conn->req($data,$sql);
        }
        public function delete($id){
            $conn = new connect_data();
            $data = $conn->connect();
            $sql = "delete from products where ID_pro = $id";
            return $conn->req($data,$sql);
        }

        public function get(){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="select * from products ";
            return $conn->req($data,$sql);
        }
        public function get_item($category){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="select * from products where category ='$category' ";
            return $conn->req($data,$sql);
        }
    }

?>