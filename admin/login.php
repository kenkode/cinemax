<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	/*unset($_SESSION['ID']);
	unset($_SESSION['manager']);*/
	if(isset($_SESSION['ID']) || isset($_SESSION['manager'])) {
		header("location: index.php");
		exit();
	}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">

				<h1>Login</h1>
			</div>
			<div class="login-block">
				<?php
    	 	include 'db.php';
if(isset($_REQUEST['login'])){
$sql = mysqli_query($con,"select * from admin where (username='".$_REQUEST['user']."' OR email='".$_REQUEST['user']."') AND password='".md5($_REQUEST['password'])."'") or die( mysqli_error($con));
$existCount=mysqli_num_rows($sql);
if($existCount == 1){//evaluate the count
	$row=mysqli_fetch_array($sql, MYSQLI_ASSOC);
	
		$_SESSION["ID"]=$row["id"];
	    $_SESSION["manager"]=$row['username'];
		$_SESSION["password"]=$row['password'];
		$_SESSION["email"]=$row["email"];
		
		session_write_close();
		header('Location: index.php');
		
    }
else{
echo '<span style="color:red"><img src="images/1433075310_cancel_48.png" width="24" height="24"/>Invalid email/password!</span>';
}
}
?>
				<form name="login" method="post" onSubmit="return validateForm()">
					<input type="text" name="user" placeholder="Username or Email" required="">
					<input type="password" name="password" class="lock" required placeholder="Password">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<!-- <ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>Remember me</label>
								</li>
							</ul> -->
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="login" value="Login">

					<!-- <h3>Not a member?<a href="signup.html"> Sign up now</a></h3>				
					<h2>or login with</h2>
					<div class="login-icons">
						<ul>
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>						
						</ul>
					</div> -->
				</form>
				<div class="forgot" style="float:left">
							<a href="#">Forgot password?</a>
						</div>	
				<div class="forgot"><a style="float:right;text-decoration:none" href="../index.php">Go Back to Home</a></h5>
			</div></div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include'footer.php';?>
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
