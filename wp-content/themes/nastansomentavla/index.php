<?php get_header(); ?>


    <div id="pageTitle">
        <h1><?php the_title(); ?></h1>
    </div>

        <div id="newsPage">
        <h2>-Senaste nyheter och uppdateringar-</h2>
       

        <?php query_posts('category_name=nyheter');
            if(have_posts()) {
                while(have_posts()) {
                    the_post();
                ?>
 <div class="newsPageArticle">
            <?php the_post_thumbnail('news-image'); ?>
            <div class="newsPageText">
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <div class="lowerNews">
            <a href='<?php the_permalink(); ?>'>Läs nyheten</a>    
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