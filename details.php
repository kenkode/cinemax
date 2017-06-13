
<!-- /top bar -->
<!-- navigation -->
<?php
include'includes.php';
$id=$_REQUEST['id'];

             $sel = mysqli_query($con,"select * from movies where id='".$_REQUEST['id']."'");

             $row = mysqli_fetch_array($sel,MYSQLI_ASSOC);
             ?>

<style type="text/css">
.event-p2{
	color: #fff !important;
}
.badge{
	border-radius: 0px !important;
}
</style>

<link href="admin/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

    
    <script src="admin/js/star-rate.min.js" type="text/javascript"></script>
<style type="text/css">
.glyphicon {
    font-size: 20px !important;
    color: orange !important;
    border: #000 !important;
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

<div class="inner-block">
    <div class="product-block col-md-offset-2">

      <div class="col-md-10 chit-chat-layer1-left">
       <div class="work-progres">
                            


     <div class="row event-agile2" style="padding:50px;background-color:#000;color:#fff;">  
      <div class="col-lg-6 col-md-6 event-w3ls" style="color:#fff !important;">
        <div class="hover01 column">
          <div>
            <figure><img src="<?php echo 'admin/'.$row['image']; ?>" alt="No image" class="img-responsive"/></figure>
          
           <div style="margin-top:30px;">
                              <span class="badge badge-success">
                                  Preview
                              </span>
                            </div>
          <video  width="300" height="200" controls>
                              <source src="<?php echo 'admin/'.$row['preview']; ?>">
                              </video>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 event-w3ls">
        <div class="event-info">
           <span class="badge badge-success">Description</span>
          
          <p class="event-p2"><?php echo $row['description']; ?></p>
          <span class="badge badge-success">Genre</span>
          <p class="event-p2"><?php echo $row['genre']; ?></p>
          <span class="badge badge-success">Price (KES)</span>
          <p class="event-p2"><?php echo number_format($row['price'],2); ?></p>
          <span class="badge badge-success">Age</span>
          <?php 
          $part = explode('-',$row['age']); 
          if($part[0] == 1 && $part[1] == 10){?>
          <p class="event-p2">General</p>
          <?php }else if($part[0] == 10 && $part[1] == 14){ ?>
          <p class="event-p2">PG <?php 
            echo $part[0];
           ?></p>
          <?php }else if($part[0] == 14 && $part[1] == 18){ ?>
          <p class="event-p2">PG <?php 
            echo $part[0];
           ?></p>
          <?php }else if($part[0] == 18){ ?>
          <p class="event-p2">PG <?php 
            echo $part[0];
           ?></p>
          <?php } ?>

          <span class="badge badge-success">Price</span>
          <p class="event-p2"><?php echo number_format($row['price'],2); ?></p>
          <span class="badge badge-success">Now Showing</span>
          <?php
             $id=$_REQUEST['id'];

             $sel = mysqli_query($con,"select address,movies.name as mname,cinemas.name as cname,movie_periods.id as id,movie_periods.date as date from movie_periods left join movies on movie_periods.movie_id=movies.id left join cinemas on movie_periods.cinema_id=cinemas.id where movie_id='".$_REQUEST['id']."'");

             while($r = mysqli_fetch_array($sel,MYSQLI_ASSOC)){
          ?>
          <p class="event-p2"><?php echo $r['cname'].' at '.$r['date']; ?><br>
          Location : <?php echo $r['address']; ?></p>
          <?php } ?>
          <span class="badge badge-success">Rating</span>
          <div>
										<!-- <ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul> -->
                    <input disabled value="<?php echo $row['rating']?>" type="number" name="rating" class="ls rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5">
                
									</div>
									
                                    <br>
                                    <div>
									<a href="booking.php?id=<?php echo $row['id'];?>" style="margin-left:-5px;background:#ff8d1b;padding:5px 10px;color:#fff">Book Now</a>
                                      </div>
                                      
                                      
        </div>
      </div>
    </div>  
    
             </div>
      </div>
    	
      <div class="clearfix"> </div>
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