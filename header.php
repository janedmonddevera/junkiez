
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greener Manila</title>

    
    <?php

wp_head();

?>


</head>
<body>
  
  
<nav class="navbar navbar-light position-sticky z-3">
  <img class="navbar-brand hidden" width="150" height="auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/junkiez.png;" alt="">

  <!--  <a class="navbar-brand hidden" href="#">JunkieZ</a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=" align-items-end justify-content-end text-dark" onclick="openNav()">Menu</span>
    </button>

    <div id="mySidenav" class="sidenav ">
    <img class="title r-md-25px p-4" width="200" height="auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/junkiez.png;" alt="">
   
      
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="p-4 m-4">

        <a href="/wp-content/themes/junkiez/intro.php" class="text-menu">HOME</a>
        <a href="#" class="text-menu">ADVOCACY</a>
        <a href="#" class="text-menu">START YOUR JOURNEY</a>
        <a href="#" class="text-menu">CONTACT US</a>

 
 

  <div class="footer  d-block d-md-flex justify-content-between align-items-start p-2 m-2 p-md-4 m-md-4 mt-sm-4">
    <div class="align-items-end p-2 m-2">
    <i class="fa-brands fa-facebook fa-xl  fa-md-2xl m-2" style="color: #000000;"></i>
  <i class="fa-brands fa-instagram fa-xl fa-md-2xl m-2" style="color: #000000;"></i>
  <i class="fa-regular fa-envelope fa-xl fa-md-2xl m-2" style="color: #000000;"></i>
    </div>
    <div class="align-contents-end mt-sm-4">
          <p class="text-dark">
          JunkieZ <i class="fa-regular fa-copyright" style="color: #000000;"></i> 2024. All Rights Reserved
          </p>  
          <p class="text-dark">Terms and Condition</p>
    </div>
 
  </div>
  </div>
  </div>
</div>
</nav>