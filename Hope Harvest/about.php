<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Hope Harvest| About Us</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<!--webfont-->
	<!--js-->
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!---- start-smoth-scrolling---->
</head>

<body>
	<div class="header">
		<div class="container">
			<div class="header-right">
			</div>
			<div class="header-left">
				<a href="index.php"><img src="images/logo.png" alt="logo" width="100px"></a>

				<span class="menu"><img src="images/menu.png" alt="hamburger menu" /></span>
				<ul class="nav1">
					<li><a href="index.php">HOME</a></li>
					<li><a class="active" href="about.php">ABOUT</a></li>
					<li><a href="food-available.php"> AVAILABLE FOOD LIST</a></li>

					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="donor/login.php">DONOR</a></li>
					<li><a href="admin/login.php">ADMIN</a></li>

				</ul>
				<!-- script for menu -->
				<script>
					$("span.menu").click(function() {
						$("ul.nav1").slideToggle(300, function() {
							// Animation complete.
						});
					});
				</script>
				<!-- //script for menu -->
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
	<style>
		.header-left {
			display: flex;
			justify-content: space-around;
		}

		.header {
			padding: 10px 0px;
			background: #000000;
		}

		ul li a.active {
			color: #57aa56 !important;
		}

		.nav1 {
			align-items: center;
			display: flex;
		}

		.header-left ul li a {
			font-family: 'Roboto', sans-serif;
		}
	</style>
	<!-- banner -->

	<!-- //banner -->
	<div class="about">
		<div class="container">
			<?php

			$ret = mysqli_query($con, "select * from tblpages where PageType='aboutus' ");
			$cnt = 1;
			while ($row = mysqli_fetch_array($ret)) {

			?>

				<div class="about-info">

					<div class="about-gds">
						<div class="col-md-5 about-info-left">
							<img src="images/i666.jpg" alt="" />
						</div>
						<div class="col-md-7 about-info-right">
							<h4><?php echo $row['PageTitle']; ?> </h4>
							<p><?php echo $row['PageDescription']; ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div><?php } ?>


		</div>
	</div>
	<!-- //about-page -->
	<?php include_once("includes/footer.php"); ?>
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->

</body>

</html>