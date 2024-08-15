<?php 
 get_header();

 ?>
 

 <div class="main-container">
    <?php 
    $args = array('post_type' => 'post');
    $query = new WP_Query($args);
    while ($query->have_posts()) : $query->the_post(); ?>
        <div class="single_post">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <p><?php the_author();?></p>
            <h1><?php the_title(); ?></h1>
            <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
            <p><?php wp_list_comments();?></p> 
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>


</div>

 
 <?php 
 get_footer();
 ?>