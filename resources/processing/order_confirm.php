<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="content_table">
        <h2>SHOW LIST ORDERS</h2>
        <a href="">
            <button class="add_btn"><i class="fas fa-plus"></i>OK</button>
        </a>
        <div class="content_orders_main" style="margin-top: 3vh;">

            <div class="orders_main1">ID_ORDER</div>
            <div class="orders_main2">ID_USER</div>
            <div class="orders_main3">STATUS</div>
            <div class="orders_main4">ACTION</div>
        </div>

        <?php
        require '../data/order_data.php';
        $orders = new orders();
        $result = $orders->get();

        while ($row = mysqli_fetch_array($result)) { //đi tìm dữ liệu đưa vào mảng.
        ?>
            <div class="content_store_item">
                <div class="orders_item1"><?php echo $row['ID_order']; ?></div>
                <div class="orders_item2"><?php echo $row['ID_user']; ?></div>
                <div class="orders_item3"><?php echo $row['status']; ?></div>
                <div class="orders_item4" style="display: flex;">
                    <button type="submit" id="#profil1">EDIT</button>
                    <button type="submit" name="delete" class="ml-sm-3">DELETE</button>
                </div>

            </div>
        <?php } ?>
    </div>
</body>

</html>