<!-- template that the wordpress use whenever a page is used -->
<?php get_header(); ?>

<section class="page-wrap">
<div class="container">

   

   <h1><?php echo single_cat_title();?></h1>
                        <?php get_template_part('includes/section','archive');?>



                        <!-- pagination method 1: without 12
                        <?php previous_posts_link();?>
                        <?php next_posts_link();?> 
                        -->

                         <!-- pagination method 1: with 12 next -->
                        <?php
                        global $wp_query;

                        $big = 99999999;

                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1,get_query_var('paged')),
                            'total' => $wp_query->max_num_pages
                        ));
                        ?>


             

</div>
</section>

<?php get_footer(); ?>