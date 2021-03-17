<?php
get_header();
?>

<div class="hero">
        <div class="container ">
            <div class="row one small-padding">
                    <div class="col-lg-6 col-md-6 col-sm-12 custom-spacing">
                        <h2><?php the_field('home_page_header');?> </h2>
                            <!-- Secure Your Journey <br> With RO</h2> -->
                        <p><?php the_field('page_top_details')?> </p>
                        <a class="btn btn-primary custom" href="#" role="button"><?php the_field('get_started_button');?> </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 hero-image ">
                        <img src="<?php the_field('top_image') ?>">                       
                    </div>
            </div>
        </div>
    </div>
   

   <div class="container section-two">   
        <div class="row justify-content-center small-padding">
            <div class="col-lg-3  col-md-3 col-sm-12 card content-box">
                <div class="titles text-center">
                <img class="sms" src="<?php the_field('sectwoone_image'); ?>" alt=""> <span> <?php the_field('sectwoone_title') ?> </span>
                <p class="text-center"><?php the_field('sectwoone_details') ?> </p>
                </div> 
            </div>
           
            <div class="col-lg-3 offset-lg-1 col-md-3 offset-md-1 col-sm-12 card content-box">
                <div class="titles text-center ">
                <img class="sms" src="<?php the_field('sectwotwo_image'); ?>" alt=""> <span> <?php the_field('sectwotwo_title') ?> </span>
                <p class="text-center"><?php the_field('sectwotwo_details') ?></div>
            </div>
            
            <div class="col-lg-3 offset-lg-1 col-md-3 offset-md-1 col-sm-12 card content-box">
            <div class="titles text-center ">
                <img class="sms" src="<?php the_field('sectwothree_image'); ?>" alt=""> <span> <?php the_field('sectwothree_title') ?> </span>
                <p class="text-center"><?php the_field('sectwothree_details') ?></div>
            </div>        
        </div>    
   </div>

   <div class="container">
       <div class="row justify-content-center security small-padding">
           <h2 class="text-center "> <?php the_field('secthree_title');?> </h2>
       </div>
       <div class="row small-padding">
           <div class="col-lg-6 col-md-6 section-cs">
               <div class="row">                   
                   <div class="col-lg-2">
                       <img src="<?php the_field('secfour_image'); ?>" alt="">
                   </div>
                   <div class="col">
                       <h4><?php the_field('secfour_title'); ?></h4>
                       <p><?php the_field('secfour_details'); ?></p>
                   </div>
               </div>
               <div class="row">                   
                   <div class="col-lg-2">
                       <img src="<?php the_field('secfourone_image'); ?>" alt="">
                   </div>
                   <div class="col">
                       <h4><?php the_field('secfourone_title'); ?></h4>
                       <p><?php the_field('secfourone_details'); ?></p>
                   </div>
               </div>
               <div class="row">                   
                   <div class="col-lg-2">
                       <img src="<?php the_field('secfourtwo_image'); ?>" alt="">
                   </div>
                   <div class="col">
                       <h4><?php the_field('secfourtwo_title'); ?></h4>
                       <p><?php the_field('secfourtwo_details'); ?></p>
                   </div>
               </div>              
           </div>

           <div class="col-lg-6 col-md-6 ">
               <img src="<?php the_field('bot_image'); ?>" alt="">
           </div>
        </div>
        <div class="text-center last-class">
            <a class="btn btn-primary custom " href="#" role="button"><?php the_field('get_started_button');?> </a>
        </div>
   </div>

<?php 
get_footer();