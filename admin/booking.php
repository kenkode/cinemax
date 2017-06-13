<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Bookings</title>
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
<div class="inner-block" style="width:1865px">
    <div class="product-block">
    	<div class="pro-head">
    		<h2>Bookings</h2>
    	</div>

<?php
        $t = mysqli_query($con,"select sum(price) as total from booking left join movies on booking.movie_id=movies.id");
        $i=0;
        $rt=mysqli_fetch_array($t,MYSQLI_ASSOC);
      ?>

 <div align="right" style="margin-bottom:-20px;">
      <span class="badge badge-success">Total: Kshs. <?php echo number_format($rt['total'],2); ?></span>
      </div>
      
 <div style="margin-bottom:20px;margin-left:10px;">
      <a href="bookingperiod.php" class="btn btn-success">Bookings Report</a>
      </div>

       
    	<table id="users" style="width:1800px !important" class="table table-condensed table-responsive table-hover">


      <thead style="background:#35b1d6">

        <th style="color:#FFF">#</th>
        <th style="width:50px !important;color:#FFF">Ticket No.</th>
        <th style="color:#FFF">Name</th>
        <th style="width:50px !important;color:#FFF">Email</th>
        <th style="color:#FFF">Phone</th>
        <th style="color:#FFF">Id No.</th>
        <th style="color:#FFF">Age</th>
        <th style="color:#FFF">Movie</th>
        <th style="color:#FFF">Cinema Hall</th>
        <th style="color:#FFF">Date</th>
        <th style="color:#FFF">Price (Kshs.)</th>
        <th style="color:#FFF">View</th>
        <th style="color:#FFF">Report</th>

      </thead>
      <tbody>

        <?php
        $selm = mysqli_query($con,"select * from booking");
        $i=0;
		while($row=mysqli_fetch_array($selm,MYSQLI_ASSOC)){
		$i++;
    $id=$row['id'];

    $sel = mysqli_query($con,"select * from movies where id='".$row['movie_id']."'");

    $r = mysqli_fetch_array($sel,MYSQLI_ASSOC);

    $sql = mysqli_query($con,"select * from cinemas where id='".$row['cinema_id']."'");

    $rs = mysqli_fetch_array($sql,MYSQLI_ASSOC);

		echo'<tr class="del'.$id.'"><td>'.$i.'</td><td><a href="view_booking.php?id='.$row['id'].'">#'.$row['ticket_no'].'</a></td><td>'.$row['firstname'].' '.$row['lastname'].'</td><td style="width:100px !important">'.$row['email'].'</td><td>'.$row['phone'].'</td><td>'.$row['id_number'].'</td><td>'.$row['age'].'</td><td>'.$r['name'].'</td><td>'.$rs['name'].'</td><td>'.$row['date'].'</td><td>'.number_format($r['price'],2).'</td><td><a class="btn btn-warning" href="view_booking.php?id='.$row['id'].'">View</a></td><td><a target="blank" href="reportbooking.php?id='.$row['id'].'" target="_blank" class="btn btn-success">Report</a></td></tr>';
		}
        ?>
      </tbody>


    </table>
    	
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
<?php include'footer.php' ?>
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

<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
   $('.btn-danger').click( function() {
    
                var id = $(this).attr("id");
         
                if(confirm("Are you sure you want to delete this movie?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_movie.php",
                        data: ({id: id}),
                        cache: false,
                        success: function(html){
                            $(".del"+id).fadeOut('slow'); 
                        } 
                    }); 
                }else{
                    return false;
        }
            });       
  });
   </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
