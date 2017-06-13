
<!-- /top bar -->
<!-- navigation -->
<?php
include'includes.php';
$id=$_REQUEST['id'];
            
            $selp = mysqli_query($con,"select sum(number_of_seats) as seats,movie_periods.date from movie_periods left join cinemas on movie_periods.cinema_id=cinemas.id where movie_periods.movie_id='".$_REQUEST['id']."'");
            $rp = mysqli_fetch_array($selp,MYSQLI_ASSOC);

            $selb = mysqli_query($con,"select * from booking where movie_id='".$_REQUEST['id']."'");
            $count = mysqli_num_rows($selb);
            
            if($rp['seats']<=$count){
              echo "<script>alert('This movie is fully booked!')</script>";
              echo "<script>history.go(-1);</script>";
              exit();
            }else if($rp['date']<date('Y-m-d H:i:s')){
              echo "<script>alert('This movie is past booking!')</script>";
              echo "<script>history.go(-1);</script>";
              exit();
            }

            

             $sel = mysqli_query($con,"select * from movies where id='".$_REQUEST['id']."'");

             $row = mysqli_fetch_array($sel,MYSQLI_ASSOC);

             $sql = mysqli_query($con,"select * from booking");

             $rowcount=mysqli_num_rows($sql)+1;

             $rowcount = sprintf("%06d",$rowcount);

             $date = date('Ymd');
             $age  = $row['age'];
             ?>

<style type="text/css">
.event-p2{
	color: #fff !important;
}
.badge{
	border-radius: 0px !important;
}
.form-control{
  border-radius: 0px !important;
  background-color: #fff !important;
  height: 40px;
  color: #000 !important;
}
label{
  font-size: 14px !important;
  margin-left: -10px !important;
}
input,select{

  color: #000 !important;
  font-family:"Times New Roman", Times, serif;
  font-size: 12px;
}

input::-webkit-input-placeholder {
color: #999 !important;
}
 
input:-moz-placeholder { /* Firefox 18- */
color: #999 !important;  
}
 
input::-moz-placeholder {  /* Firefox 19+ */
color: #999 !important;  
}
 
input:-ms-input-placeholder {  
color: #999 !important;  
}
</style>

<script type="text/javascript">

function validateForm()
{
var i='<?php echo $age ?>';
var n=document.forms["booking"]["firstname"].value;
var c=document.forms["booking"]["lastname"].value;
var e=document.forms["booking"]["email"].value;
var l=document.forms["booking"]["phone"].value;
var a=document.forms["booking"]["age"].value;
var h=document.forms["booking"]["cinema"].value;
var id=document.forms["booking"]["idno"].value;
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var phoneno = /^\+?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/;
var mobileno = /^\d{10}$/;

if ((n==null || n==""))
  {
  alert("Please insert your firstname");
  return false;
  }
  if ((c==null || c==0))
  {
  alert("Please insert your lastname");
  return false;
  }
  if ((e==null || e==""))
  {
  alert("Please insert your email address");
  return false;
  }
  if (!filter.test(e)) {
    alert('Please insert a valid email address');
    e.focus;
  return false;
   }
   if ((l==null || l==""))
  {
  alert("Please insert your phone number");
  return false;
  }
  if(l.match(phoneno) || l.match(mobileno))
  {
  } else{
  alert("Please insert a valid contact");
  return false;
  }
  if ((a==null || a==0))
  {
  alert("Please insert your age");
  return false;
  }
  if(!a.match(/^[0-9]+$/))
  {
  
  alert("Please insert a valid age");
  return false;
  }
  if(i == "18-above" && (id == "" || id == null)){
  alert("Please insert your national identity number");
  return false;
  }
  if ((h==null || h==""))
  {
  alert("Please select the cinema hall you want to watch movie from");
  return false;
  }
  
  
}
</script>

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
<br><br><br>
<div class="inner-block">
    <div class="product-block">
      
      <div class="col-md-10 col-md-offset-1 compose-right">
          <div class="inbox-details-default">
            
            <div class="inbox-details-body">

              <div class="alert alert-info" style="font-size:18px !important;color:#fff !important;background-color:#000 !important;font-weight:bold !important">
                Book <?php echo $row['name']; ?> Movie (Please fill details in *)
              </div>
              <form onSubmit="return validateForm()" name="booking" id="booking" class="com-mail" action="pesapal-php-master/pesapal-iframe.php" method="post" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="mid" placeholder="Movie Id" value="<?php echo $_REQUEST['id']?>">
                <input type="hidden" class="form-control" name="ticketno" placeholder="Ticket Number" value="<?php echo $date.$id.$rowcount?>">
                <div class="form-group">
                <label>Firstname <span style="color:red">*</span>:</label>
                <input type="text" class="form-control" name="firstname" placeholder="Firstname">
                </div>
                <div class="form-group">
                <label>Lastname <span style="color:red">*</span>:</label>
                <input type="text" class="form-control" name="lastname" placeholder="Lastname">
                </div>
                <div class="form-group">
                <label>Email <span style="color:red">*</span>:</label>
                <input type="text" class="form-control" name="email" placeholder="Email Address">
                </div>
                <div class="form-group">
                <label>Phone number <span style="color:red">*</span>:</label>
                <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                </div>

                <div class="form-group">
                <label>Age <span style="color:red">*</span>:</label>
                <input type="text" class="form-control" name="age" placeholder="Age">
                </div>

                <?php if($age == "18-above"){?>
                <div class="form-group">
                <label>Identity Number <span style="color:red">*</span>:</label>
                <input type="text" class="form-control" name="idno" placeholder="Identity Number">
                </div>
                <?php }else{ ?>
                <input type="hidden" class="form-control" name="idno" placeholder="Identity Number">
                <?php } ?>
                <div class="form-group">
                        <label for="username">Cinema <span style="color:red">*</span></label>
                        <select name="cinema" class="form-control">
                           <option value="">Select Cinema</option>
                            <?php

             $sel = mysqli_query($con,"select address,movies.name as mname,cinemas.name as cname,cinemas.id as cid,movie_periods.id as id,movie_periods.date as date from movie_periods left join movies on movie_periods.movie_id=movies.id left join cinemas on movie_periods.cinema_id=cinemas.id where movie_id='".$_REQUEST['id']."'");

             while($r = mysqli_fetch_array($sel,MYSQLI_ASSOC)){
            $selc = mysqli_query($con,"select number_of_seats from movie_periods left join cinemas on movie_periods.cinema_id=cinemas.id where movie_periods.cinema_id='".$r['cid']."'");
            $rs = mysqli_fetch_array($selc,MYSQLI_ASSOC);

            $selbook = mysqli_query($con,"select * from booking where cinema_id='".$r['cid']."' and movie_id='".$_REQUEST['id']."'");
            $countb = mysqli_num_rows($selbook);
            if($rs['number_of_seats']>$countb){
          ?>
          <option value="<?php echo $r['cid'];?>"><?php echo $r['cname'].' - time:'.$r['date'].' - Location : '.$r['address']; ?></p>
          <?php }} ?>
          
                        </select>
                
                    </div>                    

                <div class="form-group">
                <label style="font-size:20px !important;">Price:</label><label style="color:green;font-size:20px !important;">Kshs. <?php echo number_format($row['price'],2); ?></label>
                </div>
                        
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-sm" value="Book Movie" style="color:#fff !important" name="submit"> 
              </div>
              </form>
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