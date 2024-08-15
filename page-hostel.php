<?php
get_header();
?>
<div class="homepage">
    <h1>Welcome to Our Hostel</h1>
    <div class="hostel-room-grid">
        <?php
        // Custom query to fetch hostel rooms
        $args = array(
            'post_type' => 'hostel_room',
            'posts_per_page' => 6 // Adjust the number of rooms to display
        );
        $hostel_rooms = new WP_Query($args);
        
        if ($hostel_rooms->have_posts()) :
            while ($hostel_rooms->have_posts()) : $hostel_rooms->the_post(); ?>
                <div class="hostel-room-card">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="hostel-room-image">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="hostel-room-info">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No hostel rooms found.</p>';
        endif;
        ?>
    </div>
</div>




<?php
get_footer();
?>