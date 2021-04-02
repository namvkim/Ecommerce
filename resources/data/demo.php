
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
      .container{
        width: 400px;
        background-color: #99FFFF	;
      }

    </style>
</head>
<body>



<div class="container">
  <form action="/action_page.php">
    <div class="form-group">
       <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
       <input type="password" class="form-control" id="pass" placeholder="pass" name="pass">
    </div>
    <div class="form-group">
       <input type="number" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
    </div>
    <div class="form-group">
       <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
       <input type="text" class="form-control" id="address" placeholder="Address" name="address">
    </div>

    </div>
    <a href=""><input type="submit" name="btn" value="Submit"></input></a>

  </form>

</div>



<?php

// if(isset($_POST['btn']))
// {
//     $name =$_POST['name'];
//     $address = $_POST['address'];
//     $email =$_POST['email'];
//     $phone = $_POST['phone'];


    
// require_once 'Users.php';
// $user1 = new User();
// $user1->addUser($name, $password, $phone,$email, $address);
// $user1->getUser();
// }



require_once 'Users.php';
$user1 = new User();
$user1->addUser('ni', '1234', '0124886436', 'ni.ho@gmil.com','QT');
$user1->getUser();
?>