  <!-- Sidans header läses in -->
  <?php get_header(); ?>

  <!-- Om en notis är skapad visas den här -->
  <?php
  if(is_active_sidebar('notis')) : ?>
  <div id="notis">
    <?php dynamic_sidebar('notis'); ?>
  </div>
  <?php endif; ?>

  <!-- Webbplatsens namn hämtas in och undertitel -->
    <div id="pageTitleStart">
        <h1><?php bloginfo('name'); ?><br><?php echo esc_html(get_post_meta(get_the_ID(), 'subtitle', true)); ?></h1>
    </div>
    
<!-- Titel för senaste produkter läses in -->
        <div id="productsDiv">
        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'productsHeading', true)); ?></h2>

        <!-- De fyra senast publicerade produkterna läses in -->
        <?php
        //Query för att visa de senaste 4 produkterna
        $args = array('post_type' => 'product',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC');

        $recent_products = new WP_Query($args);

        if($recent_products-> have_posts()):
        ?>

<!-- Struktur för hur produkterna ska synas på sidan-->
        <div id="productList">

        <?php 
        while($recent_products->have_posts()) : $recent_products->the_post();
        ?>
        <!--Produkten visas med bild och titel -->
            <div class="oneProduct">

                <?php
                    the_post_thumbnail('product-image');
                ?>
                <p><?php the_title(); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; wp_reset_postdata(); ?>

        <!-- Knapp tillagd för att komma till produktsidan-->
        <a href="<?php echo get_permalink(get_page_by_path('produkter')); ?>">Visa alla produkter</a>
    </div>

    <!-- Information från kategorin om mig publiceras-->
    <?php query_posts('category_name=ommig');
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>

<!--Struktur för hur om mig-informationen ska synas med bild, titel och text -->
    <div id="aboutDiv">
        <div id="aboutImg">
            <?php the_post_thumbnail('about-image'); ?>
        </div>
        
        <div id="aboutText">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>

            <!-- Länk tillagd för att komma till kontaktsidan-->
            <a href="<?php echo get_permalink(get_page_by_path('kontakt')); ?>">Kontakta mig!</a>
        </div>


    </div>

    <?php
        }
   
    }

    /*Frågan återställs */
    wp_reset_query();
    ?>

<!-- Rubrik för vanliga frågor läses in-->
    <div id="faq">
        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'faqHeading', true)); ?></h2>

        <!-- Om frågor finns läses de ut-->
    <div id="questions">
        <?php query_posts('category_name=faq&posts_per_page=4');
        if(have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
<!-- Frågorna struktureras med titel och innehåll som paragraf -->
            <div class="oneQuestion">
                <h3><?php the_title() ?></h3>
                <p><?php the_content() ?></p>
            </div>

                <?php
            }
        }
/*Frågan återställs */
        wp_reset_query();
        ?>
        </div>
        <!-- Länk för att komma till fler frågor skapas -->
                <a href="<?php echo get_permalink(get_page_by_path('faq')); ?>">Läs fler frågor</a>
    </div>

    <!-- Titel för senaste nyheter läses in-->
    <div id="news">
        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'newsHeading', true)); ?></h2>
        
        <!-- De två senast publicerade nyheterna läses ut-->
                <?php query_posts('category_name=nyheter&posts_per_page=2&orderby=date&order=DESC');
        if(have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
        <div class="newsArticle">
            <!-- Nyheter struktureras med bild, titel, uttdrag och datum-->
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
/*Frågan återställs */
        wp_reset_query();
        ?>


<!-- Länk till nyhetssidan tillagd-->
 <a href="<?php echo get_permalink(get_page_by_path('nyheter')); ?>">Läs fler nyheter</a>

    </div>

<!-- Footer läses in-->
<?php get_footer(); ?>