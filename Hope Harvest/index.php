<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Hope Harvest|||Home Page</title>
	<link rel="icon" href="images/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- jQuery (Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

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

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="index.php"><img src="images/logo.png" width="80px" alt="logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="food-available.php">AVAILABLE FOOD LIST</a>
					</li>
					<li class="nav-item ">
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
		.container-main {
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100%;
		}

		.headerLogo {
			width: 30%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.btnToggle {
			width: 100%;
		}

		.navbar-collapse {
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100%;
		}

		.navbar-toggler {
			position: absolute !important;
			right: 40px;
			top: 40px;
		}

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

		@media only screen and (max-width: 900px) {

			.nav1 {
				display: none;
			}

			.nav1.show {
				display: block;
			}

			.container-main {
				width: 30%;
				display: flex;
				justify-content: left;
				align-items: center;
				flex-direction: column;
			}

			.headerLogo {
				width: 100%;
				display: flex;
				justify-content: flex-start;
				align-items: flex-start;
			}

			.navbar-collapse {
				display: flex;
				justify-content: flex-start;
				align-items: flex-start;
				width: 100%;
			}


		}
	</style>

	<script>
		function toggleMenu() {
			var x = document.getElementById("nav1");
			if (x.className === "nav1") {
				x.className += " show";
			} else {
				x.className = "nav1";
			}
		}
	</script>

	<!-- banner -->
	<div class="banner">
		<div class="container">
			<!-- responsiveslides -->
			<script src="js/responsiveslides.min.js"></script>
			<script>
				// You can also use "$(window).load(function() {"
				$(function() {
					// Slideshow 4
					$("#slider3").responsiveSlides({
						auto: true,
						pager: false,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function() {
							$('.events').append("<li>before event fired.</li>");
						},
						after: function() {
							$('.events').append("<li>after event fired.</li>");
						}
					});
				});
			</script>
			<!-- responsiveslides -->
			<div id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<h3>WE NEED YOUR SUPPORT</h3>
							<p>Every act of kindness counts. Help us make a lasting impact by supporting our mission to provide meals to the less fortunate. Your generosity brings hope and sustenance to our community.</p>
							<a href="about.php" class="hvr-rectangle-out button">READ MORE</a>
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="banner-info">
							<h3>HELP TURN TEARS TO SURES</h3>
							<p>Every act of kindness counts. Join us in the mission to turn tears into joy by providing essential meals to those facing hunger. Your support matters.</p>
							<a href="about.php" class="hvr-rectangle-out button">READ MORE</a>
						</div>
						<div class="clearfix"></div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->

	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<?php

			$ret = mysqli_query($con, "select * from tblpages where PageType='aboutus' ");
			$cnt = 1;
			while ($row = mysqli_fetch_array($ret)) {

			?>
				<div class="welcome-head mission-header h3">
					<h3 class="">Welcome to HopeHarvest</h3>
					<br>
					<p>At HopeHarvest, we extend a warm embrace to all those who share a common vision of making a positive impact on the lives of others through food redistribution and donation. Our mission is to foster a community of kindness, where surplus nourishment meets the hungry, and compassion cultivates change.
						As we navigate the path of goodwill, we invite you to be a part of this journey. Whether you are a donor, a volunteer, or someone seeking support, HopeHarvest stands as a beacon of hope, bringing together hearts that believe in the power of sharing.
						Together, let's create a world where no one goes to bed hungry, and where the act of giving transforms lives. Thank you for joining us in this noble cause. Your support is the driving force behind every meal served, every smile shared, and every life touched. Welcome to HopeHarvest – where every contribution, big or small, sows the seeds of compassion and cultivates a harvest of hope for a brighter, nourished tomorrow.</p>
				</div>

		</div><?php } ?>
	</div>
	<!-- //welcome -->
	<!-- mission -->
	<div class=" mission">
		<div class="container">
			<div class="mission-header">
				<h3>OUR MISSION</h3>
			</div>
			<div class="mission-grids row">
				<div class="col-md-6 mission-left">
					<img src="images/333.jpg" alt="" />
				</div>
				<div class="col-md-6 mission-right">
					<div class="mis-one">
						<div class="mis-left">
							<img src="images/444.png" alt="" />
						</div>
						<div class="mis-right">
							<h3>HELP & SUPPORT</h3>
							<p>Quis autem vel eum iure reprehenderit qui
								in ea voluptate velit esse quam nihil molestiae</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="mis-one">
						<div class="mis-left">
							<img src="images/555.png" alt="" />
						</div>
						<div class="mis-right">
							<h3>Starve Free World</h3>
							<p>Quis autem vel eum iure reprehenderit qui
								in ea voluptate velit esse quam nihil molestiae</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="mis-one">
						<div class="mis-left">
							<img src="images/666.png" alt="" />
						</div>
						<div class="mis-right">
							<h3>Helping Hand</h3>
							<p>Quis autem vel eum iure reprehenderit qui
								in ea voluptate velit esse quam nihil molestiae</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //mission -->

	<!-- //success -->
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