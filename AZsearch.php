<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!-- /top bar -->
<!-- navigation -->
<?php include'includes.php';?>
<link rel="stylesheet" href="bootstrap-select-master/dist/css/bootstrap-select.css" type="text/css" media="all" />
<script src="bootstrap-select-master/dist/js/bootstrap-select.js"></script>
<style type="text/css">
optgroup {
	font-size: 20px !important;
}
</style>




<div style="float:right" class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav link-effect">
					<li><a href="index.php">Home</a></li>
					<!-- <li><a href="#service">About Us</a></li> -->
					<!-- <li><a href="#service">Services</a></li>
					<li><a href="#team">Team</a></li> -->
					<li class="active"><a href="movies.php">Movies</a></li>
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
<br>

<table style="margin-left:20px;" width="1450" border="0">
<tr>
<td style="width:400px !important">
<form action="moviesearch.php" method="post" onSubmit="return validateForm()" name="formsearch" id="formsearch">

<label>Search:</label>
<select required name="search" class="selectpicker" data-live-search="true" style="border-radius:0px !important;">
<option value="">Search By Genre</option>
 <option value="Action">Action</option>
 <option value="Adventure">Adventure</option>
 <option value="Animation">Animation</option>
 <option value="Biography">Biography</option>
 <option value="Comedy">Comedy</option>
 <option value="Costume">Costume</option>
 <option value="Crime">Crime</option>
 <option value="Documentary">Documentary</option>
 <option value="Drama">Drama</option>
 <option value="Family">Family</option>
 <option value="Fantasy">Fantasy</option>
 <option value="History">History</option>
 <option value="Horror">Horror</option>
 <option value="Musical">Musical</option>
 <option value="Romance">Romance</option>
 <option value="Psychological">Psychological</option>
 <option value="Thriller">Thriller</option>
 <option value="Sport">Sport</option>
 <option value="War">War</option>
</select>
<input value="Search" type="submit" style="border-radius:0px; padding: 5px 10px; background-color:#ff8d1b;color:#fff" name="submit">
</form>
</td>
<td style="width:300px !important">
<form action="countrysearch.php" method="post" onSubmit="return validateForm()" name="formsearch" id="formsearch">
<select required name="search" class="selectpicker" data-live-search="true" style="border-radius:0px !important;">

