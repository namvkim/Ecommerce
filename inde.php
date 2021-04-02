<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page with love -- Fa -- PNV</title>
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

        <img class="content-poster" src="https://nhandaovadoisong.com.vn/wp-content/uploads/2019/05/anh-thien-nhien-dep-1200x675.jpg" alt="">
        <br><br>
        <div class="main">
        <form action ="" method ="GET"class="form">
            <div id="myBtnContainer">   
                <input type ="submit" class="btn active" name ="food" value ="Food"></input>
                <input type ="submit" class="btn " name ="drink" value ="Drink"></input>
                <input type ="submit" class="btn " name ="top" value ="Top"></input>
                <input type ="submit" class="btn " name ="near" value ="Near"></input>
    
            </div>
            </form>
            <hr>
            <!-- Portfolio Gallery Grid -->
            <?php

            require_once 'resources\data\product_data.php';
            $pro = new product();
            $result=$pro->delete(1);
            // while ($row= mysqli_fetch_assoc($result)){
            //     echo $row['name_pro'];
            //     echo $row['describes'];
            // }

            require_once 'resources\data\product_data.php';
            
                $pro= new product();
                $result = $pro->viewAll() ;
           
                $check = mysqli_num_rows($result);
                if($check > 0){
                    

                while($row = mysqli_fetch_assoc($result)){
                 //   if(isset($_POST['food'])){    
                  if($row['category']== 2){
                    ?>
                    <div class="row">
                    <?php
                        echo $row['name_pro'];
                        echo $row['describes'];
                    ?>
                    <div class="column nature">
                        
                    <div class="content">
                        
                    <img src="" alt="Mountains" style="width:100%">
                    <h4><?php echo $row['name_pro']?></h4>
                    <p><?php echo $row['describes']?></p>
                    </div>
                </div>
                <?php
                //    }
            }
                 if(isset($_POST['drink'])){    
                    //echo "star";
                    if($row['category']== 1){
                        $category = $row['category'];
                        
                      ?>
                      <div class="row">
                      <?php
                          echo $row['name_pro'];
                          echo $row['describes']
                      ?>
                      <div class="column nature">
                          
                      <div class="content">
                          
                      <img src="" alt="Mountains" style="width:100%">
                      <h4><?php echo $row['name_pro']?></h4>
                      <p><?php echo $row['describes']?></p>
                      </div>
                  </div>
                  <?php
                    }
                        
                }else if(isset($_POST['top'])){    
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="row">
                    <div class="column nature">
                    <div class="content">
                    <img src="" alt="Mountains" style="width:100%">
                    <h4><?php echo $row['name_pro']?></h4>
                    <p><?php echo $row['describes']?></p>
                    </div>
                </div>
                <?php
                    }
                }else if(isset($_POST['near'])){    

        }
    
    }
    }else{
        echo "không kết nối";
    }
    function food ($category){}
            ?>

            <!-- END MAIN -->
        </div>

       
    </div>
    </div>

    <div class="footer">
    </div>
</body>
<script src="./resources/js/admin.js">
</script>

</html>

<!-- <div class="clearfix"></div> -->
<!-- <h1 class="animate__animated animate__bounce">An animated element</h1> -->