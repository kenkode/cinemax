<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<div class="inner-block">
    <div class="product-block">
    	<div class="pro-head">
    		<h2>Comments</h2>
    	</div>

      
 <div style="margin-bottom:20px;margin-left:10px;">
      <a target="blank" href="commentsreport.php" class="btn btn-success">Comments Report</a>
      </div>

       
    	<table id="users" class="table table-condensed table-responsive table-hover">


      <thead style="background:#35b1d6">

        <th style="color:#FFF">#</th>
        <th style="color:#FFF">Name</th>
        <th style="color:#FFF">Email</th>
        <th style="color:#FFF">Subject</th>
        <th style="color:#FFF">Comment</th>
        <th style="color:#FFF">Reply</th>
        <th style="color:#FFF">Date</th>
        <th style="color:#FFF">View</th>
        <th style="color:#FFF">Reply</th>
        <th style="color:#FFF">Report</th>
        <th style="color:#FFF">Delete</th>
      </thead>
      <tbody>

        <?php
        $selm=mysqli_query($con,"select * from comments order by id DESC") or die(mysqli_error($con));
    $i=0;
    while($row=mysqli_fetch_array($selm,MYSQLI_ASSOC)){
    $i++;
    $id=$row['id'];
                    
    echo'<tr class="del'.$id.'"><td>'.$i.'</td><td><a href="view_comment.php?id='.$row['id'].'">'.$row['firstname'].' '.$row['lastname'].'</a></td><td>'.$row['email'].'</td><td>'.$row['subject'].'</td><td>'.$row['message'].'</td><td>'.$row['reply'].'</td><td>'.$row['date'].'</td><td><a class="btn btn-warning" href="view_comment.php?id='.$row['id'].'">View</a></td><td><a class="btn btn-info" href="reply.php?id='.$row['id'].'">Reply</a></td><td><a href="reportcomment.php?id='.$row['id'].'" target="_blank" class="btn btn-success">Report</a></td><td><a class="btn btn-danger" id='.$id.'>Delete</a></td></tr>';
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

<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
   $('.btn-danger').click( function() {
    
                var id = $(this).attr("id");
         
                if(confirm("Are you sure you want to delete this comment?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_comment.php",
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


                      
						
