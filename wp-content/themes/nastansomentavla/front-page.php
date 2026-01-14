  <?php get_header(); ?>

  <?php
  if(is_active_sidebar('notis')) : ?>
  <div id="notis">
    <?php dynamic_sidebar('notis'); ?>
  </div>
  <?php endif; ?>

    <div id="pageTitleStart">
        <h1><?php bloginfo('name'); ?><br><?php echo esc_html(get_post_meta(get_the_ID(), 'subtitle', true)); ?></h1>
    </div>
    






        <div id="productsDiv">
        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'productsHeading', true)); ?></h2>

        <?php
        //Query för att visa de senaste 4 produkterna
        $args = array('post_type' => 'product',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC');

        $recent_products = new WP_Query($args);

        if($recent_products-> have_posts()):
        ?>

        <div id="productList">

        <?php 
        while($recent_products->have_posts()) : $recent_products->the_post();
        ?>
            <div class="oneProduct">

                <?php
                    the_post_thumbnail('product-image');
                ?>
                <p><?php the_title(); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; wp_reset_postdata(); ?>

        <a href="<?php echo get_permalink(get_page_by_path('produkter')); ?>">Visa alla produkter</a>
    </div>

    <?php query_posts('category_name=ommig');
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>

    <div id="aboutDiv">
        <div id="aboutImg">
            <?php the_post_thumbnail('about-image'); ?>
        </div>
        
        <div id="aboutText">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <a href="<?php echo get_permalink(get_page_by_path('kontakt')); ?>">Kontakta mig!</a>
        </div>


    </div>

    <?php
        }
   
    }

    wp_reset_query();
    ?>



    


    <div id="faq">
        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'faqHeading', true)); ?></h2>
    <div id="questions">
        <?php query_posts('category_name=faq&posts_per_page=4');
        if(have_posts()) {
            while (have_posts()) {
                the_post();
                ?>

            <div class="oneQuestion">
                <h3><?php the_title() ?></h3>
                <p><?php the_content() ?></p>
            </div>

                <?php
            }
        }

        wp_reset_query();
        ?>
        </div>
                <a href="<?php echo get_permalink(get_page_by_path('faq')); ?>">Läs fler frågor</a>
    </div>

    <div id="news">
        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'newsHeading', true)); ?></h2>
        
                <?php query_posts('category_name=nyheter&posts_per_page=2&orderby=date&order=DESC');
        if(have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
        <div class="newsArticle">
            
            <?php the_post_thumbnail('news-image'); ?>
            <div class="newsText">
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <p><?= get_the_date(); ?></p>
        </div>
        </div>

        <?php
            }
        }

        wp_reset_query();
        ?>



 <a href="<?php echo get_permalink(get_page_by_path('nyheter')); ?>">Läs fler nyheter</a>

    </div>


<?php get_footer(); ?>