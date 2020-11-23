<?php

/*
Template Name: Bikes
*/

?>
<?php get_header(); ?>
<?php get_template_part('includes/section','search-again-header');?>


<section class="page-wrap">
<div class="container flex-row">

        <?php
        $x = 1;

        while($x <= 3) {
        ?>
                <?php get_template_part('includes/elements','model-card');?>
        <?php 
        $x++;
        }
        ?>


  
</div>
</section>


<?php get_footer(); ?>





    <!-- <div class="row">


        <div class="col-lg-6">
           
        </div> -->

        <!-- <div class="col-lg-6"> -->
        <!-- <?php get_template_part('includes/section','content');?> -->
        <!-- </div> -->

        
    <!-- </div> -->