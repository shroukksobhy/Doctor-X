	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="css.css">
<?php
  

session_start();

session_unset();

session_destroy();

echo '<div class="alert alert-success" role="alert">
 <p> This is a success log out! </p>
              <h5>    We are waiting you to visit us again.     </h5>

</div';


if(isset($_GET['logout'])) {
    session_destroy();
    session_unset();
    header('location:sign_in.php');
    exit();
}
?>


