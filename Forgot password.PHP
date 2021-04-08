

<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
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
   <h3 class=" text-center " ><b> Tìm tài khoản</b></h3>

                  <form action="" method="post" >
               <br>
               <div class="form-group">
                   <input type="email" class="form-control" id="email" placeholder="Email" name="email">
               </div>
              
             <input type="submit" class="form-control btn btn-outline-danger btn-lg btn-block" name="btn" value="Tìm"></input>
               <div class="content-input-footer" >
                   <div style="color:black; padding-right:5px;">Chưa có tài khoản</div>
                   <div> <a href="signUp.php"><u>Đăng Ký</u></a></div>
               </div><br>
           </form>
       </div>
   </div>


   <?php
              
  
     
if(isset($_POST['btn']))
{
    $email = $_POST['email'];

    require "./resources/data/user.php";
    $user = new User();
    $result = $user->get();
     while ($row = mysqli_fetch_array($result))
     {
        if( $email == $row['email'])
        {
            $_SESSION['email'] = $_POST['email'];

            echo '<script language="javascript"> window.location="editpass.php";</script>';
        }
        else
        {
            echo '<script language="javascript">alert("Không có tài khoản này"); window.history.go(-1);</script>'; 
   
        }  
     }
      
     

}


?>



<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        function sendEmail() {
            var email = $("#email");
 
            if ( isNotEmpty(email) ) {
                $.ajax({
                   url: 'sentEmailForgotpass.php',
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
</html>