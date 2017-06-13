<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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

   .right-inner-addon {
    position: relative;
   }
   .right-inner-addon input {
    padding-right: 30px !important;    
   }
   .right-inner-addon i {
    position: absolute;
    right: 0px;
    padding: 0px 12px;
    pointer-events: none;
   }

   .ui-datepicker {
    padding: 0.2em 0.2em 0;
    width: 550px !important;

   }
   input:hover,.datepicker:hover{
    cursor: pointer !important;
   }
   </style>



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
<div class="inner-block" style="min-height:590px !important;">
    <div class="product-block">
    	<div class="pro-head">
    		<h2>Period</h2>
    	</div>

          <table width="150">
                <tr><td colspan="2">
                  <h5 style="color:#FF0000">Please fill the fields in *</h5>
                  <br>
                  </td></tr>
                <tr><td colspan="2">
                
                </td></tr>
                <form onSubmit="return validateForm()" name="period" class="com-mail" target="blank" method="post" action="customer_report.php">
        
                  <tr><td width="104"> <label>From<span style="color:#FF0000">*</span>:</label></td><td width="500">
                   <div class="form-group">
                   <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                    <input type="text" class="input-block-level datepicker" readonly placeholder="Please enter period from" name="from" style="width:500px"></td></tr>
                  </div>
                  </div>
                  <tr><td width="104"> <label>To<span style="color:#FF0000">*</span>:</label></td><td width="500">
                    <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                    <input type="text" readonly class="input-block-level datepicker" placeholder="Please enter period to" name="to" style="width:500px"></td></tr>
                  </div>
                  <tr><td>
                    <br>
                                    <button class="btn btn-large btn-success" type="submit" name="orders">Select</button>
                  </td></tr>
                                  </form>
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

<script type="text/javascript" src="datepicker/js/bootstrap-datepicker.min.js"></script>


   <script type="text/javascript">
$(function(){
$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    endDate: '+0d',
    autoclose: true
});
});
</script>

<script type="text/javascript">
function validateForm()
{

var n=document.forms["period"]["from"].value;
var c=document.forms["period"]["to"].value;

/*var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var phoneno = /^\+?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/;
var mobileno = /^\d{10}$/;*/

if ((n==null || n==""))
  {
  alert("Please select period from");
  return false;
  }
  if ((c==null || c==0))
  {
  alert("Please select period to");
  return false;
  }
  
  
}
</script>

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


                      
						
