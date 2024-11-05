<?php

     /*

Template Name: Home Template

*/


        get_header();
?>

<div class="iconContainer">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/junkiez.png" alt="">
</div>

<div class="mainContainer">
    <div class="firstSection">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC00002.JPG" alt="" class="imgBody">
        <h1 style="text-align: center;">Be Mindful</h1>
    </div>
    <div class="secondSection">
        <div class="secondSectionFirstImg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09499.JPG" alt="" class="imgBody1">
            <h1 style="text-align: center;">Be a JunkieZ like Me</h1>
        </div>
        <div class="secondSectionSecondImg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09727.JPG" alt="" class="imgBody2">
            <h1 style="text-align: center;">Don't be Left Behind</h1>
        </div>
    </div>
</div>

<div class="wholeImgContainer">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09663.JPG" alt="" class="imgBody3">
    <h1 class="floatingText">BE INFORMED!<h1>
</div>

<div class="threeColumnImgContainer">
    <div class="firstSection">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cropped_DSC09909.JPG" alt="" class="imgBody4">
        <h3>What's happening around you?</h3>
    </div>
    <div class="secondSection">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cropped_DSC09719.JPG" alt="" class="imgBody4">
        <h3>Know your trash</h3>
    </div>
    <div class="thirdSection">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09499.JPG" alt="" class="imgBody4">
        <h3>Become Trash-worthy</h3>
    </div>
</div>

<?php

        get_footer();

?>