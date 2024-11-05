<?php

     /*

Template Name: Intro Template

*/


        get_header();
?>
 <div class="loadingScreen">
      <h1>Loading</h1>
    </div>

    <div class="intro-home">
    <div id="introduction" class="intro">
  

   
    <div class="row z-n1 m-0 p-0">
    <div class="col-12 col-md-12 m-0 p-0"> <!-- 30% width on larger screens, full width on small screens -->
        <div class=" text-dark p-md-5 p-3 pt-5 text-content h-100 d-flex justify-content-center align-items-center">
          
        <p class="text-light h2 pt-md-4 pt-3">Our Duty as a Citizen</p>
        </div>
    </div>
    <div class="h-100 d-flex justify-content-center align-items-center">
    <div class="col-12 col-md-8 m-0 p-0  p-md-5  "> <!-- 70% width on larger screens, full width on small screens -->
        
            <img class="intro-image " src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09663.jpg;" alt="">
    
    </div>
    </div>
</div>
<div class="info-content m-2 m-md-4 p-2 p-md-4 h5 md-h4 ">    

       <div class="row z-n1 m-0 p-0 w-100 d-flex justify-content-center align-items-center">
    <div class="col-12 col-md-8 m-0 p-0 "> <!-- 70% width on larger screens, full width on small screens -->
    <p class="text-dark pb-2">
    As more products are created, more material waste is being disposed of in all households in Manila. A clear majority of improper waste is credited to households all over the metropolitan area of NCR.
            </p>

            <div class="row z-n1 m-0 p-0">
                <div class="col-12 col-md-6 m-0 p-0">
                    <img class="w-100 h-auto p-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09663.jpg;" alt="ss">
                </div>
                <div class="col-12 col-md-6 m-0 p-0 d-md-block d-none">
                    <img class="w-100 h-auto p-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09663.jpg;" alt="ss">
                </div>
            </div>
        
    <p class="text-dark pb-2 ">
   
During 2020, Metro Manila has produced 3,466,469 metric tons of material waste in that year alone.
    </p>
    <div class="row z-n1 m-0 p-0">
                <div class="col-12 col-md-6 m-0 p-0">
                    <img class="w-100 h-auto p-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09663.jpg;" alt="ss">
                </div>
                <div class="col-12 col-md-6 m-0 p-0 d-md-block d-none">
                    <img class="w-100 h-auto p-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/DSC09663.jpg;" alt="ss">
                </div>
            </div>
          
<p class="text-dark pb-2 ">
It is our duty to properly dispose of these waste if we want a better place for ourselves and the future generation so let’s aim for a greener Manila.
    </p>
           
    </div>
</div>
         
       </div>



    </div>

   <!--
<div id="video" class="video" >
    <div class="h-100 d-flex justify-content-center align-items-center" > 
    <div class="blurred-background" style="   background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/denr.jpg;');"></div>
            <div class=" w-md-25 p-2 m-2 content-map">
             
                 <p class="text-dark font-weight-bolder d-flex justify-content-center align-items-center" >WHAT HAPPENS WHEN YOU DON'T PRACTICE RIGHT MANAGEMENT ACCORDING TO THE LAW?</p>
<div class="d-flex justify-content-center align-items-center">
                 <button type="button" class="btn btn-success text-dark font-weight-bolder  " data-toggle="modal" data-target="#staticBackdrop">
    Click the gavel.
</button>
</div>

</div>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Law</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Lorem ipsum dolor sit amet. Vel animi rerum qui galisum recusandae rem omnis magni sed dolore dolor! Hic nesciunt ducimus qui iste eaque vel voluptatum alias hic nostrum adipisci qui iusto maiores!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
               
                
        
       
    </div>
</div>
-->

<div id="url" class="url" >

<div class="blurred-background" style="   background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/DSC09663.jpg;');"></div>
    <div class="h-100 d-flex justify-content-center align-items-center content-map" style="min-height: 300px;"> <!-- Added min-height for vertical centering -->
        <div class=" p-4 d-block  w-md-25 find-junk">
        <p class="text-center h5 md-h3 text-light font-weight-bolder"> <!-- Added text-center for horizontal alignment -->
        FIND A JUNK SHOP NEAR YOU
        
      
        </p>
        <div class="d-flex justify-content-center align-items-center">
      
        
        <button class="button-57" role="button"><span class="text">Start your Journey</span><span>Find Junkshop</span></button>
        </div>
        </div>
    </div>
</div>
   


</div>

<script>
       const brand = document.querySelector('.navbar-brand');
        window.onload = 	brand.classList.add('not-hidden');

        var loadingScreen = document.querySelector(".loadingScreen");

window.addEventListener('load', function() {
  console.log('nice');
  loadingScreen.classList.add('d-none');
})
      </script>
   
<?php

    get_footer();

?>