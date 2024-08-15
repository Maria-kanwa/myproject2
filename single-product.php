<?php
/**
 * Single Product Template
 *
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // Start the Loop.
        while ( have_posts() ) :
            the_post();

            // Get the product object
            global $product;

            // Display the product's title and image
            ?>
            <div class="product-single">
                <div class="product-gallery">
                    <?php
                    // Display the product's main image
                    if ( has_post_thumbnail() ) {
                        echo '<div class="product-image">';
                        echo get_the_post_thumbnail( $post->ID, 'large' );
                        echo '</div>';
                    }
                    
                    // Display the product's gallery images
                    if ( $product->get_gallery_image_ids() ) {
                        echo '<div class="product-gallery-images">';
                        foreach ( $product->get_gallery_image_ids() as $attachment_id ) {
                            echo wp_get_attachment_image( $attachment_id, 'thumbnail' );
                        }
                        echo '</div>';
                    }
                    ?>
                </div>

                <div class="product-details">
                    <?php
                    // Display the product's title
                    the_title( '<h1 class="product-title">', '</h1>' );

                    // Display the product's price
                    echo '<p class="product-price">' . $product->get_price_html() . '</p>';

                    // Display the product's short description
                    echo '<div class="product-short-description">';
                    echo apply_filters( 'woocommerce_short_description', get_the_excerpt() );
                    echo '</div>';

                    // Display the add to cart form
                    woocommerce_template_single_add_to_cart();

                    // Display product meta information (e.g., SKU, categories)
                    woocommerce_template_single_meta();

                    // Display product tabs (description, reviews, additional information)
                    woocommerce_template_single_tabs();

                    // Display related products
                    woocommerce_output_related_products();
                    ?>
                </div>
            </div>

            <?php
        endwhile; // End the loop.
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
