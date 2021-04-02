<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sign_UP Page -- Fa -- PNV</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
   <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
   <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="./resources/css/signUp.css">
  
</head>
<body>
<!-- <div class="header" style="background-color :cadetblue; height:80px; display: flex;
   justify-content: center; padding-top:15px; position: relative;">
      <h2>ĐĂNG KÝ</h2>
   </div> -->
   <div class="content" style="background-image: url('./resources/img/background.jpg');
     background-repeat:no-repeat; background-size:cover; height:100vh; width:100% ;  display: flex; align-items: center;  " >
  
   <div class="container content-input"  >
          
                  <form action="/action_page.php"  >
               <br>
               <div class="form-group">
                   <input type="text" class="form-control" id="fullname" placeholder="Nhập họ và tên của bạn" name="fullname">
               </div>
               <div class="form-group">
                   <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn" name="email">
               </div>
               <div class="form-group">
                   <input type="password" class="form-control" id="password1" placeholder="Tạo mật khẩu" name="password1">
               </div>
               <div class="form-group">
                   <input type="password" class="form-control" id="password2" placeholder="Nhập lại mật khẩu" name="password2">
               </div>
              
               <!-- <a href=""><input type="submit" name="btn" value="Sign In"></input></a> -->
               <a href=""> <button type="button" class="form-control btn btn-primary btn-lg btn-block" name="btn">Đăng Ký</button></a>
               <div class="content-input-footer" >
                   <div>Đã có tài khoản</div>
                   <div> <a href="./login.php"><u>Đăng Nhập</u></a></div>
               </div><br>
           </form>
       </div>
   </div>
<!--
   <div class="footer" style="background-color :cadetblue;  height:40px;">
      
   <div class="footer-logo" style=" display: flex;
   justify-content: center;">
      
       <p class="footer-logo-title"  >FA</p>
       <img class="logo" src="./resources/img/logo.jpg" alt="logo" style="width:30px; height:30px;"  >
       <p class="footer-logo-title"  >TEAM</p>
</div>
   </div> -->
</body>
<?php
              
  
     
if(isset($_POST['btn']))
{
   if(empty($_POST['fullname']))
   {
       echo"Bạn chưa nhập vào họ và tên";
   }
   else if(empty($_POST['email']))
   {
       echo "Bạn chưa nhập email";
   }
   else if(empty($_POST['password1']))
   {
       echo "Bạn chưa nhập mật khẩu";
   }
   else if(empty($_POST['password2']))
   {
       echo "Bạn chưa nhập lại mật khẩu";
   }
   else
   {
       $fullname = $_POST['fullname'];
       $email = $_POST['email'];
       $pass = $_POST['password1'];
       $pass2 = $_POST['password2'];
       
       if($pass1 != $pass2)
       {
           echo"Mật khẩu của bạn không trùng khớp";
       }
       else{
          
       }
      
   }
}
?>
<script src="./resources/js/signUp.js"></script>
</html>
<!-- <div class="clearfix"></div> -->
<!-- <h1 class="animate__animated animate__bounce">An animated element</h1> -->
 
 
 

