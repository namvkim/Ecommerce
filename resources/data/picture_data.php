
<?php
require_once 'connect.php';

class picture
{
    public function post($ID_pro, $pic)
    {
        $conn = new connect_data();
        $data = $conn->connect();
        $sql = "insert into pictures(ID_pro,pic)value( $ID_pro,'$pic')";
        $conn->req($data, $sql);
    }
    public function put($ID_pic, $pic)
    {
        $conn = new connect_data();
        $data = $conn->connect();
        $sql = "UPDATE pictures SET pic ='$pic' where ID_pic= $ID_pic";
        $conn->req($data, $sql);
    }
    public function delete($ID_pic)
    {
        $conn = new connect_data();
        $data = $conn->connect();
        $sql = "delete from pictures where ID_pic = $ID_pic";
        $conn->req($data, $sql);
    }

    public function get($ID_pro)
    {
        $conn = new connect_data();
        $data = $conn->connect();
        $sql = "select * from pictures where ID_pro = $ID_pro";
        return $conn->req($data, $sql);
    }
}

?>