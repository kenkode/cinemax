<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include'db.php';
$id=$_REQUEST['id'];

             $sel  = mysqli_query($con,"select * from admin where id='".$_REQUEST['id']."'");

             $row  = mysqli_fetch_array($sel,MYSQLI_ASSOC);
             $pass = $row['password'];
             ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/jquery.dataTables.1.10.11.min.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<style type="text/css">

   #imagePreview {
    width: 180px;
    height: 180px;
    background-position: center center;
    background-size: cover;
    background-image:url("<?php echo 'images/default_photo.png' ?>");
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}

   .right-inner-addon {
    position: relative;
   }
   .right-inner-addon input {
    padding-right: 20px;    
   }
   .right-inner-addon i {
    position: absolute;
    right: 0px;
    padding: 10px 12px;
    pointer-events: none;
   }
   </style>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<script src="js/price_format.js"></script> 
<script src="js/md5.js"></script>
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->

<script src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#image").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});
</script>
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php include'head.php';?>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="product-block">
    	<div class="col-md-offset-1 pro-head">
    		<h2>Update User</h2>
    	</div>

      <div class="col-md-10 col-md-offset-1 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Update User
						</div>
						<div class="inbox-details-body">

                           <?php
			 include'db.php';
			 
            
			 if(isset($_REQUEST['submit'])){
			 
			 $sql = mysqli_query($con,"update admin set password='".md5($_REQUEST['cpass'])."' where id='".$_REQUEST['id']."'") or die(mysqli_error($con));
			 if( $sql){
			 //echo "<img src='images/1433075297_ok-green.png'/><span style='color:green'>Successfully updated user details!</span>";
			 echo "<script>alert('Successfully Updated password! Please login with your new credentials')</script>";
       $_SESSION['manager']=" ";
       session_destroy();
       echo "<script>window.location = 'login.php';</script>";
       
       }else{
			 echo "<img src='images/1433077051_cancel.png' width='24' height='24'/><span style='color:red'>An error occurred in updating!</span>";
			 }
			 }
			 ?>

							<div class="alert alert-info">
								Please fill details in *
							</div>
							<form onSubmit="return validateForm()" name="profile" id="profile" class="com-mail" method="post">
								<input type="hidden" name="pass" placeholder="Password" value="<?php echo $row['password']?>" style="width:100%;height:40px;">
                <label>Old Password <span style="color:red">*</span>:</label><br>
								<input type="password" name="opass" placeholder="Old Password" style="width:100%;height:40px;"><br><br>
								<label>New Password <span style="color:red">*</span>:</label><br>
                <input type="password" name="npass" placeholder="New Password" style="width:100%;height:40px;"><br><br>
                <label>Confirm Password <span style="color:red">*</span>:</label><br>
								<input type="password" name="cpass"  placeholder="Confirm Password" style="width:100%;height:40px;">
								
	             <div class="form-group">
								<input type="submit" value="Update" name="submit"> 
							</div>
							</form>
						</div>
					</div>
				</div>
    	
      <div class="clearfix"> </div>
    </div>
</div>
<!--inner block end here-->
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
			<script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>

<!--copy rights start here-->
<?php include'footer.php';?>
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <?php include'includes.php';?>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>

    <script type="text/javascript">

function validateForm()
{
var m=md5(document.forms["profile"]["opass"].value);
var p=document.forms["profile"]["pass"].value;
var o=document.forms["profile"]["opass"].value;
var n=document.forms["profile"]["npass"].value;
var c=document.forms["profile"]["cpass"].value;
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
/*var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var phoneno = /^\+?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/;
var mobileno = /^\d{10}$/;*/

if ((o==null || o==""))
  {
  alert("Please insert your old password");
  return false;
  }
  if(!m.match(p)){
  alert("Old Password is incorrect");
  return false;
  }
  if ((n==null || n==""))
  {
  alert("Please insert your new password");
  return false;
  }
  if(c.match(n))
  {
  } else{
  alert("Passwords don`t match");
  return false;
  }
}
</script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
