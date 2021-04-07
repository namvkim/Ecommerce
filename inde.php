<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page with love -- Fa -- PNV</title>
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
    <link rel="stylesheet" href="./resources/css/index.css">
</head>

<body>

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
        <!--sli-->
        <!-- <img class="content-poster" src="https://cdn.asiatatler.com/asiatatler/i/th/2019/08/15162927-dsc0499_cover_2000x1335.jpg" alt="background"> </image> -->
        <br><br>
        <div class="main">
        <form action ="" method ="POST"class="form">
            <div class="tab">   
                <button class="btn" name ="food" value ="Food">Food</button>
                <button class="btn" name ="drink" value ="Drink">Drink</button>
                <button class="btn" name ="top" value ="Top">Fruit</button>
                <button class="btn" name ="sale" value ="Sale">Sale</button>
    
            </div>

            <hr>

            <?php

            if(isset($_POST['near']))echo "HI";
 
            require_once 'resources\data\product_data.php';

                $pro = new product();


                require_once 'resources\data\picture_data.php';  
                $pic = new picture();

                require_once 'resources\data\order_details_data.php';
                $order = new orders_details();

                if(isset($_POST['drink'])){

                    ?>
                        <div class="row">
                        <?php 
                        $result = $pro->get_cate(2);                         
                        while($row = mysqli_fetch_assoc($result)){                                         
                            ?> 
                            <div class="column">
                                <div class ="card">
                                <?php
                                    $result_pic = $pic->get($row['ID_pro']);
                                    $data = mysqli_fetch_assoc($result_pic);
                                    ?> 
                                        <img class ="column_img" src="./resources/img/img_pro/<?php echo $data['pic']?>"  alt="<?php echo $row['name_pro']; ?>">
                                        <h4><?php echo $row['name_pro']?></h4>
                                        <p><?php echo $row['describes']?></p>
                                        <p class="column_Price_Cart"><button class ="column-detail">Chi tiết sản phẩm</button>
                                            <a href="details.php?id=<?php echo $row['ID_pro'] ?>">
                                        <button class="column-cart" name="Add"> <i class="fa fa-cart-arrow-down"></i> Add to cart</button></a></p>

                                        <!-- <button > <a href="details.php?$id='$row'"></a>Chi tiết SP</button> -->

                                </div> 
                            </div>                         
                            <?php 
                        }                  
                        ?>
                    </div>
                    <?php
                    }else if(isset($_POST['top'])){



                    }else if(isset($_POST['sale'])){

                    }else{

                        ?>
                        <div class="row">
                        <?php 
                        $result = $pro->get_cate(1);                         
                        while($row = mysqli_fetch_assoc($result)){                                         
                            ?> 
                            <div class="column">
                                <div class ="card">
                                <?php
                                    $result_pic = $pic->get($row['ID_pro']);
                                    $data = mysqli_fetch_assoc($result_pic);
                                    ?> 
                                        <img class ="column_img" src="./resources/img/img_pro/<?php echo $data['pic']?>"  alt="<?php echo $row['name_pro']; ?>">
                                        <h4><?php echo $row['name_pro']?></h4>
                                        <p><?php echo $row['describes']?></p>
                                        <p class="column_Price_Cart"><button class ="column-detail">Chi tiết sản phẩm</button><a href="resources/processing/add_cart.php?id=<?php echo $row['ID_pro'] ?>"><button class="column-cart" name="Add"> <i class="fa fa-cart-arrow-down"></i> Add to cart</button></a></p>
                                </div> 
                            </div>                         
                            <?php 
                        }                  
                        ?>
                    </div>
                    <?php
                }
              
            ?>
                    </form>
            <!-- END MAIN -->
        </div>

    </div>
    </div>

    <div class="footer">
    </div>
</body>
<script src="./resources/js/admin.js">
</script>

</html>
