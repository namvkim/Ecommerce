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
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/CRUD.css">
  <link rel="stylesheet" href="../css/add_pro.css">
</head>

<body>
  <div class="header">
    <a href="#" class="header-cart"><i class="fas fa-shopping-cart"></i></a>
    <div class="header-logo">
      <p class="logo-title">FA</p>
      <img class="logo" src="../img/logo.jpg" alt="logo">
      <p class="logo-title">TEAM</p>
    </div>
  </div>
  <div class="content">
    <div class="collapse show content-navigate">
      <div class="nav-tabs" id="wrapper" style="border: none;">
        <div class="border-right" id="sidebar-wrapper">
          <div class="list-group list-group-flush">
            <a href="#orders" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Orders</a>
            <a href="#store" class="list-group-item list-group-item-action nav-link content-navigate-item2" data-toggle="tab">Materials</a>
            <a href="#product" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Products</a>
            <a href="#customer" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Customers</a>
            <a href="#statistic" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Statistics</a>
          </div>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="table" style="position: relative;">
        <form action="" method="POST">
          <center>
            <h2>Add Materials</h2>
          </center>
          <div class="item"> Name: <input type="text" name="name_mate">
          </div>
          <div class="item"> Quantity: <input type="number" name="amount_mate">
          </div>
          <div class="item"> Price: <input type="number" name="price_mate">
          </div>
          <div class="item"> Day import: <input type="text" name="date_mate">
          </div>
          <div class="item" style="position: absolute; right: 0; bottom: 0;"><button class="btn" name="btn">Add</button></div>
        </form>
        <?php
        if (isset($_POST['btn'])) {
          require_once '../data/store_data.php';
          $store = new Store();
          $store->post($_POST['name_mate'], $_POST['amount_mate'], $_POST['price_mate'], $_POST['date_mate']);
          header("location:http://localhost/ecommerce/admin.php");
        }
        ?>
      </div>
    </div>
  </div>
  <div class="footer">

  </div>
</body>

</html>