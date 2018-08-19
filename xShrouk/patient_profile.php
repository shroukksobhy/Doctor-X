<html>
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- for internet explorer -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- for mobile responsive-->

		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="footer-DoctorX-second-page.css"/>
		<link rel="stylesheet" type="text/css" href="header.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Doctor-X HomePage</title>
	
	</head>
	<body>
<!------------------------------- nav bar--------------------------------------->
<div class="header">
	<?php
	session_start();
	if (isset($_SESSION['doctor']) || isset($_SESSION['patient']) ) {
		include 'header.php';
	} else {
		require'headerBeforeLogin.php';
	}
	?>
</div>
<!--------------------------- end of nav bar --------------------------->
<!--------------------------- start of steaky header --------------------------->
			<div id="steaky">
				<div class="row">
					<div class="col-xs-4 col-sm-2 ">
						  <a class="active" href="#">OurServices</a>
					</div>
					<div class="col-xs-4 col-sm-2 ">
			  			<a href="#">Partners</a>
						  
					</div>
					<div class="col-xs-4 col-sm-2 ">
			  			<a href="#">Statistics</a>
					</div>
					<div class="col-xs-4 col-sm-2 ">
			  			<a href="#">About Team</a>
					</div>
					<div class="col-xs-4 col-sm-2 ">
			  			<a href="#">Contact Us</a>
					</div>
					<div class="col-xs-4 col-sm-2 ">
			  			<a href="#">FeedBack</a>
					</div>				
				</div>


			</div>
