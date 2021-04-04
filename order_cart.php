<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order Page -- Fa -- PNV</title>
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
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            padding: 10px;
            width: 100%;
        }
         th {
             background-color: #00CCCC;
            padding: 8px;
        }
        
       
        
        
        </style>
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

    <div class="content">
        <table >
                <tr >
                    <th>PRODUCT</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>SUBTOTAL</th>
                </tr>
                <tr>
                 

                <?php
        
                // require 'resources/data/order_data.php';
                // $od = new orders();
                // $result1 = $od->get();

                

                //  while($row1 = mysqli_fetch_assoc($result1)){
                //      $idorder = $row1["ID_order"]; 
                //     require 'resources/data/picture_data.php';
                //      $picc = new picture(); 
                     
                ?>
               
                    <td>
                        <img class="" src="<?php 
                        $result2 = $picc->get($idorder);
                        while($row2 = mysqli_fetch_assoc($result2)){
                          echo $row2['pic'];}?>" alt="">
                        <p>
                            <?php
                                // require 'resources/data/product_data.php';
                                // $pro = new product(); 
                                // $result3 = $pro->get();
                                // while($row3 = mysqli_fetch_assoc($result3)){
                                //     echo $row3['name_pro'];
                                

                            ?>
                        </p>
                    </td>
                    <td> 
                                     <?php  
                                     //echo $row3['price'];
                                      ?> 
                    </td>
                    <td>soluong</td>
                    <td>tong tien</td>

                </tr>
                <?php
               // }}
                ?>
        </table>
    </div>

    <div class="footer">
    </div>
</body>
<script src="./resources/js/admin.js">
</script>

</html>

<!-- <div class="clearfix"></div> -->
<!-- <h1 class="animate__animated animate__bounce">An animated element</h1> -->