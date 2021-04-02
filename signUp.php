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
 
   <div class="content" style="background-image: url('./resources/img/background.jpg');
     background-repeat:no-repeat; background-size:cover; height:100vh; width:100% ;  display: flex; align-items: center;  " >
  
   <div class="container content-input content-input-wrap"  >
   <h3 class=" text-center "  ><b> ĐĂNG Ký</b></h3>
    
          
                  <form action="/action_page.php" method="POST"  >
               <br>
               <div class="form-group">
                   <input type="text" class="form-control" id="name" placeholder="Name *" name="name" value="<?php if(isset($_POST['name'])){echo $_POST["name"] ;}?>">
               </div>
               
               <div class="form-group">
                   <input type="password" class="form-control" id="password1" placeholder="Password *" name="password1" value="<?php if(isset($_POST['passeord1'])){echo $_POST["password1"] ;}?>">
               </div>
               <div class="form-group">
                   <input type="password" class="form-control" id="password2" placeholder="Password *" name="password2">
               </div>
               <div class="form-group">
                   <input type="email" class="form-control" id="email" placeholder="Email *" name="email " value="<?php if(isset($_POST['email'])){echo $_POST["email"] ;}?>">
               </div>
               <div class="form-group">
                   <input type="number" class="form-control" id="phone" placeholder="Phone number *" name="phone" value="<?php if(isset($_POST['phone'])){echo $_POST["phone"] ;}?>">
               </div>
               <div class="form-group">
                   <input type="text" class="form-control" id="address" placeholder="Address *" name="address" value="<?php if(isset($_POST['address'])){echo $_POST["address"] ;}?>">
               </div>
           
                <a href="./inde.php">
                <button type="button" class="form-control btn btn-primary btn-lg btn-block" name="btn">Đăng Ký</button>
                </a>
                
               <div class="content-input-footer" >
                   <div style="color:black">Đã có tài khoản</div>
                   <div> <a href="login.php"><u >Đăng Nhập</u></a></div>
               </div><br>
           </form>
           
       </div>
   </div>

   


   
</body>
<?php
              
  
     
if(isset($_POST['btn']))
{
    $fullname = $_POST['fullname'];
           $email = $_POST['email'];
            $pass = $_POST['password1'];
            $pass2 = $_POST['password2'];

        if($pass == $pass2)
        {
            echo "Đăng ký thành công";
            header("Location:http://localhost/Ecommerce/inde.php");
        }
        else
        {
            echo"Mật khẩu không trùng khớp";
            
        }
  


}
?>
<script src="./resources/js/signUp.js"></script>
</html>
<!-- <div class="clearfix"></div> -->
<!-- <h1 class="animate__animated animate__bounce">An animated element</h1> -->
 
 
 

