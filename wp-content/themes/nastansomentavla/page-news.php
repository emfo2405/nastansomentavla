<!-- Sidans header läses in -->
<?php 
/*
Template Name: Nyhetssida
*/
get_header(); ?>

<!--Sidans titel läses in -->
<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

<!-- Undertitel läses in-->
<div id="newsPage">
    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'subtitle', true)); ?></h2>

<!-- hämtar in posts i kategorin nyheter och läses ut om det finns några-->
    <?php query_posts('category_name=nyheter');
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
    <!--Struktur för nyheten blir dess bild, titel och utdrag -->
            <div class="newsPageArticle">
                <?php the_post_thumbnail('news-image'); ?>
                <div class="newsPageText">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <div class="lowerNews">
        <!--Länk till hela nyheten och datum skrivs ut -->
                        <a href='<?php the_permalink(); ?>'>Läs nyheten</a>
                        <p><?= get_the_date(); ?></p>

                    </div>
                </div>
            </div>
            <?php

        }
    }
/*Frågan återställs */
    wp_reset_query();
    ?>
</div>
<!-- Footer läses in-->
    <?php get_footer(); ?>