<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Zoo Management System | Home Page</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
		<?php include_once('includes/header.php');?>
			
		<div class="banner-headert">
			<div class="container">
				
		</div>
			</div>
	<!--about-->
	<div class="content">
							
			<!--advantage-->
			<div class="advantages">
					<div class="container">
						<?php 
 $query=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
						
						<div class="advantages-grids">
							<div class="col-md-12 advantage-grid">
								<div class="company_ad">
							<h3>Contact Info</h3>
							 <p>Contacting Zoohub is easy! Whether you're a zoo looking to join our platform, a visitor with questions or feedback, or a conservation organization interested in collaboration, we're here to help. Reach out to us through any of the following channels:</p>
			      			<address>
	 							 <p>Email : <?php  echo $row['Email'];?></p>
								 <p>Phone : <?php  echo $row['MobileNumber'];?></p>
								 <p><?php  echo $row['PageDescription'];?></p>
								
							</address>
						</div>
							</div>	
							
								<div class="clearfix"></div>	
							</div>
						</div><?php } ?>
					</div>
				<!--advantage-->
			<!--specials-->
			 <?php include_once('includes/special.php');?>
			</div>
			<!--footer-->
			<?php include_once('includes/footer.php');?>
</body>
</html>