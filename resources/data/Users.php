<?php 
   require_once './connect.php';
//    $conn = new connect_data();
//$conn = new connect_data();

     class User {


       
	
        
        public function addUser($name, $password, $phone,$email, $address){
            $conn = $this->connect();
            $sql="INSERT INTO users( name_user, pass, phone_num, email,address) 
             VALUES('$name', '$password', $phone, '$email', '$address')";
            $result= $conn->req($conn,$sql);
            // if ($result==true) {
            //     echo "Thêm vào thành công";
            // }else{
            //     echo "Thêm vào không thành công";
            //     }

        }
    }





        // public function delete($id, $table) 
        // { 
        //     $query = "DELETE FROM $table WHERE id = $id";
            
        //     $result = $this->connection->query($query);
        
        //     if ($result == false) {
        //         echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
        //         return false;
        //     } else {
        //         return true;
        //     }
        // }
    



        // public function deleteUser($id)
		// {
        //     $data=$this->connection->connect();
		//     $query = "DELETE FROM Users WHERE ID_user = '$id'";
		//     $result = $this->connection->req($data,$query);
            
		// // if ($result==true) {
        // //     echo "Xóa thành công";
		// // }else{
		// // 	echo "Xóa không thành công";
		// //     }
		// }



//         public function getUser()
// 		{
//             $data= $this->connection->connect();
// 		    $query = "SELECT * FROM Users";
// 		    $result = $this->connection->req($data,$query);
// 		if ($result->num_rows > 0) {
// 		    $data = array();
// 		    while ($row = $result->fetch_assoc()) {
// 		           $data[] = $row;
// 		    }
// 			 return $data;
// 		    }else{
// 			 echo "Không có gì ";
// 		    }
// 		}

//         public function editUser($name, $password, $phone,$email, $address)
// 		{
//             $data= $this->connection->connect();
//             $query = "update * FROM Users set (name_user = $name, pass = $password, phone_num = $phone, email = $email, address = $address";
//             $result = $this->connection->req($data,$query);
//             // if ($result==true) {
// 			//     echo "Sửa thành công";
// 			// }
//             // else{
// 			//     echo "Lỗi";
// 			// }
        
//         }


//     }

    
 ?>


