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
        <a href="#" class="header-cart"><i class="fas fa-shopping-cart"></i></a>
        <div class="header-logo">
            <p class="logo-title">FA</p>
            <img class="logo" src="./resources/img/logo.jpg" alt="logo">
            <p class="logo-title">TEAM</p>
        </div>
    </div>
    <div class="content">
        <div class="collapse show content-navigate">
            <div class="nav-tabs" id="wrapper" style="border: none;">
                <div class="border-right" id="sidebar-wrapper">
                    <div class="list-group list-group-flush">
                        <a href="#orders" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Orders</a>
                        <a href="#store" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Materials</a>
                        <a href="#product" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Products</a>
                        <a href="#customer" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Customers</a>
                        <a href="#statistic" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Statistics</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content content-main">
            <div class="tab-pane fade show active" id="orders">
                <form action="" method="POST">
                    <center>
                        <button name="con">Confirmation</button>
                        <button name="ship">Shipping</button>
                        <button name="rece">Received</button>
                    </center>
                    <hr>
                </form>
                <?php
                if (isset($_POST['ship'])) {
                    // table chờ ship hàng
                ?>

                    <center>
                        <h3>Shipping</h3>
                    </center>
                    <div class="tab-content content_box">
                        <div class="tab-pane fade show active" id="confirmation">
                            <div class="content_table">
                                <div class="content_main">
                                    <div class="content_main1">ID</div>
                                    <div class="content_main2 table_details_item1">USER NAME</div>
                                </div>

                                <?php
                                require_once 'resources/data/order_data.php';
                                require_once 'resources/data/order_details_data.php';
                                require_once 'resources/data/product_data.php';
                                require_once 'resources/data/picture_data.php';
                                require_once 'resources/data/user.php';

                                $order = new orders();
                                $order_details = new orders_details();
                                $pro = new product();
                                $pic = new picture();

                                $result_user = new User();

                                $result_order = $order->get_status(2);
                                $i = 0;
                                while ($row_order = mysqli_fetch_assoc($result_order)) {
                                    $result_user = new User();
                                    $row_user = mysqli_fetch_assoc($result_user->get_IDUser($row_order['ID_user']));
                                    $i++;
                                    $total = 0;
                                    $result_order_details = $order_details->get($row_order['ID_order']);
                                ?>
                                    <div class="content_item">
                                        <div class="content_item1"><?php echo $i ?></div>
                                        <div class="content_item2">
                                            <a href="#nav2<?php echo $i ?>" class="drop_down_animation"><span class="mr-auto"><?php echo $row_user['name_user'] ?> </span><span class="mr-1">Order details</span><i class="fas fa-caret-down"></i></a>
                                        </div>
                                        <div class="content_item3"><a href="./resources/processing/shipping_order.php?id=<?php echo $row_order['ID_order'] ?>"><button>Shipping</button></a></div>
                                    </div>
                                    <div class="expandable" id="nav2<?php echo $i ?>">
                                        <?php
                                        $j = 0;
                                        while ($row_order_details = mysqli_fetch_assoc($result_order_details)) {
                                            $j++;
                                            $result_pro = $pro->get_pro($row_order_details['ID_pro']);
                                            $row_pro = mysqli_fetch_assoc($result_pro);
                                            $result_pic = $pic->get($row_order_details['ID_pro']);
                                            $row_pic = mysqli_fetch_assoc($result_pic);
                                            $total += $row_pro['price'] * $row_order_details['quantity'];
                                        ?>
                                            <div class="table_details">
                                                <div class="table_details_item1">
                                                    <?php echo $j ?>
                                                </div>
                                                <div class="table_details_item2">
                                                    <?php echo $row_pro['name_pro'] ?>
                                                </div>
                                                <div class="table_details_item3">
                                                    <img src="./resources/img/img_pro/<?php echo $row_pic['pic'] ?>" alt="">
                                                </div>
                                                <div class="table_details_item4">
                                                    <?php echo $row_order_details['quantity'] ?>
                                                </div>
                                                <div class="table_details_item5">
                                                    <?php echo $row_pro['price'] ?>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="table_details">
                                            <div class="title">Total</div>
                                            <div class="total">
                                                <?php echo $total ?> đ
                                            </div>
                                        </div>
                                        <div class="table_details">
                                            <div class="title">Address</div>
                                            <div class="total">
                                                <?php echo $row_user['address'] ?>
                                            </div>
                                        </div>
                                        <div class="table_details">
                                            <div class="title">Date</div>
                                            <div class="total">
                                                <?php echo $row_order['datee'] ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>



                <?php
                } else if (isset($_POST['rece'])) {
                    // table đã nhận hàng
                ?>


                    <center>
                        <h3>Received</h3>
                    </center>
                    <div class="tab-content content_box">
                        <div class="tab-pane fade show active" id="confirmation">
                            <div class="content_table">
                                <div class="content_main">
                                    <div class="content_main1">ID</div>
                                    <div class="content_main2 table_details_item1">USER NAME</div>
                                </div>

                                <?php
                                require_once 'resources/data/order_data.php';
                                require_once 'resources/data/order_details_data.php';
                                require_once 'resources/data/product_data.php';
                                require_once 'resources/data/picture_data.php';
                                require_once 'resources/data/user.php';

                                $order = new orders();
                                $order_details = new orders_details();
                                $pro = new product();
                                $pic = new picture();

                                $result_user = new User();

                                $result_order = $order->get_status(3);
                                $i = 0;
                                while ($row_order = mysqli_fetch_assoc($result_order)) {
                                    $result_user = new User();
                                    $row_user = mysqli_fetch_assoc($result_user->get_IDUser($row_order['ID_user']));
                                    $i++;
                                    $total = 0;
                                    $result_order_details = $order_details->get($row_order['ID_order']);
                                ?>
                                    <div class="content_item">
                                        <div class="content_item1"><?php echo $i ?></div>
                                        <div class="content_item2">
                                            <a href="#nav3<?php echo $i ?>" class="drop_down_animation"><span class="mr-auto"><?php echo $row_user['name_user'] ?> </span><span class="mr-1">Order details</span><i class="fas fa-caret-down"></i></a>
                                        </div>
                                        <div class="content_item3"><a href="./resources/processing/delete_order.php?id=<?php echo $row_order['ID_order'] ?>"><button>Delete</button></a></div>
                                    </div>
                                    <div class="expandable" id="nav3<?php echo $i ?>">
                                        <?php
                                        $j = 0;
                                        while ($row_order_details = mysqli_fetch_assoc($result_order_details)) {
                                            $j++;
                                            $result_pro = $pro->get_pro($row_order_details['ID_pro']);
                                            $row_pro = mysqli_fetch_assoc($result_pro);
                                            $result_pic = $pic->get($row_order_details['ID_pro']);
                                            $row_pic = mysqli_fetch_assoc($result_pic);
                                            $total += $row_pro['price'] * $row_order_details['quantity'];
                                        ?>
                                            <div class="table_details">
                                                <div class="table_details_item1">
                                                    <?php echo $j ?>
                                                </div>
                                                <div class="table_details_item2">
                                                    <?php echo $row_pro['name_pro'] ?>
                                                </div>
                                                <div class="table_details_item3">
                                                    <img src="./resources/img/img_pro/<?php echo $row_pic['pic'] ?>" alt="">
                                                </div>
                                                <div class="table_details_item4">
                                                    <?php echo $row_order_details['quantity'] ?>
                                                </div>
                                                <div class="table_details_item5">
                                                    <?php echo $row_pro['price'] ?>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="table_details">
                                            <div class="title">Total</div>
                                            <div class="total">
                                                <?php echo $total ?> đ
                                            </div>
                                        </div>
                                        <div class="table_details">
                                            <div class="title">Address</div>
                                            <div class="total">
                                                <?php echo $row_user['address'] ?>
                                            </div>
                                        </div>
                                        <div class="table_details">
                                            <div class="title">Date</div>
                                            <div class="total">
                                                <?php echo $row_order['datee'] ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>



                <?php
                } else {
                    // table chờ xác nhận hàng
                ?>


                    <center>
                        <h3>Confirmation</h3>
                    </center>
                    <div class="tab-content content_box">
                        <div class="tab-pane fade show active" id="confirmation">
                            <div class="content_table">
                                <div class="content_main">
                                    <div class="content_main1">ID</div>
                                    <div class="content_main2 table_details_item1">USER NAME</div>
                                </div>

                                <?php
                                require_once 'resources/data/order_data.php';
                                require_once 'resources/data/order_details_data.php';
                                require_once 'resources/data/product_data.php';
                                require_once 'resources/data/picture_data.php';
                                require_once 'resources/data/user.php';

                                $order = new orders();
                                $order_details = new orders_details();
                                $pro = new product();
                                $pic = new picture();

                                $result_user = new User();

                                $result_order = $order->get_status(1);
                                $i = 0;
                                while ($row_order = mysqli_fetch_assoc($result_order)) {
                                    $result_user = new User();
                                    $row_user = mysqli_fetch_assoc($result_user->get_IDUser($row_order['ID_user']));
                                    $i++;
                                    $total = 0;
                                    $result_order_details = $order_details->get($row_order['ID_order']);
                                ?>
                                    <div class="content_item">
                                        <div class="content_item1"><?php echo $i ?></div>
                                        <div class="content_item2">
                                            <a href="#nav1<?php echo $i ?>" class="drop_down_animation"><span class="mr-auto"><?php echo $row_user['name_user'] ?> </span><span class="mr-1">Order details</span><i class="fas fa-caret-down"></i></a>
                                        </div>
                                        <div class="content_item3"><a href="./resources/processing/confirm_order.php?id=<?php echo $row_order['ID_order'] ?>"><button>Confirm</button></a></div>
                                    </div>
                                    <div class="expandable" id="nav1<?php echo $i ?>">
                                        <?php
                                        $j = 0;
                                        while ($row_order_details = mysqli_fetch_assoc($result_order_details)) {
                                            $j++;
                                            $result_pro = $pro->get_pro($row_order_details['ID_pro']);
                                            $row_pro = mysqli_fetch_assoc($result_pro);
                                            $result_pic = $pic->get($row_order_details['ID_pro']);
                                            $row_pic = mysqli_fetch_assoc($result_pic);
                                            $total += $row_pro['price'] * $row_order_details['quantity'];
                                        ?>
                                            <div class="table_details">
                                                <div class="table_details_item1">
                                                    <?php echo $j ?>
                                                </div>
                                                <div class="table_details_item2">
                                                    <?php echo $row_pro['name_pro'] ?>
                                                </div>
                                                <div class="table_details_item3">
                                                    <img src="./resources/img/img_pro/<?php echo $row_pic['pic'] ?>" alt="">
                                                </div>
                                                <div class="table_details_item4">
                                                    <?php echo $row_order_details['quantity'] ?>
                                                </div>
                                                <div class="table_details_item5">
                                                    <?php echo $row_pro['price'] ?>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="table_details">
                                            <div class="title">Total</div>
                                            <div class="total">
                                                <?php echo $total ?> đ
                                            </div>
                                        </div>
                                        <div class="table_details">
                                            <div class="title">Address</div>
                                            <div class="total">
                                                <?php echo $row_user['address'] ?>
                                            </div>
                                        </div>
                                        <div class="table_details">
                                            <div class="title">Date</div>
                                            <div class="total">
                                                <?php echo $row_order['datee'] ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>



                <?php
                }
                ?>
            </div>
            <div class="tab-pane fade" id="store">
                <a href="./resources/processing/add_store.php">
                    <button class="add_btn"><i class="fas fa-plus"></i> add</button>
                </a>
                <div class="content_table">
                    <div class="content_store_main">
                        <div class="store_main1">ID</div>
                        <div class="store_main2">NAME</div>
                        <div class="store_main3">AMOUNT</div>
                        <div class="store_main4">PRICE</div>
                        <div class="store_main5">DAY</div>
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
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="tab-pane fade" id="product">
                <a href="resources/processing/add_pro.php">
                    <button class="add_btn"> add</button>
                </a>
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
                    require_once 'resources/data/product_data.php';
                    $product = new product();
                    $result = $product->get();
                    while ($row = mysqli_fetch_array($result)) {
                        //đi tìm dữ liệu đưa vào mảng.
                    ?>
                        <div class="content_store_item">
                            <div class="store_item1"><?php echo $row['ID_pro']; ?></div>
                            <div class="store_item2"><?php echo $row['name_pro']; ?></div>
                            <div class="store_item3"><?php echo $row['price']; ?></div>
                            <div class="store_item4"><?php echo $row['describes']; ?></div>
                            <div class="store_item4"><?php echo $row['category']; ?></div>
                            <div class="store_item6">
                                <a href="resources/processing/update_pro.php?id=<?php echo $row['ID_pro'] ?>"><button>EDIT</button></a>
                                <a href="resources/processing/delete_pro.php?id=<?php echo $row['ID_pro'] ?>"><button>DELETE</button></a>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>

            </div>
            <div class="tab-pane fade" id="customer">
                <div class="content_table">
                    <div class="content_user_main">
                        <div class="user_main1">ID_USER</div>
                        <div class="user_main2">NAME_USER</div>
                        <div class="user_main3">PHONE_NUM</div>
                        <div class="user_main4">EMAIL</div>
                        <div class="user_main5">ACTION</div>
                    </div>
                    <?php
                    require_once 'resources/data/user.php';
                    $user = new User();
                    $result = $user->get();

                    while ($row = mysqli_fetch_array($result)) { //đi tìm dữ liệu đưa vào mảng.
                    ?>
                        <div class="content_user_item">
                            <div class="user_item1"><?php echo $row['ID_user']; ?></div>
                            <div class="user_item2"><?php echo $row['name_user']; ?></div>
                            <div class="user_item3"><?php echo $row['phone_num']; ?></div>
                            <div class="user_item4"><?php echo $row['email']; ?></div>
                            <div class="user_item5">
                                <?php
                                if ($row['status'] == 0) {
                                ?>
                                    <a href="resources/processing/unlock_cus.php?id=<?php echo $row['ID_user'] ?>"><button class="unlock">UNLOCK</button></a>
                                <?php
                                }
                                if ($row['status'] == 1) {
                                ?>
                                    <a href="resources/processing/block_cus.php?id=<?php echo $row['ID_user'] ?>"><button class="block">BLOCK</button></a>
                                <?php
                                }
                                ?>
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

<!-- SELECT carts.ID_cart AS ID, users.ID_user, products.ID_pro, carts.quantity 
FROM ((carts
INNER JOIN users ON carts.ID_user = users.ID_user)
INNER JOIN products ON products.ID_pro = carts.ID_pro) -->