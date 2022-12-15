
<?php
require 'db_conn.php';

$select = new Select();

if(!empty($_SESSION["id"])){
  $user = $select->selectUserById($_SESSION["id"]);
  $connection = new Connection();
    $result = $connection->get_users($_SESSION["fname"]);
  include('includes/loggedin_header.php');
 
}
// else if(empty($_SESSION["id"])){
//     header("Location: index.php");
// }
else{
//   header("Location: register_user.php");
  include('includes/top_header.php');
}

// $contact = new contact();

// if(isset($_POST["submit"])){
//   $result = $contact->contact($_POST["fname"],$_POST["lname"], $_POST["email"], $_POST["message"],);
// }

// $travelstories = new travelstories();
//         if(isset($_POST["submit"])){
//          $result = $travelstories->travelstories($_POST["travelimage"],$_POST["traveltitle"], $_POST["traveldisc"], $_POST["travelspec"],$_POST["postby"]);
//         }
// $connection = new Connection();
// $result = $connection->get_users();

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
    <title>Contact Us | Voyager</title>

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
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <?php
        include('includes/modalcontent.php');
        
    ?>

    <!-- Header Section Begin -->
    <?php
        include('includes/user_header.php');
    ?>
    <!-- Header Section End -->
    <center>
        <h2>View your all the Travel stories</h2>
    </center>

    <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <!-- <div class="col mb-5">
                        <div class="card h-100"> -->

                        <?php
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
                                $str_to_print = null;
                                $str_to_print .= "<div class='col mb-5'><div class='card h-100'>";
                                $str_to_print .= "<img class='card-img-top' src='data:image/jpg;charset=utf8;base64,";
                                $encodedValue = base64_encode($row['image']);
                                $str_to_print .=  "$encodedValue '/>";
                                $str_to_print .= "<div class='card-body p-4'> <div class='text-center'>";
                                $str_to_print .= "<h5 class='fw-bolder'> {$row['traveltitle']}</h5>";
                                
                                $str_to_print .= " <b>{$row['traveldisc']}</b><br>";
                                $str_to_print .= " {$row['travelspec']} <br>";
                                $str_to_print .= " <b>postby</b> : {$row['postby']}<br>";
                                $str_to_print .= " <b>id</b> : {$row['id']}</div> </div>";

                                $str_to_print .= "<div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                <div class='text-center'><a class='btn btn-outline-success mt-auto' href='user_editstories.php?id={$row['id']}'>Edit Story</a><br><br><a class='btn btn-outline-danger  mt-auto' href='user_deletestories.php?id={$row['id']}'>Delete</a></div></div></div></div>";

                                echo $str_to_print;
                            }
                        ?>

                        



          
                    
                </div>
            </div>
        
    
    
       
    






   

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
