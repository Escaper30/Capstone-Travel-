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

$error = null;
 $pr_id = " ";
if(!empty($_GET['pr_id'])){
    $pr_id = $_GET['pr_id'];
} else {
    $pr_id = null;
    // $error = "<p> Error! id not recieved.";
   
}

if($error == null){
    
    $getproducts = new getproducts();
    
    $result = $getproducts->getproducts($pr_id);
    
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $image = $row['image'];
        $pr_title = $row['pr_title'];
        $pr_place = $row['pr_place'];
        $pr_cost = $row['pr_cost'];
        $pr_details = $row['pr_details'];
        
    } // else-> inccorect entry in db
} else {
    echo $error;
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
                        <h4>Update Products</h4>
                        
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
                <form action="update_product.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <!-- <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click
                            here</a> to enter your code</h6> -->
                            <h5 class="checkout__title">Add Products Here</h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Title<span>*</span></p>
                                        <input type="text" name="pr_title" value="<?php echo $pr_title; ?> " required>
                                        <input  type="hidden" id="pr_id" name="pr_id" value="<?php echo $pr_id; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Place<span>*</span></p>
                                        <input type="text" pattern="[A-Za-z]{1,32}" name="pr_place" value="<?php echo $pr_place; ?> " required>
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
                                        <input type="text" name="pr_cost" value="<?php echo $pr_cost; ?> " required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Details<span>*</span></p>
                                        <input type="text" name="pr_details" value="<?php echo $pr_details; ?> " required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                    <div class="blog__details__pic">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?> " width='500' height='600'/>
                    </div>
                </div>
                            </div>
                            <input type="file" name="image" value="" required>
                            <!-- <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Create an account?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                                <p>Create an account by entering the information below. If you are a returning customer
                                please login at the top of the page</p>
                            </div>
                            <div class="checkout__input">
                                <p>Account Password<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Note about your order, e.g, special noe for delivery
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text"
                                placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6"> -->
                            <!-- <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    <li>01. Vanilla salted caramel <span>$ 300.0</span></li>
                                    <li>02. German chocolate <span>$ 170.0</span></li>
                                    <li>03. Sweet autumn <span>$ 170.0</span></li>
                                    <li>04. Cluten free mini dozen <span>$ 110.0</span></li>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span>$750.99</span></li>
                                    <li>Total <span>$750.99</span></li>
                                </ul>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div> -->
                        </div>
                    </div>
                    <button type="submit" name="pr_submit" value="submit" class="primary-btn">Update Products<span class="arrow_right"></span></button> 
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