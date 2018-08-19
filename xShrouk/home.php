<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="css.css">
 <!--
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
-->

</head>
<body>
<div class="header">
	<?php
require'headerBeforeLogin.php';

	?>
</div>
<div class="container-home">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators hidden-xs" >
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <img src="im2.jpg" alt="intro" style="width:100%;">
                                <div class="row">
                                <div class="carousel-caption" style=" z-index: 10;">">
                                  <h1 style="color:black">Why Doctor-X?</h1>
                                  <p>Book an appointment to visit your doctor</p>
                                        
                              </div>
                                    </div>

                            </div>

                            <div class="item">
                              <img src="im4.jpg" style="width:100%;">
                                <div class="row">
                                <div class="carousel-caption" style=" z-index: 10;">">
                                  <h1 style="color:black">Why Doctor-X?</h1>
                                  <p>Contact with your doctor to ask for an opinion </p>
                                        
                              </div>
                                    </div>
                            </div>

                            <div class="item" >
                              <img src="im5.jpg"  class="img-responsive" style="width:100%;">
                                <div class="row">
                                <div class="carousel-caption" style=" z-index: 10;">
                                    <h1 style="color:black">Why Doctor-X?</h1>
                                  <p>Upload your medical history and Let your doctor check it </p>
                                        
                              </div>
                                    </div>
                            </div>
                          </div>

                          <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div><br><br><br>
        
      <section class="search">      
        <div class="row y">               
       <div   class="form-inline" id="searchBar">
        <form class="form-horizontal" method="POST" action="search.php">
             <select class="form-control" id=''>
                 <option>Search by speciality </option>
             
            </select>
             <select class="form-control" id=''>
                 <option>Search by city</option>
                 
             
            </select>
              <select  class="form-control" id=''>
                 <option>Search by area</option>
             
            </select>
           <input type="text" placeholder="Search by doctor name" class="form-control" name="asked" id="asked" />
            <input class="btn btn-danger" type="submit" name="submit" value="Search" id="go_search">
          </form>
            </div></div>
          </section>
                <br><br><br><br><br><br>
        
        
      
    
        
  
  <h2>Our Services</h2>
  <ul class="nav nav-pills">
    
    <li><a data-toggle="pill" href="#menu1">All our Doctors</a></li>
    <li><a data-toggle="pill" href="#menu2">All our Laps</a></li>
    <li><a data-toggle="pill" href="#menu3">All our Pharmacies</a></li>
  </ul>
  
  <div class="tab-content">
   
    <div id="menu1" class="tab-pane fade in active">
      <h2>All Doctors</h2>
       <p><?php
      
         require 'showDoctors.php';
      
      ?></p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>All Laps</h3>
      <p>
        <?php
        require 'showPatients.php';
        ?>
      </p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Show Pharmacies</h3>
      <p>
        <?php
          require 'showPharmacies.php';
        ?>
      </p>
    </div>
  </div>
</div>

</div>

<div class="footer">
	<?php
	require 'footer.php';
	?>
</div>
</body>
</html>