<option value="">Select Country</option>
 
 <option value="Afghanistan">Afghanistan</option>
 
 <option value="Albania">Albania</option>
 
 <option value="Algeria">Algeria</option>
 
 <option value="American Samoa">American Samoa</option>
 
 <option value="Andorra">Andorra</option>
 
 <option value="Angola">Angola</option>
 
 <option value="Anguilla">Anguilla</option>
 
 <option value="Antarctica">Antarctica</option>
 
 <option value="Antigua and Barbuda">Antigua and Barbuda</option>
 
 <option value="Argentina">Argentina</option>
 
 <option value="Armenia">Armenia</option>
 
 <option value="Aruba">Aruba</option>
 
 <option value="Australia">Australia</option>
 
 <option value="Austria">Austria</option>
 
 <option value="Azerbaijan">Azerbaijan</option>
 
 <option value="Bahamas">Bahamas</option>
 
 <option value="Bahrain">Bahrain</option>
 
 <option value="Bangladesh">Bangladesh</option>
 
 <option value="Barbados">Barbados</option>
 
 <option value="Belarus">Belarus</option>
 
 <option value="Belgium">Belgium</option>
 
 <option value="Belize">Belize</option>
 
 <option value="Benin">Benin</option>
 
 <option value="Bermuda">Bermuda</option>
 
 <option value="Bhutan">Bhutan</option>
 
 <option value="Bolivia">Bolivia</option>
 
 <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
 
 <option value="Botswana">Botswana</option>
 
 <option value="Bouvet Island">Bouvet Island</option>
 
 <option value="Brazil">Brazil</option>
 
 <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
 
 <option value="Brunei">Brunei</option>
 
 <option value="Bulgaria">Bulgaria</option>
 
 <option value="Burkina Faso">Burkina Faso</option>
 
 <option value="Burundi">Burundi</option>
 
 <option value="Cambodia">Cambodia</option>
 
 <option value="Cameroon">Cameroon</option>
 
 <option value="Canada">Canada</option>
 
 <option value="Cape Verde">Cape Verde</option>
 
 <option value="Cayman Islands">Cayman Islands</option>
 
 <option value="Central African Republic">Central African Republic</option>
 
 <option value="Chad">Chad</option>
 
 <option value="Chile">Chile</option>
 
 <option value="China">China</option>
 
 <option value="Christmas Island">Christmas Island</option>
 
 <option value="Cocos Keeling Islands">Cocos Keeling Islands</option>
 
 <option value="Colombia">Colombia</option>
 
 <option value="Comoros">Comoros</option>
 
 <option value="Congo">Congo</option>
 
 <option value="Congo The Democratic Republic of the">Congo The Democratic Republic of the</option>
 
 <option value="Cook Islands">Cook Islands</option>
 
 <option value="Costa Rica">Costa Rica</option>
 
 <option value="Cote dIvoire">Cote dIvoire</option>
 
 <option value="Croatia">Croatia</option>
 
 <option value="Cuba">Cuba</option>
 
 <option value="Cyprus">Cyprus</option>
 
 <option value="Czech Republic">Czech Republic</option>
 
 <option value="Denmark">Denmark</option>
 
 <option value="Djibouti">Djibouti</option>
 
 <option value="Dominica">Dominica</option>
 
 <option value="Dominican Republic">Dominican Republic</option>
 
 <option value="East Timor">East Timor</option>
 
 <option value="Ecuador">Ecuador</option>
 
 <option value="Egypt">Egypt</option>
 
 <option value="El Salvador">El Salvador</option>
 
 <option value="Equatorial Guinea">Equatorial Guinea</option>
 
 <option value="Eritrea">Eritrea</option>
 
 <option value="Estonia">Estonia</option>
 
 <option value="Ethiopia">Ethiopia</option>
 
 <option value="Falkland Islands">Falkland Islands</option>
 
 <option value="Faroe Islands">Faroe Islands</option>
 
 <option value="Fiji Islands">Fiji Islands</option>
 
 <option value="Finland">Finland</option>
 
 <option value="France">France</option>
 
 <option value="French Guiana">French Guiana</option>
 
 <option value="French Polynesia">French Polynesia</option>
 
 <option value="French Southern territories">French Southern territories</option>
 
 <option value="Gabon">Gabon</option>
 
 <option value="Gambia">Gambia</option>
 
 <option value="Georgia">Georgia</option>
 
 <option value="Germany">Germany</option>
 
 <option value="Ghana">Ghana</option>
 
 <option value="Gibraltar">Gibraltar</option>
 
 <option value="Greece">Greece</option>
 
 <option value="Greenland">Greenland</option>
 
 <option value="Grenada">Grenada</option>
 
 <option value="Guadeloupe">Guadeloupe</option>
 
 <option value="Guam">Guam</option>
 
 <option value="Guatemala">Guatemala</option>
 
 <option value="Guinea">Guinea</option>
 
 <option value="Guinea-Bissau">Guinea-Bissau</option>
 
 <option value="Guyana">Guyana</option>
 
 <option value="Haiti">Haiti</option>
 
 <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
 
 <option value="Holy See Vatican City State">Holy See Vatican City State</option>
 
 <option value="Honduras">Honduras</option>
 
 <option value="Hong Kong">Hong Kong</option>
 
 <option value="Hungary">Hungary</option>
 
 <option value="Iceland">Iceland</option>
 
 <option value="India">India</option>
 
 <option value="Indonesia">Indonesia</option>
 
 <option value="Iran">Iran</option>
 
 <option value="Iraq">Iraq</option>
 
 <option value="Ireland">Ireland</option>
 
 <option value="Israel">Israel</option>
 
 <option value="Italy">Italy</option>
 
 <option value="Jamaica">Jamaica</option>
 
 <option value="Japan">Japan</option>
 
 <option value="Jordan">Jordan</option>
 
 <option value="Kazakstan">Kazakstan</option>
 
 <option value="Kenya">Kenya</option>
 
 <option value="Kiribati">Kiribati</option>
 
 <option value="Kuwait">Kuwait</option>
 
 <option value="Kyrgyzstan">Kyrgyzstan</option>
 
 <option value="Laos">Laos</option>
 
 <option value="Latvia">Latvia</option>
 
 <option value="Lebanon">Lebanon</option>
 
 <option value="Lesotho">Lesotho</option>
 
 <option value="Liberia">Liberia</option>
 
 <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
 
 <option value="Liechtenstein">Liechtenstein</option>
 
 <option value="Lithuania">Lithuania</option>
 
 <option value="Luxembourg">Luxembourg</option>
 
 <option value="Macao">Macao</option>
 
 <option value="Macedonia">Macedonia</option>
 
 <option value="Madagascar">Madagascar</option>
 
 <option value="Malawi">Malawi</option>
 
 <option value="Malaysia">Malaysia</option>
 
 <option value="Maldives">Maldives</option>
 
 <option value="Mali">Mali</option>
 
 <option value="Malta">Malta</option>
 
 <option value="Marshall Islands">Marshall Islands</option>
 
 <option value="Martinique">Martinique</option>
 
 <option value="Mauritania">Mauritania</option>
 
 <option value="Mauritius">Mauritius</option>
 
 <option value="Mayotte">Mayotte</option>
 
 <option value="Mexico">Mexico</option>
 
 <option value="Micronesia Federated States of">Micronesia Federated States of</option>
 
 <option value="Moldova">Moldova</option>
 
 <option value="Monaco">Monaco</option>
 
 <option value="Mongolia">Mongolia</option>
 
 <option value="Montserrat">Montserrat</option>
 
 <option value="Morocco">Morocco</option>
 
 <option value="Mozambique">Mozambique</option>
 
 <option value="Myanmar">Myanmar</option>
 
 <option value="Namibia">Namibia</option>
 
 <option value="Nauru">Nauru</option>
 
 <option value="Nepal">Nepal</option>
 
 <option value="Netherlands">Netherlands</option>
 
 <option value="Netherlands Antilles">Netherlands Antilles</option>
 
 <option value="New Caledonia">New Caledonia</option>
 
 <option value="New Zealand">New Zealand</option>
 
 <option value="Nicaragua">Nicaragua</option>
 
 <option value="Niger">Niger</option>
 
 <option value="Nigeria">Nigeria</option>
 
 <option value="Niue">Niue</option>
 
 <option value="Norfolk Island">Norfolk Island</option>
 
 <option value="North Korea">North Korea</option>
 
 <option value="Northern Mariana Islands">Northern Mariana Islands</option>
 
 <option value="Norway">Norway</option>
 
 <option value="Oman">Oman</option>
 
 <option value="Pakistan">Pakistan</option>
 
 <option value="Palau">Palau</option>
 
 <option value="Palestine">Palestine</option>
 
 <option value="Panama">Panama</option>
 
 <option value="Papua New Guinea">Papua New Guinea</option>
 
 <option value="Paraguay">Paraguay</option>
 
 <option value="Peru">Peru</option>
 
 <option value="Philippines">Philippines</option>
 
 <option value="Pitcairn">Pitcairn</option>
 
 <option value="Poland">Poland</option>
 
 <option value="Portugal">Portugal</option>
 
 <option value="Puerto Rico">Puerto Rico</option>
 
 <option value="Qatar">Qatar</option>
 
 <option value="Reunion">Reunion</option>
 
 <option value="Romania">Romania</option>
 
 <option value="Russian Federation">Russian Federation</option>
 
 <option value="Rwanda">Rwanda</option>
 
 <option value="Saint Helena">Saint Helena</option>
 
 <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
 
 <option value="Saint Lucia">Saint Lucia</option>
 
 <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
 
 <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
 
 <option value="Samoa">Samoa</option>
 
 <option value="San Marino">San Marino</option>
 
 <option value="Sao Tome and Principe">Sao Tome and Principe</option>
 
 <option value="Saudi Arabia">Saudi Arabia</option>
 
 <option value="Senegal">Senegal</option>
 
 <option value="Seychelles">Seychelles</option>
 
 <option value="Sierra Leone">Sierra Leone</option>
 
 <option value="Singapore">Singapore</option>
 
 <option value="Slovakia">Slovakia</option>
 
 <option value="Slovenia">Slovenia</option>
 
 <option value="Solomon Islands">Solomon Islands</option>
 
 <option value="Somalia">Somalia</option>
 
 <option value="South Africa">South Africa</option>
 
 <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
 
 <option value="South Korea">South Korea</option>
 
 <option value="Spain">Spain</option>
 
 <option value="Sri Lanka">Sri Lanka</option>
 
 <option value="Sudan">Sudan</option>
 
 <option value="Suriname">Suriname</option>
 
 <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
 
 <option value="Swaziland">Swaziland</option>
 
 <option value="Sweden">Sweden</option>
 
 <option value="Switzerland">Switzerland</option>
 
 <option value="Syria">Syria</option>
 
 <option value="Taiwan">Taiwan</option>
 
 <option value="Tajikistan">Tajikistan</option>
 
 <option value="Tanzania">Tanzania</option>
 
 <option value="Thailand">Thailand</option>
 
 <option value="Togo">Togo</option>
 
 <option value="Tokelau">Tokelau</option>
 
 <option value="Tonga">Tonga</option>
 
 <option value="Trinidad and Tobago">Trinidad and Tobago</option>
 
 <option value="Tunisia">Tunisia</option>
 
 <option value="Turkey">Turkey</option>
 
 <option value="Turkmenistan">Turkmenistan</option>
 
 <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
 
 <option value="Tuvalu">Tuvalu</option>
 
 <option value="Uganda">Uganda</option>
 
 <option value="Ukraine">Ukraine</option>
 
 <option value="United Arab Emirates">United Arab Emirates</option>
 
 <option value="United Kingdom">United Kingdom</option>
 
 <option value="United States">United States</option>
 
 <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
 
 <option value="Uruguay">Uruguay</option>
 
 <option value="Uzbekistan">Uzbekistan</option>
 
 <option value="Vanuatu">Vanuatu</option>
 
 <option value="Venezuela">Venezuela</option>
 
 <option value="Vietnam">Vietnam</option>
 
 <option value="Virgin Islands British">Virgin Islands British</option>
 
 <option value="Virgin Islands US">Virgin Islands US</option>
 
 <option value="Wallis and Futuna">Wallis and Futuna</option>
 
 <option value="Western Sahara">Western Sahara</option>
 
 <option value="Yemen">Yemen</option>
 
 <option value="Yugoslavia">Yugoslavia</option>
 
 <option value="Zambia">Zambia</option>
 
 <option value="Zimbabwe">Zimbabwe</option>
