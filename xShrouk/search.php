<!DOCTYPE html>
<html>
<head>
  <title>Search</title>  
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
	require'headerBeforeLogin.php';

  $value = $_POST['asked'];
	?>
</div>

<section class="searched">
  <div class="container">
    <?php if ($value == '') {
      echo "<div class='alert alert-danger'>Please Enter something to search about</div>";
    }else{ ?>
    <h4>You have Searched for : <?php echo $_POST['asked']; ?></h4>
    <hr align="left" width="30%">
    <div class="row">
    <?php } ?>
      
    </div>
  </div>
</section>