<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<style type="text/css">

   #imagePreview {
    width: 180px;
    height: 180px;
    background-position: center center;
    background-size: cover;
    background-image:url("<?php echo 'images/default_photo.png' ?>");
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}

   .right-inner-addon {
    position: relative;
   }
   .right-inner-addon input {
    padding-right: 20px;    
   }
   .right-inner-addon i {
    position: absolute;
    right: 0px;
    padding: 10px 12px;
    pointer-events: none;
   }
   .rating{
   	color: yellow !important;
   }
   </style>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<script src="js/price_format.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->

<script src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#image").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});
</script>

    <link href="css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

    
    <script src="js/star-rating.min.js" type="text/javascript"></script>

<style type="text/css">
.glyphicon {
    font-size: 30px !important;
    color: orange !important;
    border: #000 !important;
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
<div class="inner-block">
    <div class="product-block">
    	<div class="col-md-offset-1 pro-head">
    		<h2>Add Movie</h2>
    	</div>

      <div class="col-md-10 col-md-offset-1 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Add Movie
						</div>
						<div class="inbox-details-body">

                           <?php
			 include'db.php';
			 
            
			 if(isset($_REQUEST['submit'])){
			 $a = str_replace( ',', '', $_REQUEST['price'] );
			 $sel=mysqli_query($con,"select * from movies where name='".$_REQUEST['name']."'");
			 if(mysqli_num_rows($sel)>0){
			 echo "<img src='images/1433077051_cancel.png' width='24' height='24'/><span style='color:red'>That movie already exists!</span>";
			 }else{
			 if((is_uploaded_file($_FILES['image']['tmp_name'])) == null){
             
                                move_uploaded_file($_FILES["preview"]["tmp_name"], "previews/" . $_FILES["preview"]["name"]);
                                $location = "previews/" . $_FILES["preview"]["name"];
             
			 $sql = mysqli_query($con,"insert into movies(name,genre,price,description,preview,age,year,rating,country)values('".$_REQUEST['name']."', '".$_REQUEST['genre']."', '".$a."', '".$_REQUEST['description']."','".$location."', '".$_REQUEST['age']."', '".$_REQUEST['year']."', '".$_REQUEST['rating']."', '".$_REQUEST['country']."')") or die(mysqli_error($con));
			 if( $sql){
			 echo "<img src='images/1433075297_ok-green.png'/><span style='color:green'>Successfully inserted movie! Add another...</span>";
			 }else{
			 echo "<img src='images/1433077051_cancel.png' width='24' height='24'/><span style='color:red'>An error occurred in insertion!</span>";
			 }
			 }else if((is_uploaded_file($_FILES['preview']['tmp_name'])) == null){
	        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
                                $location = "images/" . $_FILES["image"]["name"];
			 $sql = mysqli_query($con,"insert into movies(name,genre,price,description,image,age,year,rating,country)values('".$_REQUEST['name']."', '".$_REQUEST['genre']."', '".$a."', '".$_REQUEST['description']."','".$location."', '".$_REQUEST['age']."', '".$_REQUEST['year']."', '".$_REQUEST['rating']."', '".$_REQUEST['country']."')") or die(mysqli_error($con));
			 if( $sql){
			 echo "<img src='images/1433075297_ok-green.png'/><span style='color:green'>Successfully inserted movie! Add another...</span>";
			 }else{
			 echo "<img src='images/1433077051_cancel.png' width='24' height='24'/><span style='color:red'>An error occurred in insertion!</span>";
			 }
			 }else if((is_uploaded_file($_FILES['preview']['tmp_name'])) == null && (is_uploaded_file($_FILES['preview']['tmp_name'])) == null){
	        
			 $sql = mysqli_query($con,"insert into movies(name,genre,price,description,age,year,rating,country)values('".$_REQUEST['name']."', '".$_REQUEST['genre']."', '".$a."', '".$_REQUEST['description']."', '".$_REQUEST['age']."', '".$_REQUEST['year']."', '".$_REQUEST['rating']."', '".$_REQUEST['country']."')") or die(mysqli_error($con));
			 if( $sql){
			 echo "<img src='images/1433075297_ok-green.png'/><span style='color:green'>Successfully inserted movie! Add another...</span>";
			 }else{
			 echo "<img src='images/1433077051_cancel.png' width='24' height='24'/><span style='color:red'>An error occurred in insertion!</span>";
			 }
			 }else if((is_uploaded_file($_FILES['preview']['tmp_name'])) != null && (is_uploaded_file($_FILES['image']['tmp_name'])) != null){
	         $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
                                $location = "images/" . $_FILES["image"]["name"];

                                $preview = addslashes(file_get_contents($_FILES['preview']['tmp_name']));
                                $preview_name = addslashes($_FILES['preview']['name']);
                                $preview_size = getimagesize($_FILES['preview']['tmp_name']);

                                move_uploaded_file($_FILES["preview"]["tmp_name"], "previews/" . $_FILES["preview"]["name"]);
                                $preview_location = "previews/" . $_FILES["preview"]["name"];
			 $sql = mysqli_query($con,"insert into movies(name,genre,price,description,image,preview,age,year,rating,country)values('".$_REQUEST['name']."', '".$_REQUEST['genre']."', '".$a."', '".$_REQUEST['description']."','".$location."','".$preview_location."', '".$_REQUEST['age']."', '".$_REQUEST['year']."', '".$_REQUEST['rating']."', '".$_REQUEST['country']."')") or die(mysqli_error($con));
			 if( $sql){
			 echo "<img src='images/1433075297_ok-green.png'/><span style='color:green'>Successfully inserted movie! Add another...</span>";
			 }else{
			 echo "<img src='images/1433077051_cancel.png' width='24' height='24'/><span style='color:red'>An error occurred in insertion!</span>";
			 }
			 }
			 }
			 }
			 ?>

							<div class="alert alert-info">
								Please fill details in *
							</div>
							<form onSubmit="return validateForm()" class="com-mail" name="movie" id="movie" method="post" enctype="multipart/form-data">
								<label>Name <span style="color:red">*</span>:</label>
								<input type="text" name="name" placeholder="name" >
								<label>Genre <span style="color:red">*</span>:</label>
								<select style="margin-bottom:15px;border-radius:0px !important; height:40px !important" class="form-control" name="genre" id="genre">
<option value="">Select Genre</option>
 
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
<label>Country <span style="color:red">*</span>:</label>
		<select style="margin-bottom:15px;border-radius:0px !important; height:40px !important" class="form-control" name="country" id="country">
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
								<label>Age <span style="color:red">*</span>:</label>
								<select style="margin-bottom:15px;border-radius:0px !important; height:40px !important" class="form-control" name="age" id="age">
<option value="">Select Age Gap</option>
<option value="1-10">Between 1 to 10 years old</option>
<option value="10-14">Between 10 to 14 years old</option>
<option value="14-18">Between 14 to 18 years old</option>
<option value="18-above">18 years and above</option>
</select>
<label>Year <span style="color:red">*</span>:</label>
								<input type="text" name="year" placeholder="Year">
								<label>Rating:</label>
								<input type="number" name="rating" class="rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5">
								<label>Price <span style="color:red">*</span>:</label>
								<div class="input-group">
                                <span class="input-group-addon" style="padding:0px 12px !important; height:0px !important">KES</span>
								<input type="text" name="price" id="price" placeholder="Price">
						    	</div>
						    	<script type="text/javascript">
                                $(document).ready(function() {
                                $('#price').priceFormat();
                                });
                                </script>
                                
						    	<label style="margin-top:20px;">Description:</label>
								<textarea placeholder="Description" rows="6" name="description"></textarea>
								<div class="form-group">
									<div class="btn btn-default btn-file">
										<i class="fa fa-paperclip"> </i> Image
										<input onchange="return imagevalidate();" type="file" name="image" id="image">
									    
									</div>
									<div id="fname"></div>
									<script type="text/javascript">
									    $(function(){
									    
                                        $('input[name="image"]').change(function(){
                                        if(imagevalidate() != false){
                                        var fileName = $(this).val().replace(/C:\\fakepath\\/i, '');
                                        $('#fname').html(fileName);
                                        }
                                        });
                                        $('input[name="preview"]').change(function(){
                                        if(validate() != false){
                                        var fileName = $(this).val().replace(/C:\\fakepath\\/i, '');
                                        $('#pname').html(fileName);
                                         }
                                        });
                                    });
									</script>

									<script>
                                    function validate(){
                                    var size=8388608;
                                    var file_size=document.getElementById('preview').files[0].size;
                                    
                                    var type='video/mp4';
                                    var file_type=document.getElementById('preview').files[0].type;
                                    if(file_type!=type){
                                    alert('Format not supported,Only .mp4 videos are accepted');
                                    return false;
                                    }
                                    if(file_size>=size){
                                    alert('File too large');
                                    return false;
                                    }
                                    }

                                    function imagevalidate(){
                                    var size=8388608;
                                    var file_size=document.getElementById('image').files[0].size;
                                   
                                    var file_type=document.getElementById('image').files[0].type;
                                    if('image/jpeg'!=file_type && 'image/jpg'!=file_type && 'image/png'!=file_type){
                                    alert('Format not supported,Only .jpeg, .jpg, .png videos are accepted');
                                    return false;
                                    }
                                    if(file_size>=size){
                                    alert('File too large');
                                    return false;
                                    }
                                    }
                                    </script>
								</div>
								<div id="imagePreview"></div>
								<div class="form-group">
									<div class="btn btn-default btn-file">
										<i class="fa fa-paperclip"> </i> Preview
										<input onchange="return validate();" type="file" name="preview" id="preview">
									</div>
									<div id="pname"></div>
								</div>
								<div>
								<video width="300" height="200" controls>
	                            <source src="D:\xampp\htdocs\onlinecinemabooking\admin\previews\Chaos Trailer.mp4">
	                            </video>
	                            </div> 
	                            <div class="form-group">
								<input type="submit" value="Add" name="submit"> 
							</div>
							</form>
						</div>
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
<script src="js/validate.min.js" type="text/javascript"></script>
   
		
<script type="text/javascript">
function validateForm()
{

var n=document.forms["movie"]["name"].value;
var c=document.forms["movie"]["genre"].value;
var e=document.forms["movie"]["country"].value;
var l=document.forms["movie"]["age"].value;
var y=document.forms["movie"]["year"].value;
var p=document.forms["movie"]["price"].value;
var r=document.forms["movie"]["rating"].value;
/*var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var phoneno = /^\+?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/;
var mobileno = /^\d{10}$/;*/

if ((n==null || n==""))
  {
  alert("Please insert movie name");
  return false;
  }
  if ((c==null || c==0))
  {
  alert("Please insert genre");
  return false;
  }
  
  if ((e==null || e==""))
  {
  alert("Please insert country");
  return false;
  }
  if ((l==null || l==0))
  {
  alert("Please insert age");
  return false;
  }
  if ((y==null || y==""))
  {
  alert("Please insert year");
  return false;
  }
  if(!y.match(/^[0-9]+$/))
  {
  
  alert("Please insert a valid year");
  return false;
  }
  
  
  if ((p==null || p==""))
  {
  alert("Please insert price");
  return false;
  }
}
</script>

<!-- mother grid end here-->
</body>
</html>


                      
						
