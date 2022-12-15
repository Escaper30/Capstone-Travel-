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

$connection = new Connection();
$result = $connection->get_stories_by_order();
?> 

<!DOCTYPE html>
<html lang="zxx">

<head>

<?php
        include('includes/modalcss.php');
        
    ?>


   
<!-- modal testing ends -->
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voyager</title>

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
    <?php
        include('includes/modalcontent.php');
        include('includes/chatsupportapi.php');
    ?>
    
    <?php
        // include('loggedin_header.php');
    ?>
    
    <?php
        include('includes/header.php');
    ?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img/banner_capstone/1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Travel Recommendation</h6>
                                <h2>Paris</h2>
                                <h3 style="text-shadow: 4px -1px 4px rgba(255, 255, 255, 1);"><b>Adventures are the best way to learn.</b></h5>
                                <!-- <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a> -->
                                <!-- <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/banner_capstone/3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Travel Recommendation</h6>
                                <h2>Turkey</h2>
                                <h3 style="text-shadow: 4px -1px 4px rgba(255, 255, 255, 1);"><b>Adventures are the best way to learn.</b></h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/banner_capstone/4.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Travel Recommendation</h6>
                                <h2>Santorini</h2>
                                <h3 style="text-shadow: 4px -1px 4px rgba(255, 255, 255, 1);"><b>Adventures are the best way to learn.</b></h5>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    

    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="img/products_capstone/0.jpg" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2 style="text-shadow: 4px -1px 4px rgba(255, 255, 255, 1);">Dubai - Dream come true</h2>
                            <a style="text-shadow: 4px -1px 4px rgba(255, 255, 255, 1);" href="shop.php">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="img/products_capstone/2.jpg" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2 style="text-shadow: 4px -1px 4px rgba(255, 255, 255, 1);">Travel to Banff</h2>
                            <a style="text-shadow: 4px -1px 4px rgba(255, 255, 255, 1);" href="shop.php">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="img/products_capstone/banner3.png" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2 style="text-shadow: 4px -1px 4px rgba(255, 255, 255, 1);">Maldive to paradise</h2>
                            <a style="text-shadow: 4px -1px 4px rgba(255, 255, 255, 1);" href="shop.php">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Best Sellers</li>
                        <li data-filter=".new-arrivals">New Travel Destination</li>
                        <li data-filter=".hot-sales">Plans like Never Before</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/dubai1.jpg">
                            <span class="label">New</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Dubai - Dream come true</h6>
                            <a href="shop.php" class="add-cart">+ Add To Cart</a>
                            <h5>$310.00</h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/tajmahal.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Taj Mahal</h6>
                            <a href="shop.php" class="add-cart">+ Add To Cart</a>
                            <h5>$279</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="img/product/maldives.jpg">
                            <span class="label">Sale</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Maldives - the paradise</h6>
                            <a href="shop.php" class="add-cart">+ Add To Cart</a>
                            <h5>$249</h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/rome.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Colloseum - The place of Greeks</h6>
                            <a href="shop.php" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$340</h5>
                            
                        </div>
                    </div>
                </div>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="img/image_capstone/1.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/image_capstone/2.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/image_capstone/3.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/image_capstone/4.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/image_capstone/5.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/image_capstone/6.jpg"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>VOYAGER Tour & Travel</h2><br>
                       
                        <p>“Of all the books in the world. The best stories are found between the pages of a passport.”</p>
                        <h3>#Travel_More</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->
   <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Latest Travel Stories</span>
                        <h2>Travel with New Trends</h2>
                    </div>
                </div>
            </div>
                <div class="row justify-content-center">


                        <?php
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
                                $str_to_print = null;
                                $str_to_print .= "<div class='col-lg-4 col-md-6 col-sm-6'>
                                                <div class='blog__item'>";
                                $str_to_print .= "<div class='col mb-5'><div class='card h-80'> <img class='card-img-top' src='data:image/jpg;charset=utf8;base64,";
                                $encodedValue = base64_encode($row['image']);
                                $str_to_print .=  "$encodedValue '/>";
                                $str_to_print .= "<div class='blog__item__text'>";
                                $str_to_print .= "<span><img src='img/icon/calendar.png'>";
                                $str_to_print .=  date('Y/m/d') ; 
                                $str_to_print .= "</span>";
                                $str_to_print .= "<h4> {$row['traveltitle']}</h4>";
                                $str_to_print .= "<img src='img/blog/user.png'  width='20' height='20'> <b> {$row['postby']}<br></b>";
                                // $str_to_print .= " <b>{$row['traveldisc']}</b><br>";
                                $str_to_print .= " <a href='blog-details.php?id={$row['id']}''>Read More</a>
                                </div></div></div>";
                                // 
                                $str_to_print .= "  </div></div>";

                               
                                echo $str_to_print;
                            }
                        ?>


  
     </section>


   <!-- Latest Blog Section End -->
   
   <?php
        include('includes/footer.php');
    ?>

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

    <?php
        include('includes/modalscripts.php');
        
    ?>
    <!-- modal testing -->
    <!-- <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> -->
    <!-- modal testing ends -->
</body>

</html>
