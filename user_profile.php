
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

// $contact = new contact();

// if(isset($_POST["submit"])){
//   $result = $contact->contact($_POST["fname"],$_POST["lname"], $_POST["email"], $_POST["message"],);
// }

// $travelstories = new travelstories();
//         if(isset($_POST["submit"])){
//          $result = $travelstories->travelstories($_POST["travelimage"],$_POST["traveltitle"], $_POST["traveldisc"], $_POST["travelspec"],$_POST["postby"]);
//         }
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
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php
        include('includes/modalcontent.php');
        
    ?>

    <!-- Header Section Begin -->
    <?php
        include('includes/user_header.php');
    ?>
    <!-- Header Section End -->

    <center>
        <h2>
        Welcome <b><?php echo $user["fname"]; ?>&nbsp;<?php echo $user["lname"]; ?></b>
        </h2>
    </center><br><hr>
    <form action="user_updateprofile.php" method="post">
            <div class="form">
                <center>
                    <h3>
                      Edit Your travel Stories!
                    </h3><br>

                </center>
                <hr>
                
                <input  type="hidden" id="id" name="id" value="<?php echo $user["id"] ?>">

                <label for="fname"><b>fname</b></label>
                <input type="text" name="fname" id="fname" value="<?php echo $user["fname"]; ?>">

                <label for="lname"><b>lname</b></label> 
                <input type="text" name="lname" id="lname" value="<?php echo $user["lname"]; ?> ">

                <label for="country"><b>country</b></label>
                <input type="text" name="country" id="country" value="<?php echo $user["country"];?> ">

                <label for="phone"><b>phone</b></label>
                <input type="text" name="phone" id="phone" value="<?php echo $user["phone"]; ?> "> 

                <label for="email"><b>email</b></label>
                <input type="text" name="email" id="email" value="<?php echo $user["email"]; ?> ">

                <hr>
                <center>
                <button type="submit" class="submit" name="submit" id="submit" value="submit">Update Profile</button>
                </center>


   

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
