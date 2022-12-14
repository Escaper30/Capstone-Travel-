<?php
	session_start();
	//initialize cart if not set or is unset
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}

	//unset qunatity
	unset($_SESSION['qty_array']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Shop | Voyager</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style>
		.product_image{
			height:200px;
		}
		.product_name{
			height:80px; 
			padding-left:20px; 
			padding-right:20px;
		}
		
	</style>
</head>
<body>
<?php
include('includes/shopheader.php')
?>

<div class="container">

	<?php
	
		//info message
		if(isset($_SESSION['message'])){
			?>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<div class="alert alert-info text-center">
						<?php echo $_SESSION['message']; ?>
					</div>
				</div>
			</div>
			<?php
			unset($_SESSION['message']);
		}
		//end info message
		//fetch our products	
		//connection
		$conn = new mysqli('localhost', 'root', '', 'voyager');

		$sql = "SELECT * FROM products";
		$query = $conn->query($sql);
		$inc = 4;
		while($row = $query->fetch_assoc()){
			$inc = ($inc == 4) ? 1 : $inc + 1; 
			if($inc == 1) echo "<div class='row text-center'>";  
			?>
			
			
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg">
								<img src="<?php echo $row['pr_image'] ?>" width="auto" height="auto">
                                   
                                </div>
								<h5 style = "margin-top: 3%"><b><?php echo $row['pr_title']; ?></b></h5>
                                <div class="product__item__text">
								<h5><b>$<?php echo $row['pr_cost']; ?></b></h5>
                                   <a  href="shop-details.php?id=<?php echo $row['pr_id']; ?>">View Details</a>
								   <br><br> </div>
								   
								   <a class='primary-btn'href="add_cart.php?id=<?php echo $row['pr_id']; ?>">Add to Cart</a>
								 
                                
                            </div>
                        </div>
			
			<?php
		}
		if($inc == 1) echo "<div></div><div></div><div></div></div>"; 
		if($inc == 2) echo "<div></div><div></div></div>"; 
		if($inc == 3) echo "<div></div></div>";
		
		//end product row 
	
	?>
</div>
	</div>

	
	<?php
include('includes/shopfooter.php')
?>


                       

</body>

</html>
