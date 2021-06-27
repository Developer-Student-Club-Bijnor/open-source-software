<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">

  <title>DSC | Open Source </title>
</head>
            
<body>
<?php
require 'common.php';
$os="SELECT * FROM softwares_availabilty_rec_bijnor ";
$osr=mysqli_query($connection,$os) or die(mysqli_error($connection));

?>

  <!--Nagigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top ">
    <a href="http://recb.ac.in/" class="navbar-brand mx-lg-auto px-0"><img src="images/rec.png" class="img-fluid" width="50"><h4 class="font-weight-bold pb-0 mb-0 ml-1 text-center">Rajkiya Engineering College,<br>Bijnor</h4></a>
    
  </nav> <!-- End Navigation -->

  <!--social media links-->
  <div class="socialmed">
    <ul type="none" class="p-0 text-decoration-none">
      <li><a href="https://www.facebook.com/dscrecbijnor/" target="_blank" class=""><i
            class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
      <li><a href="https://twitter.com/DscRec" target="_blank"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
      <li><a href="https://www.instagram.com/dscrecbijnor/?igshid=b8dp92k5qnhu" target="_blank"><i
            class="fab fa-instagram"></i><span>Instagram</span></a></li>
      <li><a href="https://dscrecbijnor.blogspot.com/" target="_blank" class="text-light"><img src="images/blog-solid.svg" alt="" class="img-fluid ml-3 d-inline blogimg" width="30"><span class="d-inline mx-0 px-1">Blog</span></a>
      </li>
      <li><a href="https://github.com/Developer-Student-Club-Bijnor" target="_blank"><i
            class="fab fa-github"></i><span>Github</span></a>
      </li>
      <li><a href="https://www.youtube.com/channel/UCF8ZVIfyf8u4w9SaYaUmezA" target="_blank"><i
            class="fab fa-youtube"></i><span>Youtube</span></a></li>
    </ul>
  </div> 

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/pic.jpg);">
    <div class="text-center" style="margin-top: 120px;">
      <h1 class="text-uppercase text-danger font-weight-bold">Open Source Tools & Softwares</h1>
      <p class="font-italic font-weight-bold st">Developer Student Club Bijnor</p>
      <a href="#sources" class="btn btn-outline-danger mr-4">Go and See</a>
      <a href="http://dscrecbijnor.com/" target="_blank" class="btn btn-outline-danger">Join Us</a>
    </div>
  </header> 
  <!-- End Header Jumbotron -->

  <!-- We Work on Section : We can use this section if seniors allowed. -->
  <!--
  <div class="container text-center border-bottom" id=""> 
    <h2>Our Services</h2><hr>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fab fa-android fa-10x text-success"></i></a>
        <h4 class="mt-4">Android Application</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-desktop fa-10x text-primary"></i></a>
        <h4 class="mt-4">Web Application</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-database fa-10x text-info"></i></a>
        <h4 class="mt-4">Database</h4>
      </div>
    </div>
  </div>
    -->
   <!-- End Services -->
  
   <div class="container py-3" id="sources"> 
    <h2 class="text-center font-weight-bold">Alteratives of Open Sources</h2> <br><hr><br>
  
<?php while($osre=mysqli_fetch_array($osr)){ 

  
  ?>



  <div class="row mt-4">        
    <div class="col-lg-6 mb-4">  
      <img src="<?=$osre[9]?>" alt="ngspice-logo" class="img-fluid">
    </div> 

    <div class="col-lg-6">    
      <h2 class="text-center"><?=$osre[2]?></h2> <br>
      <p class="justify"><?=$osre[8]?></p>
      <h4>Purpose : </h4><p><?=$osre[6]?></p>
       
      <h4>Remarks : </h4><p><?=$osre[7]?></p><br>
      <a class="btn btn-primary" href="<?=$osre[5]?>" role="button">Download Now</a>
    </div>  
  </div>
<hr>
  <?php } ?>


</div>
  


  <!-- Footer-->
<footer class="footer-distributed">
 
 <div class="footer-left">
 
 <h3><span>Tools & Softwares</span></h3><br>
  <p style="color:beige">This consist of lists of tools and softwares <br>related to different fields.</p> 
 </div>
 
 <div class="footer-center">
  <p class="footer-company-about">
  <span>IMPORTANTS LINKS</span>
 </p>

 <ul class="list-unstyled">
  <li><a href='http://recb.ac.in/' target="_blank">Rajkiya Engineering College</a></li><br>
  <li><a href="https://aktu.ac.in/" target="_blank">Uttar Pradesh Technical University</a></li><br>
  <li><a href="http://www.teqip.in/" target="_blank">TEQIP III </a></li>
</ul>
 </div>
 
 <div class="footer-right">
 
 <p class="footer-company-about">
 <span>CONTACT</span>
 Rajkiya Engineering College Chandpur, <br>Bijnor UP-246725 <br>dscrecbijnor@gmail.com
 </p>
 
 <div class="footer-icons">
  
  <a href="https://www.facebook.com/dscrecbijnor/" target="_blank"><i class="fab fa-facebook-f px-3"></i></a>
  <a href="https://twitter.com/DscRec" target="_blank"><i class="fab fa-twitter pr-3"></i></a>
  <a href="https://www.instagram.com/dscrecbijnor/?igshid=b8dp92k5qnhu" target="_blank"><i class="fab fa-instagram pr-3"></i></a>
  <a href="https://www.youtube.com/channel/UCF8ZVIfyf8u4w9SaYaUmezA" target="_blank"><i class="fab fa-youtube pr-3"></i></a>
  <a href="https://dscrecbijnor.blogspot.com/" target="_blank"><img src="images/blog-solid.svg" alt="" class="img-fluid ml-3 d-inline blogimg mx-auto text-center" width="20"></a>
  <a href="http://dscrecbijnor.com/" target="_blank"><img src="images/logo.png" alt="" class="img-fluid ml-3 d-inline blogimg mx-auto text-center" width="20"></a>
  <a href="https://github.com/Developer-Student-Club-Bijnor" target="_blank"><i class="fab fa-github pr-3"></i></a>
 </div>
 <hr>
 </div>
 <div class="col-md-6 text-right">   
  <small> Designed and Developed by <a href="http://dscrecbijnor.com/" target="_blank">DSC Bijnor Team<a> &copy; 2021. </small>
</div> 
 
 </footer>
  
  <!-- End Footer -->


  
  
</body>
</html>