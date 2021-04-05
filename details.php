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
            <a href="login.php">SIGN IN</a>
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="order.php"><i class="fas fa-shopping-cart"></i></a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
        </ul>
    </div>

    <div class="content">
        <img class="content-poster" src="https://nhandaovadoisong.com.vn/wp-content/uploads/2019/05/anh-thien-nhien-dep-1200x675.jpg" alt="">
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
                                <img class="conntent-details__img-item" src="https://cdn.daotaobeptruong.vn/wp-content/uploads/2020/11/an-vat-han-quoc.jpg" alt="Los Angeles" width="1100" height="500">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="conntent-details__img-box">
                                <img class="conntent-details__img-item" src="https://i.pinimg.com/736x/fa/01/7d/fa017dd4f5faeba4dc369c8cf7de7c00.jpg" alt="Chicago" width="1100" height="500">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="conntent-details__img-box">
                                <img class="conntent-details__img-item" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV8V2qhHuRS7yrZJQM_sJhKXNdBJrzNPNPWg&usqp=CAU" alt="Los Angeles" width="1100" height="500">
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
            <div class="conntent-details__info">
                <p class="conntent-details__title">Toboki</p>
                <hr class="conntent-details__clear">
                <p class="conntent-details__price">1 tỉ đô la</p>
                <p class="conntent-details__note">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex expedita veritatis illo inventore? Voluptate eius eos harum assumenda! Amet voluptas corrupti laboriosam quis iure ab qui soluta quaerat! Modi tenetur quidem voluptatem quam
                    eius voluptate eveniet? Incidunt quae quaerat nisi est tenetur cupiditate, maiores itaque. Cupiditate officiis inventore natus vero ullam numquam fugit quia ducimus odit aperiam totam aliquam, facilis explicabo voluptas ipsum quo.
                    Laborum ea ipsam, voluptatibus ex facilis reprehenderit maiores sapiente! Est debitis officiis consectetur voluptas blanditiis inventore sunt similique. Adipisci odio culpa quae, laborum repellat, soluta placeat non nulla laudantium
                    beatae voluptatibus dolorem. Necessitatibus aliquam minus vero.</p>
                <div class="conntent-details__btn">
                    <button type="button" name="conntent-details__add" class="conntent-details__add"><i class="fas fa-shopping-cart"></i> ADD TO CART</button>
                    <button type="button" name="conntent-details__buy" class="conntent-details__buy">BUY NOW</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">

    </div>
</body>
<script src="./resources/js/admin.js"></script>

</html>

<!-- <div class="clearfix"></div> -->
<!-- <h1 class="animate__animated animate__bounce">An animated element</h1> -->