<!--------------------------- end of steaky header --------------------------->
		<!--------------------content----------------------------------->

		<?php if (isset($_SESSION['doctor']) || isset($_SESSION['patient']) ) { ?>
		<div class="Container-fluid content">
			<div class="row">
				<div class="col-sm-3 col-xs-4">
					 <ul class="nav nav-pills nav-stacked">
						 <li><img src="uploads/doctors/doctor-x.jpg" class="img-responsive" alt="unknown"></li>
						<li class="active"><a data-toggle="pill" href="#Schedule">Schedule</a></li>
						<li><a data-toggle="pill" href="#MH1">Medical History</a></li>
						 <li><a data-toggle="pill" href="#RM2">Recieved mail</a></li>
						 <li><a data-toggle="pill" href="#SM3">Sent mails</a></li>
						<li><a data-toggle="pill" href="#PD4">Personal Data</a></li>
						<li><a data-toggle="pill" href="#LI5">Login info</a>

					  </ul>
				</div>
				<div class="col-sm-9 col-xs-8">
					<div class="tab-content cont">
						<div id="Schedule" class="tab-pane fade in active">
						  <h3>Schedule</h3>
						  <p>This is schedule page</p>
						</div>
						<div id="MH1" class="tab-pane fade">
							<div class="row ALL">
								<div class="row medicalHistory">
								<div class="col-sm-6 col-xs-12">
									<div class="col-xs-12 table1">
									<table class="table">
									<tbody>
									  <tr>
										<td>Name:</td>
										<td>Dalia</td>
									  </tr>
									  <tr>
										<td>Email:</td>
										<td>moo@gmail.com</td>
									  </tr>
									</tbody>
								  </table>
								</div>

								</div>
									<div class="col-sm-6 col-xs-12">
										<div class="row showlinks">
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>

										</div>


									</div>
							</div>
							<div class="row">
								<div class="col-xs-6 buttonForMH">
									<button type="button" class="btn btn-primary btn-xs">Show profile</button>
									<button type="button" class="btn btn-primary btn-xs">Send Msg</button>
								
								
								</div>
								
							
							</div>
						</div>
						<div class="row ALL">
								<div class="row medicalHistory">
								<div class="col-sm-6 col-xs-12">
									<div class="col-xs-12 table1">
									<table class="table">
									<tbody>
									  <tr>
										<td>Name:</td>
										<td>Dalia</td>
									  </tr>
									  <tr>
										<td>Email:</td>
										<td>moo@gmail.com</td>
									  </tr>
									</tbody>
								  </table>
								</div>

								</div>
									<div class="col-sm-6 col-xs-12">
										<div class="row showlinks">
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>
											<div class="col-xs-12 links">
												<a href="#">link.pdf</a>

											</div>

										</div>


									</div>
							</div>
							<div class="row">
								<div class="col-xs-6 buttonForMH">
									<button type="button" class="btn btn-primary btn-xs">Show profile</button>
									<button type="button" class="btn btn-primary btn-xs">Send Msg</button>
								
								
								</div>
								
							
							</div>
						</div>	
							
						</div>
						    
						<div id="RM2" class="tab-pane fade">
						 	<div class="row recievedMail">
								<div class="col-xs-12 table1">
									<table class="table ">
									<tbody>
									  <tr>
										<td>To:</td>
										<td>Dalia</td>
									  </tr>
									  <tr>
										<td>About:</td>
										<td>Solution for your problem</td>
									  </tr>
									  
									</tbody>
								  </table>
								
								</div>
								  
								<div class="row cont2">
									<div class="col-xs-12 contentofmsg ">
										<p>bla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla bla</p>
									
									</div>
							
							
								</div>
							</div>
						</div>
						<div id="SM3" class="tab-pane fade">
							<div class="row recievedMail">
								<div class="col-xs-12 table1">
									<table class="table ">
									<tbody>
									  <tr>
										<td>From:</td>
										<td>Dalia</td>
									  </tr>
									  <tr>
										<td>About:</td>
										<td>I have a problem</td>
									  </tr>
									  
									</tbody>
								  </table>
								
								</div>
								  
								<div class="row cont2">
									<div class="col-xs-12 contentofmsg ">
										<p>bla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla blablabla blabla bla</p>
									
									</div>
							
							
								</div>
							</div>
						</div>
						<div id="PD4" class="tab-pane fade">
							<div class="row PData">
								  <table class="table table-hover">
									<thead>
									  <tr>
										<th>Personal Data</th>	
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td class="col-xs-1">Name:</td>
										<td class="col-xs-1 info2">bla bla bla bla</td>
										<td class="col-xs-1">
											<button type="button" class="btn btn-primary">Edit</button>
										</td>
									  </tr>
									  <tr>
										<td>Specialization:</td>
										<td class="info2">none</td>
										<td>
											<button type="button" class="btn btn-primary btn-xs">Edit</button>
										</td>
									  </tr>
									  
										<tr>
										<td>Collage:</td>
										<td class="info2">Doctor</td>
										<td>
											<button type="button" class="btn btn-primary btn-xs">Edit</button>
										</td>
									  </tr>
										<tr>
										<td>Degree:</td>
										<td class="info2">Good</td>
										<td>
											<button type="button" class="btn btn-primary btn-xs">Edit</button>
										</td>
									  </tr>
										<tr>
										<td>Grade:</td>
										<td class="info2">Good</td>
										<td>
											<button type="button" class="btn btn-primary btn-xs">Edit</button>
										</td>
									  </tr>
										<tr>
										<td>More:</td>
										<td class="info2">Good</td>
										<td>
											<button type="button" class="btn btn-primary btn-xs">Edit</button>
										</td>
									  </tr>
										
									</tbody>
								  </table>
							</div>
						</div>
						<div id="LI5" class="tab-pane fade">
						  <div class="row PData">
								  <table class="table table-hover">
									<thead>
									  <tr>
										<th>Login info</th>	
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td class="col-xs-1">Email:</td>
										<td class="col-xs-1 info2">bla bla bla bla</td>
										<td class="col-xs-1">
											<button type="button" class="btn btn-primary btn-xs">Edit</button>
										</td>
									  </tr>
									  <tr>
										<td>PassWord:</td>
										<td class="info2">none</td>
										<td>
											<button type="button" class="btn btn-primary btn-xs">Edit</button>
										</td>
									  </tr>
									  
										<tr>
										<td>Phone:</td>
										<td class="info2">Doctor</td>
										<td>
											<button type="button" class="btn btn-primary btn-xs">Edit</button>
										</td>
									  </tr>
										<tr>
										<td>Activation:</td>
										<td class="info2">NOT Activated</td>
										<td>
											<button type="button" class="btn btn-primary btn-xs">verify</button>
											<button type="button" class="btn btn-primary btn-xs">send</button>
										</td>
									  </tr>
									<tr>
										<td>Profile Pic</td>
										<td class="info2"> </td>
										<td>
											<button type="button" class="btn btn-primary btn-xs">update PP</button>
											<button type="button" class="btn btn-primary btn-xs">Delete</button>
											<button type="button" class="btn btn-primary btn-xs">send</button>
										</td>
									  </tr>
									</tbody>
								  </table>
							</div>
						
					  </div>
				</div>
			</div>
		</div>
	</div>
<?php }  else {
	echo "<div class='alert alert-danger'>You Cannot Be here</div>";
	echo "<a href='home.php' class='btn btn-primary'>Go Home</a>";
	}?>
		<!--------------------------- footer------------------------------------>
		<div class="Container-fluid footer">
			<div class="row-eq-height">
				<div class="col-sm-4 col-xs-6 left up">
					<p class="text">Doctor-X:</p>
					<div class="row-eq-height link">
						<div class="col-xs-12">
							<a href="#">About us</a>

						</div>

					</div>
					<div class="row-eq-height  link">
						<div class="col-xs-12">
							<a href="#">Partners</a>

						</div>

					</div>
					<div class="row-eq-height link">
						<div class="col-xs-12">
							<a href="#">Terms</a>

						</div>

					</div>
					<div class="row-eq-height link">
						<div class="col-xs-12">
							<a href="#">Contact us</a>

						</div>

					</div>


				</div>
				<div class="span6"></div>
				<div class="span6"></div>
				<div class="col-sm-8 col-xs-12 right ">
					<p class="text">Specialities</p>
					<div class="row-eq-height">
						<div class="col-sm-4 col-xs-6">
							<a href="#">Dentist</a>

						</div>

					</div>
					<div class="row-eq-height">
						<div class="col-sm-4 col-xs-6">
							<a href="#">Sergary</a>

						</div>

					</div>
					<div class="row-eq-height">
						<div class="col-sm-4 col-xs-6">
							<a href="#">Dermatologist</a>

						</div>

					</div>
					<div class="row-eq-height">
						<div class="col-sm-4 col-xs-6">
							<a href="#">Pediatrician</a>

						</div>

					</div>
					<div class="row-eq-height">
						<div class="col-sm-4 col-xs-6">
							<a href="#">Neurologist</a>

						</div>

					</div>
					<div class="row-eq-height">
						<div class="col-sm-4 col-xs-6">
							<a href="#">Orthopedist</a>

						</div>

					</div>
					<div class="row-eq-height">
						<div class="col-sm-4 col-xs-6">
							<a href="#">Gynecologist</a>

						</div>

					</div>
					<div class="row-eq-height">
						<div class="col-sm-4 col-xs-6">
							<a href="#">ENT Doctor</a>

						</div>

					</div>
					<div class="row-eq-height">
						<div class="col-sm-4 col-xs-6">
							<a href="#">Cardiologist</a>

						</div>

					</div>
					<div class="row-eq-height">
						<div class="col-sm-4 col-xs-6">
							<a href="#">Internist</a>

						</div>

					</div>
					<div class="row-eq-height">
						<div class="col-sm-4 col-xs-6">
							<a href="#">Ophthalmologist</a>

						</div>

					</div>
					<div class="row-eq-height">
						<div class="col-sm-4 col-xs-6">
							<a href="#">Urologist</a>

						</div>

					</div>


				</div>
			</div>
			<div class="row-eq-height">
				<div class="col-sm-4 col-xs-12 left down">
					<p class="text">Contact us on:</p>
					<div class="row-eq-height">
						<div class="col-xs-6 mail">
							<a href="#">DoctorX@gmail.com</a>
						</div>
					</div>
				</div>
				<div class="col-sm-8 col-xs-12 down">
					<p class="text">Follow us on:</p>
					<div class="row-eq-height">
						<div class="col-xs-1 col-sm-1 icon">
							<i class="fa fa-facebook-square" style="font-size:36px;color:blue"></i>
						</div>
						<div class="col-xs-1 col-sm-1 icon">
							<i class="fa fa-twitter-square" style="font-size:36px;color:red"></i>
						</div>
						<div class="col-xs-1 col-sm-1 icon">
							<i class="fa fa-google-plus-square" style="font-size:36px;color:red"></i>
						</div>		
					</div>	
				</div>	
			</div>

		</div>
		<div class="row-eq-height copy">
			<div class="col-xs-12 copy2">
				<p class="copyright text">copyrights go to Doctor-X.com</p>

			</div>

		</div>
<!------------------------------end of footer -------------------------->
		<script>
			window.onscroll = function() {myFunction()};

			var navbar = document.getElementById("steaky");
			var sticky = navbar.offsetTop;

			function myFunction() {
			  if (window.pageYOffset >= sticky) {
				navbar.classList.add("sticky")
			  } else {
				navbar.classList.remove("sticky");
			  }
			}
		</script>
		

		<script src="js/jquery-3.3.1.js" ></script>
		<script src="js/bootstrap.min.js"> </script>
		

	
	
	
	</body>
<script type="text/javascript">
		$(document).ready(function(){
			$("#go").focus(function(){
				$("#find #go").css({"width":"70%","z-index":"3"});
				$("#navbar_right").css("display","none");
			});

			$("#go").focusout(function(){
				$("#find #go").css({"width":"100px","z-index":"1"});
				$("#navbar_right").css("display","block");
			})
		});
		</script>	
	
</html>