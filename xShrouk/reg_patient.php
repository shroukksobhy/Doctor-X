<!DOCTYPE html>
<html>
<head>
	<title>sign up as Patient</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

<div class="container">
<?php include 'connect.php'; ?>

<?php 

	if (isset($_POST['submit'])) {
		
		$formErrors = array();

		$patient_name = $_POST['name'];
		$national    = $_POST['national'];
		$email 		 = $_POST['email'];
		$password = '';
		$password1 = $_POST['password'];
		$repass = $_POST['re_password'];
		if ($password1 === $repass) {
			$password = $password1;
		} else{
			$formErrors [] = "Password Not Match";
		}
		$birth = $_POST['birth'];
		$phone = $_POST['phone'];

		$errors= array();
	    $file_name = $_FILES['image']['name'];
	    $file_size =$_FILES['image']['size'];
	    $file_tmp =$_FILES['image']['tmp_name'];
	    $file_type=$_FILES['image']['type'];

	    $expensions= array("jpeg","jpg","png","gif");
	      
	    if(empty($errors)==true){
	        move_uploaded_file($file_tmp,"uploads/patients/".$file_name);
	    }else{
	        print_r($errors);
	    }






			if (empty($patient_name)) {
				$formErrors [] = 'اName Cannot Be <strong>Empty</strong>';
			}

			if (strlen($patient_name) < 4) {
				$formErrors [] = 'اName Cannot Be Less Than <strong>4 characters</strong>';
			}

			if (empty($national)) {
				$formErrors [] = 'National Cannot Be <strong>Empty</strong>';
			}

			if (strlen($national) != 14) {
				$formErrors [] = 'National Id Must be 14 digits';
			}

			if (empty($email)) {
				$formErrors [] = 'Email Cannot Be <strong>Empty</strong>';
			}

			if (empty($password)) {
				$formErrors [] = 'Password Cannot Be <strong>Empty</strong>';
			}

			if (empty($birth)) {
				$formErrors [] = 'Birth Day Cannot Be <strong>Empty</strong>';
			}

			if (empty($phone)) {
				$formErrors [] = 'Phone Cannot Be <strong>Empty</strong>';
			}

			foreach ($formErrors as $error) {
				echo '<div class="alert alert-danger">'. $error  . '</div>' ;
			}

			if (empty($formErrors)) {
				$stmt = $con->prepare("INSERT INTO users(name,national,email,password,phone,birth,image,type) VALUES (:name,:ID,:email,:password,:phone,:birth,:image,1)");
				$stmt->execute(array(
					"name" 			=> $patient_name,
					"ID"			=> $national,
					"email"			=> $email,
					"password"		=> $password,
					"phone" 		=> $phone,
					"birth"			=> $birth,
					"image"			=> $file_name
				));

			echo "<div class='alert alert-success'>Your Account has been added successfully</div>";
			echo "<a href='".$_SERVER['HTTP_REFERER']."' class='btn btn-danger'>Go Back</a>";
			}

	}

 ?>
</div>

</body>
</html>