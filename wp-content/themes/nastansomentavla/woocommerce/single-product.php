
<?php 

get_header(); 

?>

<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>


<div id="productSingle">
    <?php 
        while(have_posts()) {
            the_post();
            global $product;
            ?>



    <div class="theProduct">
        <div class="productInfo">
        <?php the_post_thumbnail(); ?>
        <div class="theProductText">
        <h3><?php echo $product -> get_price_html(); ?></h3>
        <button>Köp</button>
        </div>
        </div>
        <div class="productDescription">
        <p><?php the_content(); ?></p>    
        </div>
        <?php woocommerce_template_single_add_to_cart(); ?>


    </div>

        <?php
        } 
        

    wp_reset_query();
    ?>
            

</div>
        </div>




    <?php get_footer(); ?>