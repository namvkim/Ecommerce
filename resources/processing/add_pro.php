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
            <a href="#store" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Store</a>
            <a href="#product" class="list-group-item list-group-item-action nav-link content-navigate-item2" data-toggle="tab">Product</a>
            <a href="#customer" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Customers</a>
            <a href="#statistic" class="list-group-item list-group-item-action nav-link content-navigate-item" data-toggle="tab">Statistic</a>
          </div>
        </div>
      </div>
    </div>
    <div class="table">
      <form action="" method="POST">
        <center><h2>ADD PRODUCT</h2></center>
        <div class="item"> Name product: <input type="text" name="name">
        </div>
        <div class="item"> Price: <input type="number" name="price">
        </div>
        <div class="item"> Category: <input type="text" name="cate">
        </div>
        <div class="item"> Describes: <textarea name="des" id="" cols="30" rows="4"></textarea>
        </div>
        <div class="item"><a href=""><button class="btn">add</button></a></div>
      </form>
      <?php 
        require_once '../data/product_data.php';
        $pro = new Product();      
        
      ?>
    </div>
  </div>
  <div class="footer">

  </div>
</body>

</html>