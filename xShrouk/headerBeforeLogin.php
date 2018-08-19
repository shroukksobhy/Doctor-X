
<!------------------------------- nav bar--------------------------------------->

			<nav class="navbar">
			  <div class="container-fluid">
				<div class="navbar-header">
			<!----------------- button for mobile ---------------------------->
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					
				  </button>
				  <a class="navbar-brand" href="#" style="font-size: 25px"><em>Doctor-<span class="X">X</em></span></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
				  <ul class="nav navbar-nav navbar-right" id="navbar_right">
					  <li><a href="home.php">Home</a></li>
					 
					  <li id="signup">   <a class="nav-link dropdown-toggle btn btn-danger" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sign up</a>
    <div class="dropdown-menu" id="signup_drop">
      <a class="dropdown-item" href="signupDoctor.php">Sign up as Doctor</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="signupPatient.php">Sign up as Patient</a>
  </li>
					 <li><a href="sign_in.php" class="btn btn-primary">Login</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

<!--------------------------- end of nav bar --------------------------->
<!--------------------------- start of steaky header --------------------------->
			
<!--------------------------- end of steaky header --------------------------->
		<!--------------------content----------------------------------->
		<div class="Content">
			<div class="row">
				<div>
				
				</div>
			
			</div>
		
		</div>
		
	

		<script src="js/jquery-3.3.1.js" ></script>
		<script src="js/bootstrap.min.js"> </script>
		

	
	
	

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
	
