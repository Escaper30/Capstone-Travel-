
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


// $error = null;
//  $id = " ";
// if(!empty($_GET['id'])){
//     $id = $_GET['id'];
// } else {
//     $id = null;
//     $error = "<p> Error! id not recieved.";
//     header("Location: user_profile.php");
// }

// if($error == null){
    
//     $getprofile = new getprofile();
    
//     $result = $getprofile->getprofile($id);
    
//     if(mysqli_num_rows($result) == 1){
//         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

//         $fname = $row['fname'];
//         $lname = $row['lname'];
//         $country = $row['country'];
//         $phone = $row['phone'];
//         $email = $row['email'];
        
//     } // else-> inccorect entry in db
// } else {
//     echo $error;
// }



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
    <form action="user_profile.php" method="post">
        

                <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $user["fname"]; ?> <?php echo $user["lname"]; ?></span><span class="text-black-50"><?php echo $user["email"]; ?></span><span> </span></div>
        </div>
        <div class="col-md-6 ">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right"><b>VOYAGER Profile</b></h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><h4><b><?php echo $user["fname"]; ?></b></h4></div>
                    <div class="col-md-6"><label class="labels">Surname</label><h4><b><?php echo $user["lname"]; ?></b></h4></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><h4><b><?php echo $user["phone"]; ?></b></h4></div>
                    
                    <div class="col-md-12"><label class="labels">Email ID</label><h4><b><?php echo $user["email"]; ?></b></h4></div>
                    
                </div>
                
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><h4><b><?php echo $user["country"]; ?></b></h4></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><h4><b><?php echo $user["country"]; ?></b></h4></div>
                </div>
                <!-- <div class="mt-5 text-center"><button class="btn btn-primary profile-button"type="submit" class="submit" name="submit" id="submit" value="submit">Save Profile</button></div> -->
            </div>
        </div>
       
    </div>
</div>
</div>
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
