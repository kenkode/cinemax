<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include'db.php';
$id=$_REQUEST['id'];

             $sel = mysqli_query($con,"select * from comments where id='".$_REQUEST['id']."'");

             $row = mysqli_fetch_array($sel,MYSQLI_ASSOC);

             $ad = mysqli_query($con,"select * from admin");

             $admin = mysqli_fetch_array($ad,MYSQLI_ASSOC);
             ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Comments</title>
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
    		<h2>Reply comment</h2>
    	</div>

      <div class="col-md-10 col-md-offset-1 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Reply Comment
						</div>
						<div class="inbox-details-body">

                           <?php
			 include'db.php';
			 
            
			 if(isset($_REQUEST['submit'])){
			 
			 $sql = mysqli_query($con,"update comments set reply='".$_REQUEST['message']."' where id='".$_REQUEST['id']."'") or die(mysqli_error($con));
			 if( $sql){
			 require 'PHPMailer-master/PHPMailerAutoload.php';

$to=$row['email'];
$subject=$row["subject"];
$body='Hello '.$row['firstname'].' '.$row['lastname'].' , <br><br>'.$_REQUEST['message'].'<br/><br/> Thank you for comment...Please visit our site on <a href="http://localhost/onlinecinemabooking/index.php">cinemax.com</a> and booking a movie....<br/> <br/>';
	  
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
//$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
//$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "kevin.muchiri@aiesec.net";

//Password to use for SMTP authentication
$mail->Password = "muchirimaina1992";

//Set who the message is to be sent from
$mail->setFrom('info@cinemax.com', 'CINEMAX');

//Set an alternative reply-to address
$mail->addReplyTo($admin['email'], $admin['username']);

//Set who the message is to be sent to
$mail->addAddress($to, $row['firstname'].' '.$row['lastname']);

//Set the subject line
$mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($body);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

$mail->send();
//Attach an image file

//send the message, check for errors
/*if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}*/
			 echo "<img src='images/1433075297_ok-green.png'/><span style='color:green'>Successfully replied user`s comment! The reply has been sent to the user as an email </span>";
			 }else{
			 echo "<img src='images/1433077051_cancel.png' width='24' height='24'/><span style='color:red'>An error occurred in updating!</span>";
			 }
			 }
			 ?>

							<div class="alert alert-info">
								Please fill details in *
							</div>
							<form onSubmit="return validateForm()" name="comment" id="comment" class="com-mail" method="post">
								<table border="0">
								<tr><td width="100"><label>Name</label></td><td> : <?php echo $row['firstname'].' '.$row['lastname']?></td></tr>
								<td><label>Email</label></td><td> : <?php echo $row['email']?></td></tr>
								<td><label>Subject</label></td><td> : <?php echo $row['subject']?></td></tr>
								<td><label>Comment</label></td><td> : <?php echo $row['message']?></td></tr>
                                </table>
                                <br>
                                <label>Reply <span style="color:red">*</span>:</label>       
                                <textarea rows="6" name="message" placeholder="Message"></textarea>
                                <div class="form-group">
								 <input type="submit" value="Reply" name="submit"> 
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

var n=document.forms["comment"]["message"].value;

/*var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var phoneno = /^\+?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/;
var mobileno = /^\d{10}$/;*/

if ((n==null || n==""))
  {
  alert("Please insert a reply");
  return false;
  }
  
}
</script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
