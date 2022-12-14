<?php
    require 'admin_db_conn.php';
    $errors = [];

    if(!empty($_POST['pr_id'])){
        $pr_id = $_POST['pr_id'];
    } else {
        $pr_id = null;
        $errors[] = "<p> Error!!!! User ID is required!!</p>";
    }

    // if(!empty($_POST['image'])){
    //     $image = $_POST['image'];  
    // } else {
    //     $image = null;
    //     $errors[] = "<p> image is required!!</p>";
    // }

    if(!empty($_POST['pr_title'])){
        $pr_title = $_POST['pr_title'];  
    } else {
        $pr_title = null;
        $errors[] = "<p> product title is required!!</p>";
    }

    if(!empty($_POST['pr_place'])){
        $pr_place = $_POST['pr_place'];  
    } else {
        $pr_place = null;
        $errors[] = "<p> product place is required!!</p>";
    }
    if(!empty($_POST['pr_cost'])){
        $pr_cost = $_POST['pr_cost'];  
    } else {
        $pr_cost = null;
        $errors[] = "<p> product cost is required!!</p>";
    }
    if(!empty($_POST['pr_details'])){
        $pr_details = $_POST['pr_details'];  
    } else {
        $pr_details = null;
        $errors[] = "<p> product details is required!!</p>";
    }
    if(count($errors) == 0){
        
        $updateproducts = new updateproducts();
        
        $result = $updateproducts->updateproducts($pr_id, $image, $pr_title, $pr_place, $pr_cost, $pr_details);
        
        if($result){
            header("Location: view_product.php");
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