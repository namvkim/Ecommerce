<?php
class connect_data
{
    public function connect()
    {
        return mysqli_connect('localhost', 'root', '', 'csdl') or die("Khong ket noi duoc !");
    }
    
    public function req($database,$sql){
        return mysqli_query($database, $sql);
    }
}
?>