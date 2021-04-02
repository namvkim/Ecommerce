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
        <ul class="header-menu hide-menu">
            <a href="#" class="header-cart"><i class="fas fa-shopping-cart"></i></a>
            <div class="header-logo">
                <p class="logo-title">FA</p>
                <img class="logo" src="./resources/img/logo.jpg" alt="logo">
                <p class="logo-title">TEAM</p>
            </div>
        </ul>

        <input type="checkbox" id="chk"> </input>
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label>


        <ul class="header-menu">
            <form class="input-group" action="/action_page.php">
                <input type="text" class="form-control ml-auto" placeholder="Search..." style="max-width: 600px;">
                <div class="input-group-append mr-auto">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </ul>
    </div>
    <div class="content">
        <div class="collapse show content-navigate">
            <div class="nav-tabs" id="wrapper" style="border: none;">
                <div class="border-right" id="sidebar-wrapper">
                    <div class="list-group list-group-flush">
                        <a href="#orders" class="list-group-item list-group-item-action nav-link content-navigate-item1" data-toggle="tab">Orders</a>
                        <a href="#customer" class="list-group-item list-group-item-action nav-link content-navigate-item2" data-toggle="tab">Customers</a>
                        <a href="#store" class="list-group-item list-group-item-action nav-link content-navigate-item3" data-toggle="tab">Store</a>
                        <a href="#product" class="list-group-item list-group-item-action nav-link content-navigate-item2" data-toggle="tab">Product</a>
                        <a href="#statistic" class="list-group-item list-group-item-action nav-link content-navigate-item3" data-toggle="tab">Statistic</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content content-main">
            <div class="tab-pane fade show active" id="oders">
                <?php
                
               
                // while ($row = mysqli_fetch_assoc($result)) {
                //     echo "id: " . $row["datee"] ;        
                // }


                ?>
            </div>
            <div class="tab-pane fade" id="customer">
                <fieldset style="width :30%">
                    <legend>HIỂN THỊ THÔNG TIN ORDERS:</legend>
                    <table border="0">
                        <tr>
                            <th>ID_order</th>
                            <th>ID_user</th>
                            <th>Day</th>
                        
                        </tr>
                        <?php
                        require 'resources/data/orders.php';
                        $orders = new orders();
                       
                $result = $orders->view();
                       
                        //gửi một truy vấn duy nhất (nhiều truy vấn không được hỗ trợ) 
                        //đến cơ sở dữ liệu hiện đang hoạt động trên máy chủ được liên kết với link_identifier được chỉ định.
                        while ($row = mysqli_fetch_array($result)) { //đi tìm dữ liệu đưa vào mảng.
                        ?>
                            <tr>
                                <td><?php echo $row['ID_order']; ?></td>
                                <td><?php echo $row['ID_user']; ?></td>
                                <td><?php echo $row['datee']; ?></td>
                                
                                <td><a href="edit_user.php?id=<?php echo $row['ID_order']; ?>">Details Order</a></td>
                                <td><a href="delete_user.php?id=<?php echo $row['ID_user']; ?>">Delete</a></td>
                            </tr>

                </fieldset>
            <?php
                        }
            ?>
            <!-- <button><a href="themuser.php">Add</a></button> -->
            <form action="" method="post">
                <a href="themuser.php">Add</a>
            </form>
            </table>
            </div>

            <div class="tab-pane fade" id="store">
                <table border="1px">
                    <tr>
                        <th>ID</th>
                        <th>Material Name</th>
                        <th>Amount</th>
                        <th>Price</th>
                        <th>Date Input</th>
                    </tr>
                    <tr></tr>
                </table>
            </div>
            <div class="tab-pane fade" id="products">
                <table border="1px">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Describes</th>
                        <th>Category</th>
                    </tr>
                    <tr></tr>
                </table>
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