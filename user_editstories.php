
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

$error = null;
 $id = " ";
if(!empty($_GET['id'])){
    $id = $_GET['id'];
} else {
    $id = null;
    $error = "<p> Error! product Id not recieved.";
    header("Location: user_viewstories.php");
}

if($error == null){
    
    $getstories = new getstories();
    
    $result = $getstories->getstories($id);
    
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $travelimage = $row['travelimage'];
        $traveltitle = $row['traveltitle'];
        $traveldisc = $row['traveldisc'];
        $travelspec = $row['travelspec'];
        $postby = $row['postby'];
        

        
    } // else-> inccorect entry in db
} else {
    echo $error;
}
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


    
        <form action="user_updatestory.php" method="post">
            <div class="form">
                <center>
                    <h3>
                      Edit Your travel Stories!
                    </h3><br>

                </center>
                <hr>
                
                <input  type="hidden" id="id" name="id" value="<?php echo $id; ?>">

                <label for="travelimage"><b>Travel Image</b></label>
                <input type="text" name="travelimage" id="travelimage" value="<?php echo $travelimage; ?>">

                <label for="traveltitle"><b>Travel Title</b></label>
                <input type="text" name="traveltitle" id="traveltitle" value="<?php echo $traveltitle; ?> ">

                <label for="traveldisc"><b>Travel Discription</b></label>
                <input type="text" name="traveldisc" id="traveldisc" value="<?php echo $traveldisc; ?> ">

                <label for="travelspec"><b>Travel speciality</b></label>
                <input type="text" name="travelspec" id="travelspec" value="<?php echo $travelspec; ?> "> 

                <label for="postby"><b>Post By</b></label>
                <input type="text" name="postby" id="postby" value="<?php echo $postby; ?> ">

                <hr>
                <center>
                <button type="submit" class="submit" name="submit" id="submit" value="submit">Update Story</button>
                </center>
                
            </div>
        </form>
    






   

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
