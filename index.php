<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ZooHub | Home Page</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/changes.css" type="text/css" media="all"/>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
		<?php include_once('includes/header.php');?>
			<div class="outer-div">
				<div class="inner-div">
					<div class="left">
					<div class="tag">MEET OUR ANIMALS</div>
					<div class="tickets">
						<div class="charge" style="font-family: monospace; font-size: 20px; font-weight: 700; color: rgb(58, 28, 2);">Admittance Charge : </div>
					Normal Adult	: Rs 300	<br/>
					Foreigner Adult	: Rs 1100	<br/>
					Foreigner Child	: Rs 800	<br/>
					Normal Child	: Rs 90		<br/>
					</div>
					<div class="tickets">
					<div class="charge" style="font-family: monospace; font-size: 20px; font-weight: 700; color: rgb(58, 28, 2);">प्रवेश शुल्क : </div>
					
                 सामान्य वयस्क : 300 रुपये <br/>
                 विदेशी वयस्क  : 1100 रुपये <br/>
                 विदेशी बच्चा   : 800 रुपये <br/>
                 सामान्य बच्चा   : 90 रुपये <br/>
				</div>
					</div>
					<div class="tiger">
						<img class="tigerImg" src="images/tigerBg.jpg" alt="tiger">
					</div>
					<div>
						<img class="pandaImg" src="images/pandaBg.jpg" alt="panda">
					</div>
				</div>
			</div>
		<!--header-->
			<!--welcome-->
			<div class="content">
				<div class="welcome">
					<div class="container">
						<h2>welcome to zoo planet</h2>
							<div class="welcome-grids">
								
								<?php 
 $query=mysqli_query($con,"select * from tblanimal order by rand() limit 4");
 while ($row=mysqli_fetch_array($query)) {
 ?>
								<div class="col-md-3 welcome-grid" >
									<img src="admin/images/<?php echo $row['AnimalImage'];?>" width='220' height='200' alt=" " class="img-responsive" />
									<div class="wel-info">
										<h4><a href="animal-detail.php?anid=<?php echo $row['ID'];?>"><?php echo $row['AnimalName'];?>(<?php echo $row['Breed'];?>)</a></h4>
										<p><?php echo substr($row['Description'],0,100);?>.</p>
									</div>
								</div><?php }?>
								<br>
								<div class="clearfix"></div>
							</div>
					</div>
				</div>
			<!--welcome-->
			
				<!--animals-->
					<div class="animals">
						<div class="container">
							<h3>animals</h3>
							<div class="clients">
								<ul id="flexiselDemo3">
									<?php 
 $query=mysqli_query($con,"select * from tblanimal");
 while ($row=mysqli_fetch_array($query)) {
 ?>
									<li><img src="admin/images/<?php echo $row['AnimalImage'];?>" width='220' height='200' alt=" " class="img-responsive" /></li><?php }?>
								</ul>
									<script type="text/javascript">
								$(window).load(function() {
									
								  $("#flexiselDemo3").flexisel({
										visibleItems: 5,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 1
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 2
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									});
								</script>
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--models-->
		
				
						<!--events-->
						<!--specials-->
				 <?php include_once('includes/special.php');?>
			</div>
			<!--footer-->
			<?php include_once('includes/footer.php');?>
</body>
</html>
