<html>
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- for internet explorer -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- for mobile responsive-->

		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="opinion-Doctor.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Doctor-X HomePage</title>
	
	</head>
	<body>
<!------------------------------- nav bar--------------------------------------->

			<nav class="navbar navbar-inverse ">
			  <div class="container-fluid">
				<div class="navbar-header">
			<!----------------- button for mobile ---------------------------->
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> <!--- 3 shartat --->
				  </button>
				  <a class="navbar-brand" href="#">Doctor-<span class="X">X</span></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<form class="navbar-form navbar-left" id="find" width="100px">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search" id="go" >
						<button type="submit" class="btn btn-default">Search</button>

						</div>
					</form>	

				  <ul class="nav navbar-nav navbar-right" id="navbar_right">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Profile</a></li>
					  <li><a href="#">Book </a></li>
					 <li><a href="#">LogOut</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

<!--------------------------- end of nav bar --------------------------->
<!--------------------------- start of steaky header --------------------------->
			<div id="steaky">
				<div class="row">
					<div class="col-xs-4 col-sm-2 ">
						  <a class="active" href="javascript:void(0)">OurServices</a>
					</div>
					<div class="col-xs-4 col-sm-2 ">
			  			<a href="javascript:void(0)">Partners</a>
						  
					</div>
					<div class="col-xs-4 col-sm-2 ">
			  			<a href="javascript:void(0)">Statistics</a>
					</div>
					<div class="col-xs-4 col-sm-2 ">
			  			<a href="javascript:void(0)">About Team</a>
					</div>
					<div class="col-xs-4 col-sm-2 ">
			  			<a href="javascript:void(0)">Contact Us</a>
					</div>
					<div class="col-xs-4 col-sm-2 ">
			  			<a href="javascript:void(0)">FeedBack</a>
					</div>				
				</div>


			</div>
<!--------------------------- end of steaky header --------------------------->
		<!--------------------content----------------------------------->
		<div class="Container-fluid content">
			<div class="row">
				<div class="col-sm-11 col-xs-12">
					<form class="form-horizontal" action="/action_page.php">
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Neme:</label>
							<div class="col-sm-10">
							  <input type="email" class="form-control" id="email" placeholder="Enter Doctor Name">
							</div>
						</div>
  						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Email:</label>
							<div class="col-sm-10">
							  <input type="email" class="form-control" id="email" placeholder="Enter Your Email ">
							</div>
						</div>
  						<div class="form-group">
							<label class="control-label col-sm-2" for="pwd">Subject:</label>
							<div class="col-sm-10"> 
							  <input type="password" class="form-control" id="pwd" placeholder="Write the Subject of your msg">
							</div>
						</div>
  						<div class="form-group"> 
							<label class="control-label col-sm-2" for="pwd">Message:</label>
							<div class="col-sm-10"> 
								<textarea class="form-control noresize" rows="5" id="comment" placeholder="Write your msg"></textarea>
							</div>
						</div>
  						<div class="form-group"> 
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-default">Send</button>
							</div>
						</div>
					</form>

				</div>

			</div>
		</div>
		
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