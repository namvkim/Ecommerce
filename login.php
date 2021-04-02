

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page -- Fa -- PNV</title>
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
    <link rel="stylesheet" href="./resources/css/login.css">
    <style>
  

    </style>
</head>

<body>
    <!-- <div class="header" style="background-color :cadetblue; height:80px; padding-top:15px;">
    
        <h2 >ĐĂNG NHẬP</h2>
    </div> -->
    <div class="content" style="background-image: url('./resources/img/background.jpg');
      background-repeat:no-repeat; background-size:cover;height:100vh; width:100% ;  display: flex; align-items: center; " >
        
        
        <div class="container content-input" >
            <form action="/action_page.php">
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Nhập tên đăng nhập" name="name">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="password">
                </div>


                <DIV class=" content-input-flex" >
                    <div >
                        <input type="checkbox" id="checkbox1" name="checkbox1" >
                        <label for="checkbox1"> Lưu đăng nhập</label><br>

                    </div>
                    <div >
                        <a><u> Quên mật khẩu</u> </a>
                    </div>
                </DIV>
                <a href=""> <button type="button" class="btn btn-primary btn-lg btn-block">Đăng Nhập</button></a>

                <div class="content-input-footer" >
                    <div>Chưa có tài khoản</div>
                    <div> <a href="./signUp.php"><u>Đăng Ký</u></a></div>
                </div><br>

            </form>

        </div>
    </div>
    <!-- <div class="footer" style="background-color :cadetblue;  height:125px;">
        
        <div class="footer-logo" style="padding-top:15px;">
        
                <p class="footer-logo-title" style="font-size: 50px;">FA</p>
                <img class="logo" src="./resources/img/logo.jpg" alt="logo" style="height: 100px; width:100px;">
                <p class="footer-logo-title" style="font-size: 50px;">TEAM</p>
        </div>
    </div> -->
</body> 


    <?php

// if(isset($_POST['btn']))
// {
//     if(empty($_POST['name']))
//     {
//         echo"Bạn chưa nhập vào tên đăng nhập";
//     }
//     else if(empty($_POST['password']))
//     {
//         echo "Bạn chưa nhập mật khẩu";
//     }
//     else
//     {
//         $username = $_POST['name'];
//         $pass = $_POST['password'];



//     }
// }
?> <script src="./resources/js/login.js"></script>

</html>