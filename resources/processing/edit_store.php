<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Store</title>
</head>

<body>
    <?php
   require_once '../data/store_data.php';
    ?>
    <?php

    $store = new Store();
    //Lấy giá trị POST từ form vừa submit
    if (isset($_POST['btn'])) {
        $name_mate = $_POST['name_mate'];
        $amount_mate = $_POST['amount_mate'];
        $price_mate = $_POST['price_mate'];
        $date_input = $_POST['date_input'];


        //Code xử lý, insert dữ liệu vào table


        if (isset($_GET['id'])) {
            echo $_GET['id'];
            echo $_POST['name_mate'];
            echo $_POST['amount_mate'];
            echo $_POST['price_mate'];
            echo $_POST['date_input'];
            $store->put($_GET['id'], $_POST['name_mate'], $_POST['amount_mate'], $_POST['price_mate'], $_POST['date_input']);
            header("location:http://localhost/ecommerce/admin.php");
        }
    }

    if (isset($_POST['exit'])) {
        header('location:http://localhost/ecommerce/admin.php');
    }

    ?>
    <form method="POST" class="form">
        <fieldset style="width :30%">
            <legend>UPDATE STORE's INFORMATION</legend>
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name_mate" value='
                    '></td>
                </tr>
                <tr>
                    <td>AMOUNT</td>
                    <td><input type="number" name="amount_mate" value=""></td>
                </tr>
                <tr>
                    <td>PRICE</td>
                    <td><input type="text" name="price_mate" value=""></td>
                </tr>
                <tr>
                    <td>DAY_INPUT</td>
                    <td><input type="text" name="date_input" value=""></td>
                </tr>


            </table>
            <input type="submit" value="Exit" name="exit">
            <button type="submit" name="btn">OK</button>
        </fieldset>

        <?php  ?>



    </form>
</body>

</html>