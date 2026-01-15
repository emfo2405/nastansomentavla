
<?php 

get_header(); 

?>

<div id="pageTitle">
    <h1><?php echo get_the_title(wc_get_page_id('shop')); ?></h1>
</div>

<div id="productsPage">
    


<div id="productList">
    <?php query_posts('post_type=product');
        if(have_posts()) {
        while(have_posts()) {
            the_post();

            $product = wc_get_product(get_the_ID());
            ?>
        <div class="onePoster">
            <div class="productListImg">
            <a href='<?php the_permalink(); ?>'><?php the_post_thumbnail('product-image'); ?></a>
            </div>
            <div class="posterText">
            <p><?php the_title(); ?></p>
            <p><?php echo $product ? $product -> get_price_html() : ''; ?></p>
            </div>

            <div class="cartBtn">
                <?php woocommerce_template_loop_add_to_cart(); ?>
            </div>
           
        </div>

        <?php
        } 
        } 

    wp_reset_query();
    ?>
            

</div>
        </div>




    <?php get_footer(); ?>