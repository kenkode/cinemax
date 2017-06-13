<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include'db.php';
$id=$_REQUEST['id'];

             $sel = mysqli_query($con,"select * from booking where id='".$_REQUEST['id']."'");

             $row = mysqli_fetch_array($sel,MYSQLI_ASSOC);
             ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Customers</title>
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
    		<h2>Customer <?php echo $row['firstname'].' '.$row['lastname'];?></h2>
    	</div>

      <div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Customer <?php echo $row['firstname'].' '.$row['lastname'];?>
                            </div>


                            <div class="row event-agile2">  
      
      <div class="col-lg-12 col-md-12 event-w3ls">
        <div class="table-responsive">
          
          <table class="table table-hover">
                                  
                              <tbody>
                                <tr>
                                  <td width="35%">Name:</td>
                                  <td><?php echo $row['firstname'].' '.$row['lastname']?></td>                                 
                                                             
                                  </tr>
                              <tr>
                                 <td>Email Address:</td>
                                  <td><?php echo $row['email']?></td> </tr>
                              </tr>
                              <tr>
                                 <td>Phone Number:</td>
                                  <td><?php echo $row['phone']?></td> </tr>
                              </tr>
                              <tr>
                                 <td>Age:</td>
                                  <td><?php echo $row['age']?></td> </tr>
                              </tr>
                              <tr>
                                 <td>Identity Number:</td>
                                  <td><?php echo $row['id_number']?></td> </tr>
                              </tr>
                          </tbody>
                      </table>
         
        </div>
      </div>
    </div>  
    <div><a target="blank" class="btn btn-success" href="reportcustomer.php?id=<?php echo $_REQUEST['id'];?>">Report</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="customer.php">Go Back</a></div>

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


                      
						
