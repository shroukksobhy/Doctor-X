<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login as Doctor</title>  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery-3.3.1.js" ></script> 
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="header">
	<?php
	if (isset($_SESSION['doctor']) || isset($_SESSION['patient']) ) {
		include 'header.php';
	} else {
		require'headerBeforeLogin.php';
	}
	?>
</div>
<div class="container">
<form class="loginForm" method="post" action=" ">

 <div class="form-group row">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="email@example.com">
 </div>
 <div class="form-group row">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" placeholder="you password">
 </div>


<input class="btn btn-info center-block btn-lg" type="submit" name="submit" value="Login">

</form>
</div>

<?php //include 'footer.php'; ?>
</body>
</html>

<?php 
		

	if (isset($_POST['email'])) {
		include 'connect.php';

		$email = $_POST['email'];
		$pass  = $_POST['password'];

		$stmt = $con -> prepare("SELECT * FROM users WHERE email = ? AND password = ?");
		$stmt -> execute(array( $email , $pass));
		$count = $stmt ->rowCount();
		$rows = $stmt -> fetchAll();
		if ($count > 0) {
			foreach ($rows as $row) {
				if ($row['type'] == 1 ) {
					$_SESSION['patient'] = $email;
					header('location:patient_profile.php');
				}elseif ($row['type'] == 0){
					$_SESSION['doctor'] = $email;
					header('location:patient_profile.php');
				}
			}
		} else {
			echo "Wrong Information";
		}
		
	} else{

	}





 ?>

