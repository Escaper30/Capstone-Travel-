<?php
    require('admin_db_conn.php');

    $error = null;

    if(!empty($_GET['pr_id'])){
        $pr_id = $_GET['pr_id'];
    } else {
        $pr_id = null;
        $error = "<p> Error! Id not found!</p>";
    }

    if($error == null){
        
        $deleteproducts = new deleteproducts();
        
        $result = $deleteproducts->deleteproducts($pr_id);
        
        if($result){
            header("Location: ./view_product.php");
            exit;
        } else {
            echo "</br><p>Some error in Deleting the record</p>";
        }
        
    } else{
        echo "Somethinng went wrong. The error is : $error";
    }
?>