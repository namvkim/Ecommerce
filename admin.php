<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Page -- Fa -- PNV</title>
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
    <link rel="stylesheet" href="./resources/css/admin.css">
    <link rel="stylesheet" href="./resources/css/menu.css">



</head>

<body>
    <div class="header">
        <!-- <ul class="header-menu hide-menu">
            <a href="#">HOME PAGE</a>
            <a href="#">ABOUT US</a>
        </ul> -->
        <a href="#" class="header-cart"><i class="fas fa-shopping-cart"></i></a>
        <div class="header-logo">
            <p class="logo-title">FA</p>
            <img class="logo" src="./resources/img/logo.jpg" alt="logo">
            <p class="logo-title">TEAM</p>
        </div>
        <!-- <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label> -->

        <!-- <ul class="header-menu">
            <a href="#" class="show-menu">HOME PAGE</a>
            <a href="#" class="show-menu">ABOUT US</a>
            <a href="#">SIGN IN</a>
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
        </ul> -->
    </div>
    <div class="content">
        <div class="collapse show content-navigate">
            <div class="nav-tabs" id="wrapper" style="border: none;">
                <div class="border-right" id="sidebar-wrapper">
                    <div class="list-group list-group-flush">
                        <a href="#orders" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Orders</a>
                        <a href="#store" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Store</a>
                        <a href="#product" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Product</a>
                        <a href="#customer" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Customers</a>
                        <a href="#statistic" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Statistic</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content content-main">
            <div class="tab-pane fade show active" id="orders">

                <div class="content_table">
                    <div class="content_orders_main">
                        <div class="orders_main1">ID_ORDER</div>
                        <div class="orders_main2">ID_USER</div>
                        <div class="orders_main3">DAY</div>
                        <div class="orders_main4">ACTION</div>
                    </div>


                    <?php
                    require 'resources/data/order_data.php';
                    $orders = new orders();
                    $result = $orders->get();

                    while ($row = mysqli_fetch_array($result)) { //đi tìm dữ liệu đưa vào mảng.
                    ?>
                        <div class="content_store_item">
                            <div class="orders_item1"><?php echo $row['ID_order']; ?></div>
                            <div class="orders_item2"><?php echo $row['ID_user']; ?></div>
                            <div class="orders_item3"><?php echo $row['datee']; ?></div>
                            <div class="orders_item4" style="display: flex;">
                                <button type="submit" id="#profil1">EDIT</button>
                                <button type="submit" name="delete" class="ml-sm-3">DELETE</button>
                            </div>

                        </div>
                    <?php } ?>
                </div>

                <div id="profil1" class="modal">
                    <div class="modal-content">
                        <h4 class="center">Mon Profil</h4>
                        </br>
                        <div class="row">
                            <div class="input-field col s6">
                                <label>Nom : <?php echo $_SESSION['nom'] ?></label>
                            </div>

                            <div class="input-field col s6">
                                <label>Prénom : <?php echo $_SESSION['prenom'] ?></label>
                                </br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label>Adresse mail : <?php echo $_SESSION['mail'] ?></label>
                                </br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label>Classe : <?php echo $_SESSION['classe'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="input-field col s6">
                            <a href="editionprofil.php" class="modal-action modal-close btn waves-effect waves-light blue" name="action">Modifier mon profil</a>
                        </div>
                        <div class="input-field col s6">
                            <a href="deconnexion.php" class="modal-action modal-close btn waves-effect waves-light blue" name="action">Me deconnecter</a>
                        </div>
                    </div>
                </div>
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
                <script type="text/javascript" src="materialize/js/app.js"></script>
</body>


</div>


<div class="tab-pane fade" id="store">
    <button class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">
        <i class="fas fa-plus mr-2"></i> </button>
    <div class="content_table">
        <div class="content_store_main">
            <div class="store_main1">ID</div>
            <div class="store_main2">NAME</div>
            <div class="store_main3">AMOUNT</div>
            <div class="store_main4">PRICE</div>
            <div class="store_main5">DAY</div>
            <div class="store_main6">ACTION</div>
        </div>
        <?php
        require 'resources/data/store_data.php';
        $store = new Store();
        $result = $store->get();
        $i = 0;
        $i++;
        while ($row = mysqli_fetch_array($result)) { //đi tìm dữ liệu đưa vào mảng.
        ?>
            <div class="content_store_item">
                <div class="store_item1"><?php echo $row['ID_mate']; ?></div>
                <div class="store_item2"><?php echo $row['name_mate']; ?></div>
                <div class="store_item3"><?php echo $row['amount_mate']; ?></div>
                <div class="store_item4"><?php echo $row['price_mate']; ?></div>
                <div class="store_item5"><?php echo $row['date_input']; ?></div>
                <div class="store_item6" style="display: flex;">
                    <button type="button">EDIT</button>

                    <a href="resources/data/delete_store.php?id=<?php echo $row['ID_mate'] ?>"><button class="ml-sm-3">DELETE</button></a>
                </div>
            </div>
        <?php } ?>



    </div>



</div>
<div class="tab-pane fade" id="product">

    <div class="content_table">
        <div class="content_store_main">
            <div class="store_main1">ID</div>
            <div class="store_main2">NAME</div>
            <div class="store_main3">PRICE</div>
            <div class="store_main4">DESCRIBES</div>
            <div class="store_main5">CATEGORY</div>
            <div class="store_main6">ACTION</div>
        </div>
        <?php
        require 'resources/data/product_data.php';
        $product = new product();
        $result = $product->get();

        while ($row = mysqli_fetch_array($result)) { //đi tìm dữ liệu đưa vào mảng.
        ?>
            <div class="content_store_item">
                <div class="store_item1"><?php echo $row['ID_pro']; ?></div>
                <div class="store_item2"><?php echo $row['name_pro']; ?></div>
                <div class="store_item3"><?php echo $row['price']; ?></div>
                <div class="store_item4"><?php echo $row['describes']; ?></div>
                <div class="store_item4"><?php echo $row['category']; ?></div>
                <div class="store_item6" style="display: flex;">
                    <button type="submit" name="EDIT">EDIT</button>
                    <button type="submit" name="delete" class="ml-sm-3">DELETE</button>
                </div>

            </div>
        <?php } ?>

    </div>
</div>
<div class="tab-pane fade" id="customer">
    <div class="content_table">
        <div class="content_store_main">
            <div class="store_main1">ID_USER</div>
            <div class="store_main2">NAME_USER</div>
            <div class="store_main3">PASSWORD</div>
            <div class="store_main4">PHONE_NUM</div>
            <div class="store_main5">EMAIL</div>
            <div class="store_main6">ACTION</div>
        </div>
        <?php
        require 'resources/data/user.php';
        $user = new User();
        $result = $user->get();

        while ($row = mysqli_fetch_array($result)) { //đi tìm dữ liệu đưa vào mảng.
        ?>
            <div class="content_store_item">
                <div class="store_item1"><?php echo $row['ID_user']; ?></div>
                <div class="store_item2"><?php echo $row['name_user']; ?></div>
                <div class="store_item3"><?php echo $row['pass']; ?></div>
                <div class="store_item4"><?php echo $row['phone_num']; ?></div>
                <div class="store_item4"><?php echo $row['email']; ?></div>
                <div class="store_item6" style="display: flex;">
                    <button type="submit" name="EDIT">EDIT</button>
                    <button type="submit" name="delete" class="ml-sm-3">DELETE</button>
                </div>

            </div>
        <?php } ?>



    </div>
</div>
<div class="tab-pane fade" id="statistic">
    thong ke doanh thu
</div>
</div>
</div>
<div class="footer">

</div>
</body>
<script src="./resources/js/admin.js"></script>

</html>