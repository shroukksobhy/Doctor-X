<!DOCTYPE html>
<html>
<head>
  <title>Sign up as patient</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="css.css">
    
</head>
<body>
<div class="headerBeforeLogin">
  <?php
  require 'headerBeforeLogin.php';

  ?>
</div
<div class="container">
          <h2 style="font-style: oblique; padding-left: 80px;" >Sign up as Patient</h2>

  <form class="form" method="post" action="reg_patient.php" enctype="multipart/form-data">

   <div class="form-group row">
      <label for="exampleFormControlInput1">Patient name</label>
      <input type="text" class="form-control" name="name" placeholder="your name">
   </div>

   <div class="form-group row">
      <label for="exampleFormControlInput1">National ID</label>
      <input type="number" class="form-control" name="national" placeholder="your national ID">
   </div>
       
        <div class="form-group row">
          <label for="exampleFormControlInput1">Gender</label>
          <select name="gender" class="form-control">
            <option>Male</option>
            <option>Female</option>
          </select>
       </div>


   <div class="form-group row">
      <label for="exampleFormControlInput1">Email</label>
      <input type="email" class="form-control" name="email" placeholder="email@example.com">
   </div>
   <div class="form-group row">
      <label for="exampleFormControlInput1">Password</label>
      <input type="password" class="form-control" name="password" placeholder="you password">
   </div>

    <div class="form-group row">
      <label for="exampleFormControlInput1">Confirm Password</label>
      <input type="password" class="form-control" name="re_password" placeholder="confirm your password">
    </div>

   <div class="form-group row">
      <label for="exampleFormControlInput1">Phone</label>
      <input type="text" class="form-control" name="phone" placeholder="your phone">
   </div>

   <div class="form-group row">
      <label for="exampleFormControlInput1">Birth Date</label>
      <input type="date" class="form-control" name="birth" placeholder="your birth date">
   </div>
    
   <div class="form-group row">
      <label for="exampleFormControlFile1">Put your image</label>
      <input type="file" class="form-control-file" name="image" placeholder="you image">
    </div>
<br><br>
  <input type="submit" class="btn btn-info center-block btn-lg" name="submit" value="Create account">
<br>
  </form>
</div>


<div class="footer">

  <?php
  require 'footer.php';

  ?>
</div>




</body>
</html>