<?php

/*
Template Name: Bikes Detail
*/

?>
<?php get_header(); ?>



<section class="page-wrap">
        <div class="container flex-row">
        <h3>Bike Model Name</h3>

        <div class="showcase flex-column" style="width:100%">
                <div class="left" style="width:70%; display: inline-block">
                        <?php get_template_part('includes/section','grid-showcase');?>
                </div>
                <div class="right" style="width:20%; display: inline-block">
                        <?php get_template_part('includes/elements','billing');?>
                </div>
        </div>
       
        <br>
        <br>
        <br>
        <hr>
        <h4>Bike Description</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
       </p>
        <hr>
        <h4>Overview</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
       </p>
        <hr>
        <h4>Features</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
       </p>
       <hr>
        <h4>Technical Details</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
       </p>
        <hr>


        </div>
</section>




<?php get_footer(); ?>

<style>
        .showcase {
                width: 720px;
        }
        .page-wrap{
                margin: 50px;
                margin-top: 94px;
        }
        .top-nav {
                background: var(--main-lighter-green-color);
        }
</style>