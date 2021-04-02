
<?php 
    require_once 'connect.php';
   
    class picture{
        
        public function add($ID_pro,$pic){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql ="insert into picture(ID_pro,pic)value( $ID_pro,'$pic')";
            $result= $conn->req($data,$sql);
        }
        public function edit($ID_pic, $pic){
            $conn = new connect_data();
            $data = $conn->connect();
            $sql ="UPDATE `picture` SET pic ='$pic' where ID_pic= $ID_pic";
            $result= $conn->req($data,$sql);
        }
        public function delete($ID_pic){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="delete from picture where ID_pic = $ID_pic";
            $result = $conn->req($data,$sql);
        }
        public function deletePro($ID_pic){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="delete from picture where ID_pic = $ID_pic";
            $result = $conn->req($data,$sql);
        }
        public function view($ID_pro){
            $conn = new connect_data();
            $data= $conn->connect();
            $sql="select * from picture where ID_pro = $ID_pro";
            return $conn->req($data,$sql);
        }
    }

?>