<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pesonal Page -- Fa -- PNV</title>
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
    <link rel="stylesheet" href="./resources/css/pesonal.css">
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
        <div class="collapse show content-navigate">
            <div class="nav-tabs" id="wrapper" style="border: none;">
                <div class="border-right" id="sidebar-wrapper">
                    <div class="list-group list-group-flush">
                        <a href="#confirmation" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Confirmation</a>
                        <a href="#shipping" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Shipping</a>
                        <a href="#received" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Received</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content content_box">
            <div class="tab-pane fade show active" id="confirmation">
                <div class="content_table">
                    <div class="content_main">
                        <div class="content_main1">ID</div>
                        <div class="content_main2">LIST PRODUCT</div>
                        <div class="content_main3">SUBTOTAL</div>
                        <div class="content_main4">DATE</div>
                    </div>
                    <div class="content_item">
                        <div class="content_item1">1</div>
                        <div class="content_item2">
                            <a href="#nav1" class="drop_down_animation">Order details<i class="fas fa-caret-down"></i></a>
                        </div>
                        <div class="content_item3">500K</div>
                        <div class="content_item4">15/2/2020</div>
                    </div>
                    <div class="expandable" id="nav1">
                        <div class="table_details">
                            <div class="table_details_item1">
                                1
                            </div>
                            <div class="table_details_item2">
                                keo
                            </div>
                            <div class="table_details_item3">
                                <img src="https://cdn.tgdd.vn/Products/Images/7199/79592/bhx/keo-mem-sugus-trai-cay-tui-210g-4-700x467.jpg" alt="">
                            </div>
                            <div class="table_details_item4">
                                15
                            </div>
                            <div class="table_details_item5">
                                200k
                            </div>
                        </div>
                    </div>
                    <div class="content_item">
                        <div class="content_item1">1</div>
                        <div class="content_item2">
                            <a href="#nav2" class="drop_down_animation">Order details<i class="fas fa-caret-down"></i></a>
                        </div>
                        <div class="content_item3">500K</div>
                        <div class="content_item4">15/2/2020</div>
                    </div>
                    <div class="expandable" id="nav2">
                        <div class="table_details">
                            <div class="table_details_item1">
                                1
                            </div>
                            <div class="table_details_item2">
                                keo
                            </div>
                            <div class="table_details_item3">
                                <img src="https://cdn.tgdd.vn/Products/Images/7199/79592/bhx/keo-mem-sugus-trai-cay-tui-210g-4-700x467.jpg" alt="">
                            </div>
                            <div class="table_details_item4">
                                15
                            </div>
                            <div class="table_details_item5">
                                200k
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="shipping">
                <div class="content_table">

                </div>
            </div>
            <div class="tab-pane fade" id="received">

            </div>
        </div>
    </div>
    <div class="footer">

    </div>
</body>
<script src="./resources/js/pesonal.js"></script>

</html>

<!-- <div class="clearfix"></div> -->
<!-- <h1 class="animate__animated animate__bounce">An animated element</h1> -->