</select>
<input value="Search" type="submit" style="border-radius:0px; padding: 5px 10px; background-color:#ff8d1b;color:#fff" name="submit">
</form>
</td>
<td style="width:300px !important">
<form action="AZsearch.php" method="post" onSubmit="return validateForm()" name="formsearch" id="formsearch">

<select required name="search" class="selectpicker" data-live-search="true" style="border-radius:0px !important;">
<option value="">Search By A-Z</option>
 <option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">E</option>
<option value="F">F</option>
<option value="G">G</option>
<option value="H">H</option>
<option value="I">I</option>
<option value="J">J</option>
<option value="K">K</option>
<option value="L">L</option>
<option value="M">M</option>
<option value="N">N</option>
<option value="O">O</option>
<option value="P">P</option>
<option value="Q">Q</option>
<option value="R">R</option>
<option value="S">S</option>
<option value="T">T</option>
<option value="U">U</option>
<option value="V">V</option>
<option value="W">W</option>
<option value="X">X</option>
<option value="Y">Y</option>
<option value="Z">Z</option>
</select>
<input value="Search" type="submit" style="border-radius:0px; padding: 5px 10px; background-color:#ff8d1b;color:#fff" name="submit">
</form>
</td>
<td >
<form action="yearsearch.php" method="post" onSubmit="return validateForm()" name="formsearch" id="formsearch">

