<?php

/*
Template Name: Contact Us
*/

?>
<?php get_header(); ?>
<?php get_template_part('includes/section','header-image');?>


<section class="page-wrap">
<div class="container">


    <h1><?php the_title();?></h1>

    <!-- <div class="row">


        <div class="col-lg-6">
           
        </div> -->

        <!-- <div class="col-lg-6"> -->
            <?php get_template_part('includes/section','content');?>
        <!-- </div> -->

        
    <!-- </div> -->

  
    <?php echo get_page_template_slug() ?>
            <br>


</div>
</section>


<?php get_footer(); ?>