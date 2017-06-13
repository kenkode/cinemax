<script type="text/javascript">
   $(document).ready(function() {
    $('#users').dataTable();			
  });
   </script>



<?php include'db.php';

	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['ID']) || (trim($_SESSION['manager']) == '')) {
		header("location: login.php");
		exit();
	}
?>

<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.php"> <h1 style="color:#35b1d6">Admin</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<!-- <div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div> --><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/1477421674_user_male2.png" alt=""> </span> 
												<div class="user-name">
													<p style="color:#35b1d6"><?php echo $_SESSION['manager'];?></p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu"> 
											<li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>