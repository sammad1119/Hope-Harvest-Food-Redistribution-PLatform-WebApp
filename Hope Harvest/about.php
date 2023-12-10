<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Hope Harvest| About Us</title>
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
	<link rel="icon" href="images/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="index.php"><img src="images/logo.png" width="70px" alt="logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item ">
						<a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="food-available.php">AVAILABLE FOOD LIST</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="about.php">ABOUT US</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">CONTACT</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="donor/login.php">DONOR</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="admin/login.php">ADMIN</a>
					</li>
				</ul>
			</div>
		</div>

	</nav>
	<style>
		.navbar-collapse {
			justify-content: center;
		}

		.navbar-toggler {
			position: absolute !important;
			right: 20px;
			top: 20px;
		}
	</style>
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

		.about-info-left {
			margin: auto;
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
				<h1 class="text-center"><?php echo $row['PageTitle']; ?> </h1>

				<div class="about-info">

					<div class="about-gds row">
						<div class="col-md-6 about-info-left">
							<img src="images/i666.jpg" alt="" />
						</div>
						<div class="col-md-6 about-info-right">
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