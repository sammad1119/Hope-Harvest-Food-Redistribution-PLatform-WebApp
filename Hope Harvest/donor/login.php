<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $query = mysqli_query($con, "select ID from tbldonor where  Email='$email' && Password='$password' ");
  $ret = mysqli_fetch_array($query);
  if ($ret > 0) {
    $_SESSION['pgasoid'] = $ret['ID'];
    header('location:dashboard.php');
  } else {
    echo "<script>alert('Invalid Details.');</script>";
  }
}
?>
<!DOCTYPE html>

<head>
  <title>Hope Harvest | Donor Login </title>

  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- bootstrap-css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- //bootstrap-css -->
  <!-- Custom CSS -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <link href="css/style-responsive.css" rel="stylesheet" />
  <!-- font CSS -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <!-- font-awesome icons -->
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <script src="js/jquery2.0.3.min.js"></script>
</head>
<style>
  .donor-login {

    background-image: url('../images/bg.jpg');
    background-size: cover;

    background-repeat: no-repeat;
    position: relative;
    overflow: hidden;

  }

  .donor-form {
    box-shadow: 10px 10px 5px rgba(255, 255, 255, 0.5);

  }

  .donor-login::before {
    content: "";
    background-image: url('../images/bg.jpg');
    /* Set the background image directly */
    filter: blur(100px);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
  }

  .outer-donor {
    width: 100%;
    height: 100vh;

  }
</style>
<div class="outer-donor">

  <body class="donor-login ">
    <div class=" log-w3">
      <div class="w3layouts-main donor-form">
        <h2>Donor</h2>
        <h2>Sign In</h2>
        <form action="#" method="post" name="login">

          <input type="email" class="ggg" name="email" placeholder="E-MAIL" required="true">
          <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="true">

          <a href="forgot-password.php">Forgot Password?</a>
          <div class="clearfix"></div>
          <input type="submit" value="Sign In" name="login">
        </form>
        <p>Don't Have an Account ?<a href="donor-registration.php">Create an account</a></p>
        <p class="mb-1">

          <i class="fa fa-home" aria-hidden="true"><a href="../index.php">Home Page</a></i>
        </p>
      </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
  </body>
</div>


</html>