<select required name="search" class="selectpicker" data-live-search="true" style="border-radius:0px !important;">
<option value="">Search By Year</option>
<?php for($i=1990;$i<=date("Y");$i++){?>
<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php } ?>
</select>
<input value="Search" type="submit" style="border-radius:0px; padding: 5px 10px; background-color:#ff8d1b;color:#fff" name="submit">
</form>
</td>

</tr>
</table>

<div class="general">

<br>
		<h4 class="latest-text w3_latest_text">Featured Movies</h4>
		<div class="container">
			<div class="w3_agile_featured_movies">
				<?php
					                $sel=mysqli_query($con,"select * from movies where name like '".$_REQUEST['search']."%'") or die(mysqli_error($con));
									if(mysqli_num_rows($sel) == 0){
                                    ?>

								<br>
									<div align="center"><strong style="font-size:30px;">No Movie Found</strong></div>
							<br><br>

                                    <?php
									}else{
									$a=0;
		                            while($r=mysqli_fetch_array($sel,MYSQLI_ASSOC)){
		                            $a++;
		                            ?>
							<div class="col-md-2 w3l-movie-gride-agile">

								<a style="width:100% !important; height: 200px !important;" href="#" data-id="<?php echo $r['id'];?>" class="hvr-shutter-out-horizontal open-AddBookDialog" data-toggle="modal" data-target="#myModal"><img style="height: 235px !important;" src="admin/<?php echo $r['image'];?>" title="<?php echo $r['name'];?>" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<br><br>
									<div class="w3l-movie-text" align="center">
									
									<h6><a href="details.php?id=<?php echo $r['id'];?>"><?php echo $r['name'].' ('.$r['year'].')';?></a></h6>							
								</div>
									<div class="mid-2 agile_mid_2_home">
										
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div>
									<a href="booking.php?id=<?php echo $r['id'];?>" style="margin-left:-5px;background:#ff8d1b;padding:5px 10px;color:#fff">Book Now</a>
                                      </div>
                                      <div align="left" style="margin-left:0px;margin-top:20px;">
									<a href="details.php?id=<?php echo $r['id'];?>" style="background:#337ab7;padding:5px 20px;color:#fff">Details</a>
									</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<!-- <div class="ribben">
									<p>NEW</p>
								</div> -->
							</div>

							<?php }} ?>
							
						<div class="clearfix"> </div>
					</div>
				</div>
				</div>


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