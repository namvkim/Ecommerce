
<?php 
    require_once 'connect.php';
   
    class cart{
     
        public function post($id_user, $id_pro){
            $conn = new connect_data();
            $data = $conn->connect();
            $sql = "insert into carts(ID_user, ID_pro) value ($id_user,$id_pro)";
            $conn->req($data,$sql);
        }
        public function put($id, $id_user, $id_pro){
            $conn = new connect_data();
            $data = $conn->connect();
            $sql = "UPDATE carts SET ID_user =$id_user, ID_pro =$id_pro where ID_order= $id";
            $conn->req($data,$sql);
        }
        public function delete($id){
            $conn = new connect_data();
            $data = $conn->connect();
            $sql = "delete from carts where ID_cart = $id";
            $conn->req($data,$sql);
        }

        public function get(){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="select * from carts";
            return $conn->req($data,$sql);
        }

        public function getUser($id_user){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="select * from carts where ID_user = $id_user";
            return $conn->req($data,$sql);
        }
    }

?>