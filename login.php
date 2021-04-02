




<!DOCTYPE html>
<html lang="en">
<head>
   <title>Log_In Page -- Fa -- PNV</title>
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
 
<!-- 
<div class="header">
      
         <div class="header-logo"  style="display: flex;  justify-content: center; background:cadetblue;">
            <p class="logo-title">FA</p>
            <img class="logo" src="./resources/img/logo.jpg" alt="logo" style="width: 20px; height:20px;">
            <p class="logo-title">TEAM</p>
        </div>
         
    </div> -->


   <div class="content" style="background-image: url('./resources/img/background.jpg');
     background-repeat:no-repeat; background-size:cover; height:100vh; width:100% ;  display: flex; align-items: center;  " >
  
   <div class="container content-input content-input-wrap"  >
   <h3 class=" text-center " style="color:dodgerblue;"><b> ĐĂNG NHẬP</b></h3>

                  <form action="/action_page.php"  >
               <br>
               <div class="form-group">
                   <input type="text" class="form-control" id="username" placeholder="Username" name="username">
               </div>

               <div class="form-group">
                   <input type="password" class="form-control" id="password" placeholder="Password" name="password">
               </div>
            
               <DIV class=" content-input-flex" >
                    <div style="color:black;">
                        <input type="checkbox" id="checkbox1" name="checkbox1" >
                        <label for="checkbox1"> Lưu đăng nhập</label><br>

                    </div>
                    <div style="color:black;" >
                        <a><u> Quên mật khẩu</u> </a>
                    </div>
                </DIV>
              
             <input type="submit" class="form-control btn btn-primary btn-lg btn-block" name="btn" value="Đăng Nhập"></input>
               <div class="content-input-footer" >
                   <div style="color:black;">Đã có tài khoản</div>
                   <div> <a href="signUp.php"><u>Đăng Ký</u></a></div>
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
    $username = $_POST['username'];
    $pass = $_POST['password'];

    require_once "./resources/data/Users.php";
    $user = new User();
    $result = $user->getUser();
    while ($row = mysqli_fetch_assoc($result)) {
        if ( $username == $row['name_user'])
        {
            if( $pass == $row['pass'])
            {
                echo "Đăng nhập thành công";
                header("Location:http://localhost:8088/Ecommerce/inde.php");
            }
            else
            {
                echo "Mật khẩu sai";
            }
        }
        else 
        {
            echo "Tài khoản không tồn tại";

        }
     }


    
}
?>
<script src="./resources/js/signUp.js"></script>
</html>
<!-- <div class="clearfix"></div> -->
<!-- <h1 class="animate__animated animate__bounce">An animated element</h1> -->
 
 
 

