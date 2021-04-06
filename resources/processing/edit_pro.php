<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
</head>

<body>
    <?php
    require_once '../data/product_data.php';
    ?>
    <?php

    $pro = new Product();
    //Lấy giá trị POST từ form vừa submit
    if (isset($_POST['btn'])) {
        $name_pro = $_POST['name_pro'];
        $price = $_POST['price'];
        $describes = $_POST['describes'];
        $category = $_POST['category'];


        //Code xử lý, insert dữ liệu vào table


        if (isset($_GET['id'])) {
            echo $_GET['id'];
            echo $_POST['name_pro'];
            echo $_POST['price'];
            echo $_POST['describes'];
            echo $_POST['category'];
            $pro->put($_GET['id'], $_POST['name_pro'], $_POST['price'], $_POST['describes'], $_POST['category']);
            header("location:http://localhost/ecommerce/admin.php");
        }
    }

    if (isset($_POST['exit'])) {
        header('location:http://localhost/ecommerce/admin.php');
    }

    ?>
    <form method="POST" class="form">
        <fieldset style="width :30%">
            <legend>UPDATE PRODUCT's INFORMATION</legend>
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name_pro" value='
                    '></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="number" name="price" value=""></td>
                </tr>
                <tr>
                    <td>Describes</td>
                    <td><input type="text" name="describes" value=""></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td><input type="text" name="category" value=""></td>
                </tr>


            </table>
            <input type="submit" value="Exit" name="exit">
            <button type="submit" name="btn">OK</button>
        </fieldset>

        <?php  ?>



    </form>
</body>

</html>