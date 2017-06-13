<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include'db.php';
$id=$_REQUEST['id'];

             $sel = mysqli_query($con,"select movies.name as mname,cinemas.name as cname,movie_periods.id as id,movie_periods.date as date from movie_periods left join movies on movie_periods.movie_id=movies.id left join cinemas on movie_periods.cinema_id=cinemas.id where movie_periods.id='".$_REQUEST['id']."'");

             $row = mysqli_fetch_array($sel,MYSQLI_ASSOC);
             ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Movie Scheduling</title>
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

<?php

?>

<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block" >
    <div class="product-block ">
    	<div class="pro-head">
    		<h2>Movie Scheduling</h2>
    	</div>

      <div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Movie Scheduling
                            </div>


                            <div class="row event-agile2">  
      
      <div class="col-lg-12 col-md-12 event-w3ls">
        <div class="table-responsive">
          
          <table class="table table-hover">
                                  
                              <tbody>
                                <tr>
                                  <td width="35%">Movie:</td>
                                  <td><?php echo $row['mname']?></td>                                 
                                                             
                                  </tr>
                              <tr>
                                 <td>Cinema Hall:</td>
                                  <td><?php echo $row['cname']?></td> </tr>
                            </tr>

                            <tr>
                                 <td>Date/Time:</td>
                                  <td><?php echo $row['date']?></td> </tr>
                            </tr>
                          </tbody>
                      </table>
         
        </div>
      </div>
    </div>  
    <div><a class="btn btn-info" href="update_movie_period.php?id=<?php echo $_REQUEST['id'];?>">Update</a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="blank" class="btn btn-success" href="reportmovieperiod.php?id=<?php echo $_REQUEST['id'];?>">Report</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="movieperiod.php">Go Back</a></div>

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


                      
						
