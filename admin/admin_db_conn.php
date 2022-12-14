<?php
session_start();

class Connection{
  public $host = "localhost";
  public $user = "root";
  public $password = "";
  public $db_name = "voyager";
  public $conn;
  private $dbc;

  
  public function __construct(){
    $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
  }
  
  function get_stories() {
    
    $query = 'SELECT * FROM travelstories';
    $result = @mysqli_query($this->conn,$query);
    return $result;
  }

}

class getstories extends Connection{
  public function getstories($id){
  $query =  mysqli_query($this->conn, "SELECT * FROM travelstories WHERE id = $id ;");
  return $query;
}
}

class travelstories extends Connection{
  public function travelstories($travelimage , $traveltitle, $traveldisc, $travelspec, $postby){
    $duplicate = mysqli_query($this->conn, "SELECT * FROM travelstories WHERE traveltitle = '$traveltitle'");
    if(mysqli_num_rows($duplicate) > 0){
      return 10;
     
    }
    else{
     
        $query = "INSERT INTO travelstories VALUES('', '$travelimage','$traveltitle','$traveldisc', '$travelspec','$postby')";
        mysqli_query($this->conn, $query);
        return 1;
    
    }
  }
}

class deletestories extends Connection{
  public function deletestories($id){
  
  
          $query =  mysqli_query($this->conn, "DELETE FROM travelstories WHERE id = $id ;");
          
          return $query;
   
    }
  }
class updatestories extends Connection{
  public function updatestories($id, $travelimage, $traveltitle, $traveldisc, $travelspec, $postby){
     $sql= "UPDATE travelstories SET travelimage = '$travelimage', traveltitle = '$traveltitle', traveldisc = '$traveldisc', travelspec = '$travelspec', postby = '$postby' WHERE  id = '$id';";
    echo $sql;
     $query = mysqli_query($this->conn, $sql);

  // $query =  mysqli_query($this->conn, "SELECT * FROM products WHERE product_id = $product_id ;");
  return $query;
}
}
class AdminRegister extends Connection{
  public function adminregistration($ad_fname, $ad_lname, $ad_phone, $ad_email, $ad_password, $ad_confirm){
    $ad_duplicate = mysqli_query($this->conn, "SELECT * FROM admin WHERE ad_fname = '$ad_fname' OR ad_email = '$ad_email'");
    if(mysqli_num_rows($ad_duplicate) > 0){
      return 10;
      // Username or email is already taken
    }
    else{
      if($ad_password == $ad_confirm){
        $ad_query = "INSERT INTO admin VALUES('', '$ad_fname', '$ad_lname', '$ad_phone', '$ad_email', '$ad_password', '$ad_confirm')";
        mysqli_query($this->conn, $ad_query);
        return 1;
        // Registration successful
      }
      else{
        return 100;
        // Password does not match
      }
    }
  }
}

class AdminLogin extends Connection{
  public $ad_id;
  public function adminlogin($ad_email, $ad_password){
    $result = mysqli_query($this->conn, "SELECT * FROM admin WHERE ad_email = '$ad_email'");
    $row = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result) > 0){
      if($ad_password == $row["ad_password"]){
        $this->ad_id = $row["ad_id"];
        return 1;
        // Login successful
      }
      else{
        return 10;
        // Wrong password
      }
    }
    else{
      return 100;
      // User not registered
    }
  }

  public function idAdmin(){
    return $this->ad_id;
  }
}

class AdminSelect extends Connection{
  public function selectUserById($ad_id){
    $result = mysqli_query($this->conn, "SELECT * FROM admin WHERE ad_id = $ad_id");
    return mysqli_fetch_assoc($result);
  }
}

class AddProducts extends Connection{
  public function addproducts($pr_title, $pr_place, $pr_cost, $pr_details, $pr_image){
    $pr_duplicate = mysqli_query($this->conn, "SELECT * FROM products WHERE pr_title = '$pr_title'");
    if(mysqli_num_rows($pr_duplicate) > 0){
      return 10;
      // Username or email is already taken
    }
    else{
      
        $pr_query = "INSERT INTO products VALUES('', '$pr_title', '$pr_place', '$pr_cost', '$pr_details', '$pr_image')";
        mysqli_query($this->conn, $pr_query);
        return 1;
     
    }
  }
}


