<?php 
   require_once 'connect.php';
   $conn = new connect_data();

     class User{

        public function addUser($name, $password, $phone,$email, $address){
            $data= $this->conn->connect();
            $sql="insert into Users (name_user, pass, phone_num, email, address) value('$name', '$password', $phone, '$email', '$address')";
            $result= $this->conn->req($data,$sql);
            // if ($result==true) {
            //     echo "Thêm vào thành công";
            // }else{
            //     echo "Thêm vào không thành công";
            //     }
        }


        public function deleteUser($id)
		{
            $data=$this->conn->connect();
		    $query = "DELETE FROM Users WHERE ID_user = '$id'";
		    $result = $this->conn->req($data,$query);
            
		// if ($result==true) {
        //     echo "Xóa thành công";
		// }else{
		// 	echo "Xóa không thành công";
		//     }
		}



        public function getUser()
		{
            $data= $this->conn->connect();
		    $query = "SELECT * FROM Users";
		    $result = $this->conn->req($data,$query);
		if ($result->num_rows > 0) {
		    $data = array();
		    while ($row = $result->fetch_assoc()) {
		           $data[] = $row;
		    }
			 return $data;
		    }else{
			 echo "Không có gì ";
		    }
		}

        public function editUser($name, $password, $phone,$email, $address)
		{
            $data= $this->conn->connect();
            $query = "update * FROM Users set (name_user = $name, pass = $password, phone_num = $phone, email = $email, address = $address";
            $result = $this->conn->req($data,$query);
            if ($result==true) {
			    echo "Sửa thành công";
			}
            else{
			    echo "Lỗi";
			}
        
        }


    }

    
?>


