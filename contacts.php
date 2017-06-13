<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!-- /top bar -->
<!-- navigation -->
<?php
 include'admin/db.php';
 include'includes.php';
 ?>
<div style="float:right" class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav link-effect">
					<li><a href="index.php">Home</a></li>
					<!-- <li><a href="#service">About Us</a></li> -->
					<!-- <li><a href="#service">Services</a></li>
					<li><a href="#team">Team</a></li> -->
					<li><a href="movies.php">Movies</a></li>
					<!-- <li><a href="#stats">Statistics</a></li> -->	
					<li class="active"><a href="contacts.php">Contact</a></li>
				</ul>
			</div>
		</div>
		<!-- <form class="search-container" action="#" method="post">
			<input id="search-box" type="text" class="search-box" name="q" />
			<label for="search-box"><span class="fa fa-search search-icon" aria-hidden="true"></span></label>
			<input type="submit" id="search-submit" />
		</form> -->
	</nav>
</div>

<!-- contact section -->
<section class="contact" id="contact">
	<div class="container">
		
		<div class="col-lg-10 col-md-10 contact-wthree2">
			<h3 class="head2" style="color:#ff8d1b">Your Comments</h3>
            <?php
			if(isset($_REQUEST['submit'])){
			 
			 $sql = mysqli_query($con,"insert into comments(firstname,lastname,email,subject,message,date,is_seen)values('".$_REQUEST['firstname']."', '".$_REQUEST['lastname']."', '".$_REQUEST['mail']."', '".$_REQUEST['subject']."', '".$_REQUEST['message']."', '".date('Y-m-d')."',0)") or die(mysqli_error($con));
			 if( $sql){
			 echo "<img src='admin/images/1433075297_ok-green.png'/><span style='color:green'>Successfully inserted your comment! Thank you...</span>";
			 }else{
			 echo "<img src='admin/images/1433077051_cancel.png' width='24' height='24'/><span style='color:red'>An error occurred in insertion!</span>";
			 }
			 }
			 ?>
			<form method="post">
				<div class="row">
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<input type="text" class="form-control first-name" required name="firstname" placeholder="First Name" required/>
					</div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<input type="text" class="form-control last-name" required name="lastname" placeholder="Last Name" required/>
					</div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<input type="email" class="form-control mail" required name="mail" placeholder="Your Email" required/>
					</div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<input type="text" class="form-control pno" name="subject" placeholder="Subject" required/>
					</div>
					<div class="clearfix"></div>
					<div class="form-group col-lg-12 slideanim">
						<textarea class="form-control" rows="6" required name="message" placeholder="Your Message"></textarea>
					</div>
					<div class="form-group col-lg-12 slideanim">
						<button type="submit" name="submit" class="btn btn-lg btn-outline">Send Message</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- /contact section -->
<!-- footer section -->
<?php include'footer.php';?>
<!-- /footer section -->
<a href="#0" class="cd-top">Top</a>
<!-- js files -->


<script src="js/SmoothScroll.min.js"></script>
<script src="js/main.js"></script> 
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})
</script>
<!-- js for statistics -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- /js for statistics -->
<!-- js for portfolio -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio -->
<!-- js for search button -->
<script src="js/index.js"></script>
<!-- /js for search button -->
<!-- js for banner -->
<script src="js/zslider-1.0.1.js"></script>
<script type="text/javascript">
		var slider = $('.slider').zslider({
			imagePanels: $('.slider-panel'),
			ctrlItems: $('.slider-item'),
			ctrlItemHoverCls: 'slider-item-selected',
			//panelHoverShowFlipBtn: false,
			flipBtn: {
				container: $('.slider-page'),
				preBtn: $('.slider-pre'), 
				nextBtn: $('.slider-next')
			},
			callbacks: {
				animate: function(imagePanels, ctrlItems, fromIndex, toIndex) {
					return true;
				}
			}
		});
	</script>
<!-- /js for banner -->
<!-- /js files -->
</body>
</html>

<style>
label{
	font-size: 20px;
    padding: 10px;
    line-height: 34px;
    text-align: left;
}
.inner{
	width:70%;
	padding-left:10px;
}
.web{
	font-family:tahoma;
	size:12px;
	top:10%;
	border:1px solid #CDCDCD;
	border-radius:10px;
	padding:10px;
	width:45%;
	margin:auto;
	height:auto;
}
h1, h2{
	margin:3px 0;
	font-size:13px;
	text-decoration:underline;
}
.tLink{
	font-family:tahoma;
	size:12px;
	padding-left:10px;
	text-align:center;
}

.talign_right{
	text-align:right;
}
.username_availability_result{
	display:block;
	width:auto;
	float:left;
	padding-left:10px;
}
input[type=text]{
	background: #EFEFEF;
    border: solid 1px #CDCDCD;
    padding: 6px 10px;
    border-radius: 5px;
	float:right;
}
p{
	font-family:tahoma;
	font-size:13px;
}
a{
	font-size:13px;
	color:#FF0000;
}

</style>