<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include'db.php';
$id=$_REQUEST['id'];

             $sel = mysqli_query($con,"select * from movies where id='".$_REQUEST['id']."'");

             $row = mysqli_fetch_array($sel,MYSQLI_ASSOC);
             ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Movies</title>
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
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->

<style type="text/css">
.badge{
  border-radius: 0px !important;
}
.ls{
  display: inline;
}
.fa-star,.fa-star-half-o{
  color: #ff8d1b;
}
</style>

<script src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

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
<link href="css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

    
    <script src="js/star-rate.min.js" type="text/javascript"></script>
<style type="text/css">
.glyphicon {
    font-size: 20px !important;
    color: orange !important;
    border: #000 !important;
}
</style>


<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block" >
    <div class="product-block col-md-offset-2">
    	<div class="pro-head">
    		<h2><?php echo $row['name'];?> Movie</h2>
    	</div>

      <div class="col-md-10 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  <?php echo $row['name'];?> Movie
                            </div>


                            <div class="row event-agile2">  
      <div class="col-lg-6 col-md-6 event-w3ls">
        <div class="hover01 column">
          <div>
            <figure><img src="<?php echo $row['image']; ?>" alt="No image" class="img-responsive"/></figure>
          
           <div class="chit-chat-heading" style="margin-top:30px;">
                                  Preview
                            </div>
          <video  width="300" height="200" controls>
                              <source src="<?php echo $row['preview']; ?>">
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
          <span class="badge badge-success">Country</span>
          <p class="event-p2"><?php echo $row['country']; ?></p>
          <span class="badge badge-success">Year</span>
          <p class="event-p2"><?php echo $row['year']; ?></p>
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
          <span class="badge badge-success">Rating</span>
          <div>
                    <!-- <ul style="list-style-type: none;margin-left:-40px" class="w3l-ratings">
                      <li class="ls"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                      <li class="ls"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                      <li class="ls"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                      <li class="ls"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                      <li class="ls"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                    </ul> -->
                    <input disabled value="<?php echo $row['rating']?>" type="number" name="rating" class="ls rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5">
                
                  </div>
         
    
        </div>
      </div>
    </div>  
    <div><a class="btn btn-info" href="update_movie.php?id=<?php echo $_REQUEST['id'];?>">Update</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="blank" class="btn btn-success" href="reportmovie.php?id=<?php echo $_REQUEST['id'];?>">Report</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="movies.php">Go Back</a></div>

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
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
