
<?php 

get_header(); ?>


<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

 <?php 
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            ?>

            <div class="theSingleNews">
        <?php the_post_thumbnail('news-image'); ?>
        <div class="newsText">
        <p><?php the_content();?>
        </p>
            <div class="newsDate">
                       <p><?= get_the_date(); ?></p>
            </div>
        </div>
            </div>
     
<?php
        }
    }

    wp_reset_query();
    ?>



    <?php get_footer(); ?>