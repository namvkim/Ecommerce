<?php
class connect_data
{   
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $data = "bt";
    protected $connection;

    
    public function connect()
    {
        
       return  mysqli_connect($this->servername, $this->username, $this->password, $this->data);
    }
    
    public function req($database,$sql){
        return mysqli_query($database, $sql);
    }
}
?>