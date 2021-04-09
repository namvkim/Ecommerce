<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order product -- Fa -- PNV</title>
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
    <link rel="stylesheet" href="./resources/css/cart.css">
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
            <a href="login.php">SIGN IN</a>
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
        </ul>
    </div>

    <div class="content">
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
        <br>
        <div class="content_table">
            <div class="content_main">
                <div class="content_main1">SP</div>
                <div class="content_main2">PRODUCT</div>
                <div class="content_main3"></div>
                <div class="content_main4">PRICE</div>
                <div class="content_main5">QUANTITY</div>
                <div class="content_main6">CHOSE</div>
                <div class="content_main7">DELETE</div>
            </div>
            <form action="order.php" method="POST">

                <?php
                require_once 'resources/data/cart_data.php';
                require_once 'resources/data/product_data.php';
                require_once 'resources/data/picture_data.php';
                $cart = new cart();
                $pro = new product();
                $pic = new picture();
                $result_cart = $cart->getUser(1);
                $i = 0;
                while ($row_cart = mysqli_fetch_assoc($result_cart)) {
                    $result_pro = $pro->get_pro($row_cart['ID_pro']);
                    $row_pro = mysqli_fetch_assoc($result_pro);

                    $result_pic = $pic->get($row_cart['ID_pro']);
                    $row_pic = mysqli_fetch_assoc($result_pic);
                    $i++;
                ?>

                    <div class='content_item'>
                        <div class='content_item1'><?php echo $i ?></div>
                        <div class='content_item2'>
                            <img src='./resources/img/img_pro/<?php echo $row_pic['pic'] ?>' alt=''>
                        </div>
                        <div class='content_item3'><?php echo $row_pro['name_pro'] ?></div>
                        <div class='content_item4'><?php echo $row_pro['price'] ?></div>
                        <div class='content_item5'>
                            <input type="number" value="1" name="qtt<?php echo $i?>" class="quantity"/>   
                        </div>
                        <div class='content_item6'>
                            <input type='checkbox' name="check<?php echo $i?>" value="<?php echo $row_cart['ID_pro'] ?>">                  
                        </div>
                        <div class='content_item7'><a href="./resources/processing/delete_cart.php?id=<?php echo $row_cart['ID_cart'] ?>"><i class='far fa-trash-alt'></a></i></div>
                    </div>
                <?php
                }
                ?>
                <div class="content_footer">
                    <a href="http://localhost:8080/Ecommerce/inde.php">
                        <div class="content_footer_update">
                            UPDATE CART
                        </div>
                    </a>
                    <button class="content_footer_checkout" name="btn">
                        <i class="far fa-check-circle"></i>
                        CHECK OUT
                    </button>
            </form>
        </div>

    </div>
    </div>
    <div class="footer">

    </div>
</body>

</html>

<!-- <div class="clearfix"></div> -->
<!-- <h1 class="animate__animated animate__bounce">An animated element</h1> -->