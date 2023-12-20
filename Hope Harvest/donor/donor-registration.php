<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);

session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (isset($_POST['submit'])) {
  $fname = $_POST['name'];
  $mobno = $_POST['mobilnumber'];
  $email = $_POST['email'];
  // $password = md5($_POST['password']);
  $pass = password_generate(9);
  $password = md5($pass);
  $ret = mysqli_query($con, "select Email from tbldonor where Email='$email'");
  $result = mysqli_fetch_array($ret);
  if ($result > 0) {
    $msg = "This email or Contact Number already associated with another account";
  } else {
    $query = mysqli_query($con, "insert into tbldonor(FullName, MobileNumber, Email,  Password) value('$fname', '$mobno', '$email', '$password' )");
    if ($query) {
      $msg = "You have successfully registered. Check your email for password.";

      $MailHtml = "Your Password for Hope Harvest ID is: $pass";
      echo smtp_mailer($email, 'User Verification & Password', $MailHtml);
    } else {
      $msg = "Something Went Wrong. Please try again";
    }
  }
}

function password_generate($chars)
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}

function smtp_mailer($to, $subject, $msg)
{
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->IsHTML(true);
  $mail->CharSet = 'UTF-8';
  //$mail->SMTPDebug = 2; 
  $mail->Username = "osamajamshed44@gmail.com";
  $mail->Password = "vyfl olpl sbfb uiyf";
  $mail->SetFrom("osamajamshed44@gmail.com");
  $mail->Subject = $subject;
  $mail->Body = $msg;
  $mail->AddAddress($to);
  $mail->SMTPOptions = array('ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => false
  ));
  if (!$mail->Send()) {
    return 0;
  } else {
    return 1;
  }
}

?>


<!DOCTYPE html>

<head>
  <title>FWMS | Donor Registration </title>

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
  <script type="text/javascript">
    function checkpass() {
      if (document.signup.password.value != document.signup.repeatpassword.value) {
        alert('Password and Repeat Password field does not match');
        document.signup.repeatpassword.focus();
        return false;
      }
      return true;
    }
  </script>

</head>

<body>
  <div class="reg-w3">
    <div class="w3layouts-main">
      <h2>Register Now</h2>
      <p style="font-size:16px; color:blue;" align="center"> <?php if ($msg) {
                                                                echo $msg;
                                                              }  ?> </p>
      <form action="#" method="post">
        <input type="text" class="ggg" name="name" placeholder="NAME" required="true">
        <input type="email" class="ggg" name="email" placeholder="E-MAIL" required="true">
        <input type="text" class="ggg" name="mobilnumber" placeholder="PHONE" required="true" maxlength="11" pattern="[0-9]+">

        <h4><input type="checkbox" required="true" />I agree to the Terms of Service and Privacy Policy</h4>

        <div class="clearfix"></div>
        <input type="submit" value="submit" name="submit">
      </form>
      <p>Already Registered.<a href="login.php">Login</a></p>
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

</html>