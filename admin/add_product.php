<?php
require 'admin_db_conn.php';

$AdminSelect = new AdminSelect();

if(!empty($_SESSION["ad_id"])){
  $admin = $AdminSelect->selectUserById($_SESSION["ad_id"]);
  include('../includes/admin_loginheader.php');
 
}

else{
  include('../includes/admin_topheader.php');
}

$add = new AddProducts();
if(isset($_POST["pr_submit"])){
  $result = $add->addproducts($_POST["pr_title"], $_POST["pr_place"],  $_POST["pr_cost"], $_POST["pr_details"], $_POST["image"]);

  if($result == 1){
    echo
    "<script> alert('Added Products Successfully'); </script>";
    header("Location: ./view_product.php");
  }
//   else if($result == 10){
//     echo
//     "<script> alert('Username or Email Is Already Taken'); </script>";
//   }
//   else if($result == 100){
//     echo
//     "<script> alert('Password Doesn't Match'); </script>";
//   }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Voyager</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <!-- <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div> -->
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <?php
        include('../includes/admin_topheader.php');
    ?>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Add Products</h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="add_product.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <!-- <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click
                            here</a> to enter your code</h6> -->
                            <h5 class="checkout__title">Add Products Here</h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Title<span>*</span></p>
                                        <input type="text" name="pr_title" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Place<span>*</span></p>
                                        <input type="text" pattern="[A-Za-z]{1,32}" name="pr_place" required>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text" required>
                            </div> -->
                            <!-- <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add">
                                <input type="text" placeholder="Apartment, suite, unite ect (optinal)">
                            </div> -->
                            <!-- <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text">
                            </div> -->
                            <!-- <div class="checkout__input">
                                <p>Country/State<span>*</span></p>
                                <input type="text">
                            </div> -->
                            <!-- <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text">
                            </div> -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Cost<span>*</span></p>
                                        <input type="number" name="pr_cost" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Details<span>*</span></p>
                                        <input type="text" name="pr_details" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="">
                                        <p>Select Image<span>*</span></p>
                                        <input type="file" name="image" required>
                                      
    <!-- <fieldset>
        <input type="file" name="pr_image"/>
    </fieldset> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button style="margin-top:2%;" type="submit" name="pr_submit" value="submit" class="primary-btn">Add Products<span class="arrow_right"></span></button> 
              </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.nicescroll.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>