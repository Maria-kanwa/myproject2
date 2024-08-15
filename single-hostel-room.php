<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <div class="hostel-room">
            <h1><?php the_title(); ?></h1>
            <div class="hostel-room-content">
                <?php the_content(); ?>
            </div>
            <div class="hostel-room-meta">
                <p><strong>Room Number:</strong> <?php echo get_post_meta(get_the_ID(), 'room_number', true); ?></p>
                <p><strong>Capacity:</strong> <?php echo get_post_meta(get_the_ID(), 'capacity', true); ?></p>
                <p><strong>Amenities:</strong> <?php echo get_post_meta(get_the_ID(), 'amenities', true); ?></p>
                <p><strong>Availability:</strong> <?php echo get_the_terms(get_the_ID(), 'room_availability')[0]->name; ?></p>
            </div>
        
        