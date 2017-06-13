
<!-- /top bar -->
<!-- navigation -->




<?php include'includes.php';?>

<link href="admin/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

    
    <script src="admin/js/star-rate.min.js" type="text/javascript"></script>
<style type="text/css">
.glyphicon {
    font-size: 15px !important;
    color: orange !important;
    border: #000 !important;
    margin-left: 0px !important;
}
</style>

<div style="float:right" class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav link-effect">
					<li class="active"><a href="index.php">Home</a></li>
					<!-- <li><a href="#service">About Us</a></li> -->
					<!-- <li><a href="#service">Services</a></li>
					<li><a href="#team">Team</a></li> -->
					<li><a href="movies.php">Movies</a></li>
					<!-- <li><a href="#stats">Statistics</a></li> -->	
					<li><a href="contacts.php">Contact</a></li>
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
<!-- /navigation -->
<!-- banner section -->

<div id="slidey" style="display:none;margin-left:100px;width:1520px;">
		<ul>
	    <?php
        $selm=mysqli_query($con,"select * from movies") or die(mysqli_error($con));
		$i=0;
		while($row=mysqli_fetch_array($selm,MYSQLI_ASSOC)){
		$i++;
		?>
        <li><img src="admin/<?php echo $row['image'];?>" alt=" "><p class='title'><?php echo $row['name'];?></p><p class='description'> <?php echo $row['description']?></p></li>
        <?php } ?>
      	</ul>   	
    </div>
    <script src="js/jquery.slidey.js"></script>
    <script src="js/jquery.dotdotdot.min.js"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: false
			});
			$(".slidey-list-description").dotdotdot();
		</script>

		<br><br>

		<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	
        

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel"> </h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

		<!-- banner-bottom -->
		<h4 class="latest-text w3_latest_text">Featured Movies</h4>
	<div class="banner-bottom">
		<div class="container">
			<div class="w3_agile_banner_bottom_grid">
				<div id="owl-demo" class="owl-carousel owl-theme">

					<?php
					                $sel=mysqli_query($con,"select * from movies") or die(mysqli_error($con));
									$a=0;
		                            while($r=mysqli_fetch_array($sel,MYSQLI_ASSOC)){
		                            
		                            $a++;
		                            ?>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a style="width:80% !important; height: 200px !important;" href="#" data-id="<?php echo $r['id'];?>" class="hvr-shutter-out-horizontal open-AddBookDialog" data-toggle="modal" data-target="#myModal"><img style="height: 200px !important;" src="admin/<?php echo $r['image'];?>" title="<?php echo $r['name'];?>" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text" align="center">
									
									<h6><a href="details.php?id=<?php echo $r['id'];?>"><?php echo $r['name'].' ('.$r['year'].')';?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home col-md-11">
									
<!-- 									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div> -->

                                <div class="block-stars">
										<!-- <ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul> -->
                                    <input disabled value="<?php echo $r['rating']?>" type="number" name="rating" class="ls rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5">
                
									</div>
                                    
                                    <div align="left" style="margin-left:10px;">
									<a href="details.php?id=<?php echo $r['id'];?>" style="background:#337ab7;padding:5px 15px;color:#fff">Details</a>&emsp;
									
									<a href="booking.php?id=<?php echo $r['id'];?>" style="margin-left:-5px;background:#ff8d1b;padding:5px 10px;color:#fff">Book Now</a>
                                      
									</div>
                                    
									
                                      
									<div class="clearfix"></div>
								</div>
							</div>
							<!-- <div class="ribben">
								<p>NEW</p>
							</div> -->
						</div>
					</div>
					<?php } ?>
					
				</div>
			</div>			
		</div>
	</div>
	<br><br>


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

<script type="text/javascript">
$(document).ready(function(){
$(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     //$(".modal #bookId").val( myBookId );

     $.ajax({
            url: "getId.php?bookId="+myBookId,
            type: "POST",
            dataType: "HTML",
            async: false,
            success: function(data) {
            var dt = data.split(",");
            $('#myModalLabel').html('<span style="color:#ff8d1b"><strong>'+dt[0]+' Preview</strong></span>');
            $('.modal-body').html('<video width="300" height="200" controls><source src="admin/'+dt[1]+'"></video>');            
           }
         }); 
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
});
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