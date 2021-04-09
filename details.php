<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Details with love -- Fa -- PNV</title>
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
    <link rel="stylesheet" href="./resources/css/menu.css">
    <link rel="stylesheet" href="./resources/css/details.css">
</head>
<body>
<div class="header">
        <ul class="header-menu hide-menu">
            <a href="inde.php">HOME PAGE</a>
            <a href="pesonal.php">HISTORY</a>
            <a href="about.php">ABOUT US</a>
        </ul>
        <a href="order.php" class="header-cart"><i class="fas fa-shopping-cart"></i></a>
        <div class="header-logo">
            <p class="logo-title">FA</p>
            <img class="logo" src="./resources/img/logo.jpg" alt="logo">
            <p class="logo-title">TEAM</p>
        </div>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label>
        <ul class="header-menu">
            <a href="inde.php" class="show-menu">HOME PAGE</a>
            <a href="pesonal.php" class="show-menu">HISTORY</a>
            <a href="about.php" class="show-menu">ABOUT US</a>
            <?php echo $_SESSION['user'];
            if(isset($_SESSION['user'])){
                require_once './resources/data/user.php';
                $user = new User();
                $result_user =  $user->get_IDUser($_SESSION['user']);
                $row_user= mysqli_fetch_assoc($result_user);
                echo $row_user['name_user'];
            } else{?>
            <a href="login.php">SIGN IN</a>
            <?php } ?>
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
        </ul>
    </div>

    <div class="content">


    <div class="header">
        <ul class="header-menu hide-menu">
            <a href="#">HOME PAGE</a>
            <a href="#">ABOUT US</a>
        </ul>
        <a href="#" class="header-cart"><i class="fas fa-shopping-cart"></i></a>
        <div class="header-logo">
            <p class="logo-title">FA</p>
            <img class="logo" src="./resources/img/logo.jpg" alt="logo">
            <p class="logo-title">TEAM</p>
        </div>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label>

        <ul class="header-menu">
            <a href="#" class="show-menu">HOME PAGE</a>
            <a href="#" class="show-menu">ABOUT US</a>
            <a href="#">SIGN IN</a>
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
        </ul>
    </div>

    <div class="content content-poster">
        <!--slideshow-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://cdn.asiatatler.com/asiatatler/i/th/2019/08/15162927-dsc0499_cover_2000x1335.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Ẩm thực 3 miền</h1>
                        <h5>Miền Bắc - Miền Trung - Miền Nam</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://tuongotchinsu.net/wp-content/uploads/2020/05/an-vat.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                        <h1>Nước uống các loại</h1>
                        <h5>Không ga - Nguồn gốc trái cây - Nguồn gốc trái cây - Nguồn gốc ngữ cốc </h5>
                    </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://d1ralsognjng37.cloudfront.net/040c06d5-9d77-4574-84e0-ba050c9e237b" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                        <h1>Món ăn hàng đầu</h1>
                        <h5>Được nhiều người lựa chọn</h5>
                    </div>
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>  



    <?php



if( isset($_GET['id']))
{


    require_once "./resources/data/product_data.php";
    $pro = new product();
    $result = $pro-> get_pro($_GET['id']);

    while ($row=mysqli_fetch_assoc($result))
    {



        require_once "./resources/data/picture_data.php";
        $pict = new picture();
        $result1 = $pict-> get($row['ID_pro']);
        $row1 = mysqli_fetch_assoc($result1);
        
            
        

    ?>

    <div class="conntent-details">
    <div class="conntent-details__img">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="conntent-details__img-box">
                        <img class="conntent-details__img-item" src="./resources/img/img_pro/<?php  echo $row1['pic']; ?>" alt="Los Angeles" width="1100" height="500">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="conntent-details__img-box">
                        <img class="conntent-details__img-item" src="./resources/img/img_pro/<?php  echo $row1['pic']; ?>" alt="Chicago" width="1100" height="500">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="conntent-details__img-box">
                        <img class="conntent-details__img-item" src="./resources/img/img_pro/<?php  echo $row1['pic']; ?>" alt="Los Angeles" width="1100" height="500">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <i class="fas fa-chevron-left conntent-details__img-icon"></i>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <i class="fas fa-chevron-right conntent-details__img-icon"></i>
            </a>
        </div>
    </div>

    <?php
       // }
        ?>
    <div class="conntent-details__info">
        <p class="conntent-details__title"><?php  echo $row['name_pro']; ?></p>
        <hr class="conntent-details__clear">
        <p class="conntent-details__price"><?php  echo $row['price']; ?></p>
        <p class="conntent-details__note"><?php  echo $row['describes']; ?></p>
        <div class="conntent-details__btn">
            <a href="resources/processing/add_cart.php?id=<?php echo $row['ID_pro'] ?>"><button type="button" name="conntent-details__add" class="conntent-details__add"><i class="fas fa-shopping-cart"></i> ADD TO CART</button></a>
            <button type="button" name="conntent-details__buy" class="conntent-details__buy">BUY NOW</button>
        </div>
    </div>
</div>

    <?php
    }
        }
?>


    <div class="footer">

    </div>
</body>
<script src="./resources/js/admin.js"></script>

</html>