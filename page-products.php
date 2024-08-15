<?php
/* Template Name: Products by Category */
get_header();
?>

<div class="container">
    <?php
    // Define the category slug
    $category_slug = 'your-category-slug';
    
    // Query products by category
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 12,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => $category_slug,
            ),
        ),
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) {
        echo '<ul class="products">';
        while ($loop->have_posts()) : $loop->the_post();
            wc_get_template_part('content', 'product');
        endwhile;
        echo '</ul>';
    } else {
        echo __('No products found');
    }

    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>