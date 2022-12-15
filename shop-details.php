<?php
require 'db_conn.php';

$select = new Select();

if(!empty($_SESSION["id"])){
  $user = $select->selectUserById($_SESSION["id"]);
  include('includes/loggedin_header.php');
 
}
// else if(empty($_SESSION["id"])){
//     header("Location: index.php");
// }
else{
//   header("Location: register_user.php");
  include('includes/top_header.php');
}

$error = null;
 $id = " ";
if(!empty($_GET['id'])){
    $id = $_GET['id'];
} else {
    $id = null;
    $error = "<p> Error! id not recieved.";
    header("Location: shop.php");
}

if($error == null){
    
    $shopdetails = new shopdetails();
    
    $result = $shopdetails->shopdetails($id);
    
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $pr_title = $row['pr_title'];
        $pr_place = $row['pr_place'];
        $pr_cost = $row['pr_cost'];
        $pr_details = $row['pr_details'];
        $image = $row['image'];
        
    } // else-> inccorect entry in db
} else {
    echo $error;
}

?> 

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voyager | Product Details</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
 
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
   

    <?php
include('includes/shopheader.php')
?>

    <!-- Header Section End -->
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="index.php">Home</a>
                            <a href="shop.php">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                
                    
                        
                
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?> " width="300px" height="300px"> </img>
                    <div class="col-lg-8">
                        
                        <div class="product__details__text">
                        <h2><?php echo $pr_title; ?></h2>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 5 Reviews</span>
                            </div>
                        
                            <h3>Cost: $ <?php echo $pr_cost; ?></h3>
                            <h3>Place: <?php echo $pr_place; ?></h3>
                           <br>
                            
                            <button class="primary-btn" ><a class="add-cart" style="color:white" href="add_cart.php?id=<?php echo $row['pr_id']; ?>" >Add to cart</a>
                                  
                                  </button>	 
                           
                        </div>
                        
                    </div>
                   
                </div>
        
   
                
       
          

  
    <!-- Related Section End -->

    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <!-- <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                    role="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Customer
                                    Previews(5)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Additional
                                    information</a>
                                </li>
                            </ul> -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Details: <?php echo $pr_details; ?></p>
                                      
                                       
                                    </div>
                                </div>
                                
                            </div>
</div>
</div>


</div>

    <!-- Footer Section Begin -->
    <?php
        include('includes/footer.php');
    ?>
    <!-- Footer Section End -->


    <!-- Search Begin -->
  
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>