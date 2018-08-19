
<!------------------------------- nav bar--------------------------------------->

			<nav class="navbar navbar-inverse ">
			  <div class="container-fluid">
				<div class="navbar-header">
			<!----------------- button for mobile ---------------------------->
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					
				  </button>
				  <a class="navbar-brand" href="#">Doctor-<span class="X">X</span></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<form class="navbar-form navbar-left" id="find" width="100px">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search"  >
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
	
