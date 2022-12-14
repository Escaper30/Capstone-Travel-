
<?php
require 'admin_db_conn.php';

$AdminSelect = new AdminSelect();

if(!empty($_SESSION["ad_id"])){
  $admin = $AdminSelect->selectUserById($_SESSION["ad_id"]);
  include('../includes/admin_loginheader.php');
 
}
// else if(empty($_SESSION["id"])){
//     header("Location: index.php");
// }
else{
//   header("Location: register_user.php");
  include('../includes/admin_topheader.php');
}

// $contact = new contact();

// if(isset($_POST["submit"])){
//   $result = $contact->contact($_POST["fname"],$_POST["lname"], $_POST["email"], $_POST["message"],);
// }

$travelstories = new travelstories();
        if(isset($_POST["submit"])){
         $result = $travelstories->travelstories($_POST["travelimage"],$_POST["traveltitle"], $_POST["traveldisc"], $_POST["travelspec"],$_POST["postby"]);
        }
?> 

<?php
//   header("Location: register_user.php");
  include('../includes/admin_topheader.php');
?>


<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us | Voyager</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
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
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

   

    <!-- Header Section Begin -->
    
    <!-- Header Section End -->


    
        <form action="admin_addstories.php" method="post">
            <!-- <div class="form">
                <center>
                    <h3>
                      Describe your travel stories with the Others
                    </h3><br>

                </center>
                <hr>
                <label for="travelimage"><b>Travel Image</b></label>
                <input type="text" name="travelimage" id="travelimage" placeholder="Travel Image">

                <label for="traveltitle"><b>Travel Title</b></label>
                <input type="text" name="traveltitle" id="traveltitle" placeholder="Travel Title">

                <label for="traveldisc"><b>Travel Discription</b></label>
                <input type="text" name="traveldisc" id="traveldisc" placeholder="Travel Discription">

                <label for="travelspec"><b>Travel speciality</b></label>
                <input type="text" name="travelspec" id="travelspec" placeholder="Travel speciality"> 

                <label for="postby"><b>Post By</b></label>
                <input type="text" name="postby" id="postby" value="<?php echo $user["fname"]; ?>"  placeholder="Post By" >

                <hr>
                <center>
                <button type="submit" class="submit" name="submit" id="submit" value="submit">Add Product</button>
                </center>
                
            </div> -->


            
        <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h4>Enter Travel Title</h4>
                        <h2><input type="text" name="traveltitle" id="traveltitle" value=" "></h2>
                        <ul>
                            <li><h4><b><?php echo $admin["ad_fname"]; ?></b></h4></li>
                            <li>February 21, 2019</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__pic">
                        <img src="img/blog/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                    <input  type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                    <input  type="hidden" id="postby" name="postby" value="<?php echo $admin["ad_fname"];  ?>">
                    <input type="hidden" name="travelimage" id="travelimage" value="">
                        <div class="blog__details__text">
                            <p><b>Enter Travel Discription</b></p>
                    <p>
                    <textarea name="traveldisc" id="traveldisc"  rows="10" cols="75" placeholder="Enter your travel setory"></textarea>
                    </p>        
                    </div>
                        <div class="blog__details__quote">
                            <i class="fa fa-quote-left"></i>
                            <p><b>Enter Special Incident in your Travel</b></p>
                            <p><textarea name="travelspec" id="travelspec"  rows="10" cols="65"  placeholder="Something Special"></textarea></p>
                            
                            <h6>~<?php echo $admin["ad_fname"]; ?> </h6>
                        </div>
                        
                        <div class="blog__details__option">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__author">
                                        <div class="blog__details__author__pic">
                                            <img src="img/blog/user.jpg" alt="">
                                        </div>
                                        <div class="blog__details__author__text">
                                            <h5>Post BY : <i><?php echo $admin["ad_fname"]; ?></i></h5>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                       
                                    <div class="col-lg-12 text-center">
                                        
                                        <button type="submit" class="site-btn"  name="submit" id="submit" value="submit">Add Travel Story</button>
                                    </div>
                                
                </div>
            </div>
        </div>
    </section>
        </form>


        
    






   

    <!-- Footer Section Begin -->
   

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
    
</body>

</html>
