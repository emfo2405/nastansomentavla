<!-- Sidans header hämtas in -->
<?php 

get_header(); 

?>
<!-- Sidans titel hämtas och läses ut-->
<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

<!-- Posts hämtas in och produktens id hämtas, om ingen produkt finns skippas det-->
<div id="productSingle">
    <?php 
        while(have_posts()) {
            the_post();
            $product = wc_get_product(get_the_ID());
            if(!$product) continue;
            ?>


<!-- Struktur för hur produkten ska visas med bild, titel och pris -->
    <div class="theProduct">
        <div class="productInfo">
        <?php the_post_thumbnail('product-image'); ?>
        <div class="theProductText">
        <h2><?php the_title(); ?></h2>
        <h3><?php echo $product -> get_price_html(); ?></h3>
        <!-- En knapp läggs till för att lägga till i varukorg med WooCommerce-funktion-->
<div class="addToCart">
        <?php woocommerce_template_loop_add_to_cart(); ?>
</div>
    </div>

        </div>
            <!-- Innehållet läses ut, här är det produktens beskrivning, i en paragraf -->
        <div class="productDescription">
        <p><?php the_content(); ?></p>    
        </div>
 

    </div>

        <?php
        } 
        
  /*Queryn återställs */
    wp_reset_query();
    ?>
            

</div>




<!--Footern hämtas in för sidan -->
    <?php get_footer(); ?>