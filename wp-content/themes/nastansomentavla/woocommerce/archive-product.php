
<?php 

get_header(); 

$page_id = get_the_ID();
?>

<div id="pageTitle">
    <h1><?php echo get_the_title($page_id); ?></h1>
</div>

<div id="newsPage">
    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'subtitle', true)); ?></h2>


<div id="productList">
    <?php query_posts('post_type=product');
        if(have_posts()) {
        while(have_posts()) {
            the_post();

            $product = wc_get_product(get_the_ID());
            ?>
        <div class="onePoster">
            <a href='<?php the_permalink(); ?>'><?php the_post_thumbnail(); ?></a>
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