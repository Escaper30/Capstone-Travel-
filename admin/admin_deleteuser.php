<?php
    require('admin_db_conn.php');

    $error = null;

    if(!empty($_GET['id'])){
        $id = $_GET['id'];
    } else {
        $id = null;
        $error = "<p> Error! Id not found!</p>";
    }

    if($error == null){
        
        $deleteuser = new deleteuser();
        
        $result = $deleteuser->deleteuser($id);
        
        if($result){
            header("Location: admin_allusers.php");
            exit;
        } else {
            echo "</br><p>Some error in Deleting the record</p>";
        }
        
    } else{
        echo "Somethinng went wrong. The error is : $error";
    }
?>