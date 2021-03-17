<?php

?>


 <div class="footer">
       <div class="container">
        <div class="row align-content-center justify-content-center small-padding">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="padding-class">
                    <h3> <?php the_field('footer_title');?></h3>
                    <p> <?php the_field('footer_content');?></p>
                </div>
                </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="padding-class-one ">
                    <a class="btn btn-white custom " href="#" role="button"><?php the_field('start_free_trial');?></a>
                </div>
                </div>
        </div>
       </div>
   </div>
   
   

   <?php wp_footer();?>
  </body>
</html>