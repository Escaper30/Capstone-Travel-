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
$result = $connection->get_stories();

?> 

<!DOCTYPE html>
<html lang="zxx">

<head>


<?php
        include('includes/modalcss.php');
        
    ?>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs | Voyager</title>

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
        
    ?>

    <!-- Offcanvas Menu Begin -->
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <?php
        include('includes/header.php');
    ?>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
   
     <!-- Breadcrumb Section Begin -->

     <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Travel Stories</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Travel Stories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Breadcrumb Section End -->

    <section class="latest spad">
            <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Travel Stories</span>
                        <h2>Travel with Love</h2>
                    </div>
                </div>
            </div>
                <div class="row justify-content-center">


                        <?php
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
                                $str_to_print = null;
                                $str_to_print .= "<div class='col-lg-4 col-md-6 col-sm-6'>
                                                <div class='blog__item'><div class='blog__item__pic set-bg' data-setbg='img/blog/blog-5.jpg'></div>";
                                $str_to_print .= "<div class='blog__item__text'>";
                                $str_to_print .= "<span><img src='img/icon/calendar.png'> 16 February 2020</span>";
                                $str_to_print .= "<h4> {$row['traveltitle']}</h4>";
                                $str_to_print .= "<img src='img/blog/user.jpg'  width='20' height='20'> <b> {$row['postby']}<br></b>";
                                // $str_to_print .= " <b>{$row['traveldisc']}</b><br>";
                                $str_to_print .= " <a href='blog-details.php?id={$row['id']}''>Read More</a>
                                </div>";
                                // 
                                $str_to_print .= "  </div></div>";

                               
                                echo $str_to_print;
                            }
                        ?>


  
     </section>

    <!-- Blog Section Begin -->
    <!-- <section class="blog spad">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpeg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 21 February 2020</span>
                            <h5></h5>
                            <a href="blog-details.php">Read More</a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 28 February 2020</span>
                            <h5>Father-Son go on Trip to Banff</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-4.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 16 February 2020</span>
                            <h5>Cappadocia Turkey Hot Air Balloon Festival</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-7.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 16 February 2020</span>
                            <h5>Why Bali is a paradise for everyone?</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-5.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 21 February 2020</span>
                            <h5>Volcanic Island - Santorini Greece</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-6.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 28 February 2020</span>
                            <h5>Taj Mahal - Why a Wonder of World?</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div> -->
                
                <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-8.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 21 February 2020</span>
                            <h5>Lasik Eye Surgery Are You Ready</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-9.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 28 February 2020</span>
                            <h5>Lasik Eye Surgery Are You Ready</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div> -->
            <!-- </div>
        </div>
    </section> -->
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
     <?php
        include('includes/footer.php');
    ?>
    <!-- Footer Section End -->

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
</body>

</html>
