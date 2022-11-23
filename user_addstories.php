
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


    
   
<?php
  
    $errors = [];
    
    if(!empty($_POST['travelimage'])){
        $travelimage = $_POST['travelimage'];  
    } else {
        $travelimage = null;
        $errors[] = "<p> travel image is required!!</p>";
    }

    if(!empty($_POST['traveltitle'])){
        $traveltitle = $_POST['traveltitle'];  
    } else {
        $traveltitle = null;
        $errors[] = "<p> traveltitle is required!!</p>";
    }

    if(!empty($_POST['traveldisc'])){
        $traveldisc = $_POST['traveldisc'];  
    } else {
        $traveldisc = null;
        $errors[] = "<p> traveldisc is required!!</p>";
    }
    if(!empty($_POST['travelspec'])){
        $travelspec = $_POST['travelspec'];  
    } else {
        $travelspec = null;
        $errors[] = "<p> travelspec is required!!</p>";
    }
    if(!empty($_POST['postby'])){
        $postby = $_POST['postby'];  
    } else {
        $postby = null;
        $errors[] = "<p> postby is required!!</p>";
    }
    // if(!empty($_POST['quantity'])){
    //     $quantity = $_POST['quantity'];
    //     if(!is_numeric($quantity)){
    //         $errors[] = "<p>Error!! <b> Quantity should be number only and not more then 4 digit, No Speacial character accepted!!</b></p>";
    //     }  
    // } else {
    //     $quantity = null;
    //     $errors[] = "<p> quantity is required!!</p>";
    // }
    // if(!empty($_POST['price'])){
    //     $price = $_POST['price'];  
    //     if(!is_numeric($price)){
    //         $errors[] = "<p>Error!! <b> price should be number only and not more then 4 digit, No Speacial character accepted!!</b></p>";
    //     }  
    // } else {
    //     $price = null;
    //     $errors[] = "<p> price is required!!</p>";
    // }
    // if(!empty($_POST['addby'])){
    //     $addby = $_POST['addby']; 
    //     if(!is_text_only($addby)){
    //         $errors[] = "<p>Error!! <b> It should be text only, No Speacial character accepted!!</b></p>";
    //     } 
    // } else {
    //     $addby = null;
    //     $errors[] = "<p> Product Added By is required!!</p>";
    // }
    function is_text_only($input_value) {
        if(!preg_match("/[^a-zA-Z- ]/",$input_value)) {
            return true;
        } else { 
            return false;
        }
    }
    if(count($errors) == 0){
        // $travelimage = prepare_string($this->$conn, $travelimage);
        // $traveltitle = prepare_string($this->$conn, $traveltitle);
        // $traveldisc = prepare_string($this->$conn, $traveldisc);
        // $travelspec = prepare_string($this->$conn, $travelspec);
        // $postby = prepare_string($this->$conn, $postby);
        
        // $query = "INSERT INTO travelstories(travelimage , traveltitle, traveldisc, travelspec, postby) VALUES (?,?,?,?,?)";
        // $stmt = mysqli_prepare($this->$conn, $query);
        // mysqli_stmt_bind_param(
        //     $stmt,
        //     'sssss',
        //     $travelimage,
        //     $traveltitle,
        //     $traveldisc,
        //     $travelspec,
        //     $postby
           
        // );
        
            $travelstories = new travelstories();
            if(isset($_POST["submit"])){
            $result = $travelstories->travelstories($_POST["travelimage"],$_POST["traveltitle"], $_POST["traveldisc"], $_POST["travelspec"],$_POST["postby"]);
            }
        if($result){
            ?>
            <meta http-equiv="refresh" content="=0;URL=user_portal.php" />
          <?php
            exit;
        } else {
            echo "</br>Some error in Saving the data";
        }}
    else {
        foreach($errors as $error){
            echo $error;
        }
        echo '<button onclick="location.href=\'user_portal.php\';" type="button" class="submit">Go Back</button>';
    }
?>


   

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
