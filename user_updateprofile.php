<?php
    require 'db_conn.php';
    $errors = [];

    // if(!empty($_POST['id'])){
    //     $id = $_POST['id'];
    // } else {
    //     $id = null;
    //     $errors[] = "<p> Error!!!! User ID is required!!</p>";
    // }

    // if(!empty($_POST['fname'])){
    //     $fname = $_POST['fname'];  
    // } else {
    //     $fname = null;
    //     $errors[] = "<p> fname is required!!</p>";
    // }

    // if(!empty($_POST['lname'])){
    //     $lname = $_POST['lname'];  
    // } else {
    //     $lname = null;
    //     $errors[] = "<p> lname is required!!</p>";
    // }

    // if(!empty($_POST['country'])){
    //     $country = $_POST['country'];  
    // } else {
    //     $country = null;
    //     $errors[] = "<p> country is required!!</p>";
    // }
    // if(!empty($_POST['phone'])){
    //     $phone = $_POST['phone'];  
    // } else {
    //     $phone = null;
    //     $errors[] = "<p> phone is required!!</p>";
    // }
    // if(!empty($_POST['email'])){
    //     $email = $_POST['email'];  
    // } else {
    //     $email = null;
    //     $errors[] = "<p> email is required!!</p>";
    // }
    if(count($errors) == 0){
        
        $updateprofile = new updateprofile();
        
        $result = $updateprofile->updateprofile($id, $fname, $lname, $country, $phone, $emails);
        
        if($result){
            header("Location: user_profile.php");
            exit;
        } else {
            echo "</br>Some error in Saving the data";
        }
        
    } else {
        foreach($errors as $error){
            echo $error;
        }
    }
?>