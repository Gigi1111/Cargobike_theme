<!-- template that the wordpress use whenever a page is used -->
<?php get_header(); ?>
<?php get_template_part('includes/section','header-image');?>

<section class="page-wrap">
<div class="container">

    <!-- <section class="row">
            <div class="col-lg-3">
                    <!-- <?php if(is_active_sidebar('page-sidebar')):?>
                        <?php dynamic_sidebar('page-sidebar');?>
                    <?php endif; ?> 
            
            </div>

            <div class="col-lg-9">-->

            <h1><?php the_title();?></h1>

            <?php get_template_part('includes/section','content');?>
            
            <!-- <?php echo get_page_template_slug() ?>
            <br>
            <?php echo get_permalink() ?>
            <br>
            <?php echo get_home_url() ?>
            <br>
            Selected Time Period: <?php echo $_POST["daterange"]; ?><br>
                        -->
            <!-- </div> -->


   
    <!-- </section> -->
   

 
    <script>
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const daterange = urlParams.get('daterange');
    </script>
  


</div>
</section>

<?php get_footer(); ?>