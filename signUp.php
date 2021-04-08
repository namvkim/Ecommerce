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
 
   <div class="content" style="background-image: url('./resources/img/pink.jpg');
     background-repeat:no-repeat; background-size:cover; height:100vh; width:100% ;  display: flex; align-items: center;  " >
  
   <div class="container content-input content-input-wrap"  >
   <h3 class=" text-center "  ><b> ĐĂNG Ký</b></h3>
    
          
                  <form action="" method="POST" id="myform" >
               <br>
               <div class="form-group">
                   <input type="text" class="form-control" id="name" placeholder="Fullname *" name="name" value="<?php if(isset($_POST['name'])){echo $_POST["name"] ;}?>">
               </div>
               
               <div class="form-group">
                   <input type="password" class="form-control" id="pass1" placeholder="Password *" name="pass1" value="<?php if(isset($_POST['pass1'])){echo $_POST["pass1"] ;}?>">
               </div>
               <div class="form-group">
                   <input type="password" class="form-control" id="pass2" placeholder="Confirm *" name="pass2">
               </div>
               <div class="form-group">
                   <input type="email" class="form-control" id="email" placeholder="Email *" name="email" value="<?php if(isset($_POST['email'])){echo $_POST["email"] ;}?>">
               </div>
               <div class="form-group">
                   <input type="number" class="form-control" id="phone" placeholder="Phone number *" name="phone" value="<?php if(isset($_POST['phone'])){echo $_POST["phone"] ;}?>">
               </div>
               <div class="form-group">
                   <input type="text" class="form-control" id="address" placeholder="Address *" name="address" value="<?php if(isset($_POST['address'])){echo $_POST["address"] ;}?>">
               </div>
           
             
                <input type="submit" class="form-control btn btn-outline-danger btn-lg btn-block"  onclick="sendEmail()"name="btn" value="Đăng Ký" />
 
                
                
               <div class="content-input-footer" >
                   <div style="color:black ;padding-right:5px;">Đã có tài khoản</div>
                   <div> <a href="login.php"><u >Đăng Nhập</u></a></div>
               </div><br>
           </form>
        
       </div>
   </div>
 
   
 
                    
<?php
              
 
     
              if(isset($_POST['btn']))
              {                         
                    if ( !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['pass1']) &&!empty($_POST['pass2'])
                     &&!empty($_POST['phone'])  &&!empty($_POST['address'])) 
                     {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $pass1 = $_POST['pass1'];
                        $pass2 = $_POST['pass2'];
                        $phone = $_POST['phone'];
                        $address = $_POST['address'];
 
 
                        if($pass1 == $pass2)
                      {
                        //echo '<script language="javascript">alert("Mật khẩu không trùng khớp"); window.history.go(-1);</script>'; 
                            
                        require 'resources/data/user.php';
                        $use = new User();
                        $result = $use->getUser($email,$pass1);
                       
                       
                       
                        // while($row = mysqli_fetch_assoc($result))
                        // {

                        
                        // echo $row['email'];}
                         if( mysqli_num_rows($result) > 0)
                        //if( $email == $row['email'])
                        {
                            
                          echo '<script language="javascript">alert("Tài khoản đã tồn tại"); window.history.go(-1);</script>'; 
                        }
                        else
                        {
                            $use->post($name, $pass1, $phone,$email, $address);
                           //  echo '<script language="javascript">alert("Đăng ký thành công"); window.location="inde.php";</script>';
                        }
                       
                      }
                      else
                      {
                            echo '<script language="javascript">alert("Mật khẩu không trùng khớp"); window.history.go(-1);</script>'; 
                        }
 
                     }    
                     else
                     {
                        echo '<script language="javascript">alert("Bạn chưa nhập thông tin"); window.history.go(-1);</script>'; 
 
                     }                     
              
                     
            }
              ?>
           
 
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        function sendEmail() {
            var email = $("#email");
 
            if ( isNotEmpty(email) ) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       email: email.val(),
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }
 
        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');
 
            return true;
        }
    </script>
   
</body>
<script src="./resources/js/signUp.js"></script>
</html>
<!-- <div class="clearfix"></div> -->
<!-- <h1 class="animate__animated animate__bounce">An animated element</h1> -->
 
 
 
 


