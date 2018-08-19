<?php
 session_start();
?>
  


<!DOCTYPE html>
<html>
<head>
	<title>Doctor-X</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="css.css">

		
</head>
<body>
<div class="header">
	<?php
	require 'headerBeforeLogin.php';
	?>
</div>

<a href="SHOW.php">SHOW</a>
<div class="container firstPage">


<div class="row firstPage">
	
  <div class="col-sm-6">
  	<p>New in Doctor-X ?</p>
    <a class="nav-link dropdown-toggle btn btn-danger" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sign up</a>
    <div class="dropdown-menu col-sm-12">
      <a class="dropdown-item asDoctor" href="signupDoctor.php">Sign up as Doctor</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item asPatient" href="signupPatient.php">Sign up as Patient</a>
    </div>
  </div>

 	
 <div class="col-sm-6">
 	<p> if you have account</p>
  <a href="sign_in.php" class="btn btn-primary">Login</a>	
 </div>

 </div>

</div>
<div class="firstPageImg">
  
</div>

<!---<a href="opinion.php">Opinion</a> -->


<!--
<div class="space"></div>
** -->  



<div class="footer">
	<?php
	require 'footer.php';
	?>
</div>
</body>
</html>
