<?php
    require('db_conn.php');

    $error = null;

    if(!empty($_GET['id'])){
        $id = $_GET['id'];
    } else {
        $id = null;
        $error = "<p> Error! Id not found!</p>";
    }

    if($error == null){
        
        $deletestories = new deletestories();
        
        $result = $deletestories->deletestories($id);
        
        if($result){
            header("Location: user_viewstories.php");
            exit;
        } else {
            echo "</br><p>Some error in Deleting the record</p>";
        }
        
    } else{
        echo "Somethinng went wrong. The error is : $error";
    }
?>