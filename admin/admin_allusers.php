
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

$connection = new Connection();
$result = $connection->get_alluser();

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
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    
    <?php
        include('../includes/admin_topheader.php');
    ?>
    <!-- Header Section Begin -->
   
    <!-- Header Section End -->
    <center>
        <h2>View your all Users</h2><br>
    </center>

    <table class="table" style="width:80%;margin-left:10%" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">User Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Country</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

    
                        <?php
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
                                $str_to_print = null;
                                $str_to_print .= "<tbody><tr><th>{$row['id']}</th>";
                                
                                $str_to_print .= "<td>{$row['fname']}</td>";
                                $str_to_print .= "<td>{$row['lname']}</td>";
                                
                                $str_to_print .= " <td>{$row['country']}</td>";
                                $str_to_print .= " <td>{$row['phone']}</td>";
                                $str_to_print .= " <td>{$row['email']}</td>";
                                $str_to_print .= " <td><a class='btn btn-outline-danger  mt-auto' href='admin_deleteuser.php?id={$row['id']}'>Delete</a></td></tbody>";

                               

                                echo $str_to_print;
                            }
                        ?>

                          

</table>

               
        

    
   






       
    






   

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
