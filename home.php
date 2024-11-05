<?php

     /*

Template Name: Home Template

*/


        get_header();
?>





<div class="mainContainer">
    <div class="firstSection">
        <a href="<?php 
                    echo home_url() ?>/intro">       
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC00002.JPG" alt="" class="imgBody">
        </a>
        <h1 style="text-align: center;">Be Mindful</h1>
    </div>
    <div class="secondSection">
   
        <div class="secondSectionFirstImg">
        <a href="<?php 
                    echo home_url() ?>/articles"> 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09499.JPG" alt="" class="imgBody1">
            </a>
            <h1 style="text-align: center;">Be a JunkieZ like Me</h1>
        </div>
       
       
        <div class="secondSectionSecondImg">
        <a href="<?php 
                    echo home_url() ?>/aboutus_contactus"> 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09727.JPG" alt="" class="imgBody2">
            </a>
            <h1 style="text-align: center;">Don't be Left Behind</h1>
        </div>
       
    </div>
</div>

<div class="wholeImgContainer">
<a href="<?php 
                    echo home_url() ?>/video-page"> 
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09663.JPG" alt="" class="imgBody3">
    </a>
    <h1 class="floatingText">!!! BE INFORMED !!!<h1>
</div>

<!-- <div class="threeColumnImgContainer">
    <div class="firstSection">
        <h3>What's happening around you?</h3>
    </div>
    <div class="secondSection">
        <h3>Know your trash</h3>
    </div>
    <div class="thirdSection">
        <h3>Become Trash-worthy</h3>
    </div>
</div> -->

<div class="scroll-container">
    <ul class="unOrdered">
        <li class="ListIto">
        <a href="<?php 
                    echo home_url() ?>/"> 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cropped_DSC09909.JPG" alt="" class="imgBody4">
            </a>
            <h3>What's happening around you?</h3>
        </li>
        <li class="ListIto">
        <a href="<?php 
                    echo home_url() ?>/info"> 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cropped_DSC09719.JPG" alt="" class="imgBody5">
            </a>  
            <h3>Know your trash</h3>
        </li>
        <li class="ListIto">
        <a href="<?php 
                    echo home_url() ?>/video-page"> 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09499.JPG" alt="" class="imgBody6">
            </a>
            <h3>Become Trash-worthy</h3>
        </li>
    </ul>
</div>





<?php

        get_footer();

?>