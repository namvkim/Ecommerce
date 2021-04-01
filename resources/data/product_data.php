
<?php 
    require_once 'connect.php';
   
    class product{
     
       
        // public function add($name, $price, $describes){
        //     $data= $this->conn->connect();
        //     $sql="insert into products(name_pro, price, describes)  value('$name','$price','$describes')";
        //     $result= $this->conn->req($data,$sql);
        // }
        // public function edit($id){
        //     $data= $this->conn->connect();
        //     $sql="delete from products where ID_pro ='$id'";
        //     $result= $this->conn->req($data,$sql);
        // }
        // public function delete($name, $price, $describes){
        //     $data= $this->conn->connect();
        //     $sql="UPDATE `products` SET name_pro ='$name', price ='$price', describes='$describes' where ID_pro='$id'";
        //     $result= $this->conn->req($data,$sql);
        // }
        public function view(){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="select * from products";
            return $conn->req($data,$sql);
        }
    }

?>