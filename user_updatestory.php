<?php
    require 'db_conn.php';
    $errors = [];

    if(!empty($_POST['id'])){
        $id = $_POST['id'];
    } else {
        $id = null;
        $errors[] = "<p> Error!!!! User ID is required!!</p>";
    }

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
    if(count($errors) == 0){
        
        $updatestories = new updatestories();
        
        $result = $updatestories->updatestories($id, $travelimage, $traveltitle, $traveldisc, $travelspec, $postby);
        
        if($result){
            header("Location: user_viewstories.php");
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