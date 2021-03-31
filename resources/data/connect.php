<?php
class connect
{
    public function connect($data)
    {
        return mysqli_connect('localhost', 'root', '', $data) or die("Khong ket noi duoc !");
    }
    
    public function req($data,$sql){
        return mysqli_query($data, $sql);
    }
}
