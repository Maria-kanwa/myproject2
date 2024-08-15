<?php

get_header();
?>


<?php 
    $my_option = get_option('my_data');
    $text1 = $my_option['text1'];
    $text2 = $my_option['text2'];
    
    
    
    ?> 

<?php if (is_front_page()) : ?>
    <div class="slider">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if (get_theme_mod("slider_image_$i")) : ?>
                <div class="slide">
                    <img src="<?php echo esc_url(get_theme_mod("slider_image_$i")); ?>" alt="Slider Image <?php echo $i; ?>">
                    <?php if (get_theme_mod("slider_caption_$i")) : ?>
                        <div class="slider-caption">
                            <?php echo esc_html(get_theme_mod("slider_caption_$i")); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
<?php endif; ?>





   

       <?php
$slides = [
    ['image' => get_theme_file_uri('images/60.PNG'), 'content' => 'Welcome to university of Narowal.'],
    ['image' => get_theme_file_uri('images/61.PNG'), 'content' => 'We will help you to learn!'],
    ['image' => get_theme_file_uri('images/62.PNG'), 'content' => 'Study and enjoy!Grow up with us.'],
];
?>



<div id="slider">
    <?php foreach ($slides as $index => $slide): ?>
        <div class="slide">
            <img src="<?php echo $slide['image']; ?>" alt="Slide <?php echo $index + 1; ?>" class="slide-image">
            <div class="slide-content"><?php echo $slide['content']; ?></div>
        </div>
    <?php endforeach; ?>
</div>

<script>
// JavaScript code to handle slider functionality
let currentIndex = 0;
const slides = document.querySelectorAll('#slider .slide');

function showSlide(index) {
    slides.forEach((slide, i) => {
        const image = slide.querySelector('.slide-image');
        const content = slide.querySelector('.slide-content');
        if (i === index) {
            image.style.display = 'block';
            content.style.display = 'block';
        } else {
            image.style.display = 'none';
            content.style.display = 'none';
        }
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

// Show the first slide initially
showSlide(currentIndex);

// Automatically move to the next slide every 3 seconds
setInterval(nextSlide, 3000);
</script>


<div class="container">
    <div class="box box1">
        <h1><i class="fa-solid <?php echo esc_attr(get_theme_mod('box1_icon', 'fa-graduation-cap')); ?>"></i> <?php echo esc_html(get_theme_mod('box1_heading', 'Learn Something')); ?></h1>
        <?php echo wp_kses_post(get_theme_mod('box1_text', 'Default content for box 1.')); ?>
    </div>
    <div class="box box2">
        <h1><i class="fa-solid <?php echo esc_attr(get_theme_mod('box2_icon', 'fa-building-columns')); ?>"></i> <?php echo esc_html(get_theme_mod('box2_heading', 'Learn Something')); ?></h1>
        <?php echo wp_kses_post(get_theme_mod('box2_text', 'Default content for box 2.')); ?>
    </div>
    <div class="box box3">
        <h1><i class="fa-solid <?php echo esc_attr(get_theme_mod('box3_icon', 'fa-book')); ?>"></i> <?php echo esc_html(get_theme_mod('box3_heading', 'Learn Something')); ?></h1>
        <?php echo wp_kses_post(get_theme_mod('box3_text', 'Default content for box 3.')); ?>
    </div>
</div>

<div class="container1">
    <div class="content">
        <h1><?php echo esc_html(get_theme_mod('about_us_heading', 'About Us')); ?></h1>
        <p><?php echo wp_kses_post(get_theme_mod('about_us_text', 'Default About Us content.')); ?></p>
    </div>
    <div class="image">
        <?php 
        $about_us_image = get_theme_mod('about_us_image');
        if ($about_us_image) : ?>
            <img src="<?php echo esc_url($about_us_image); ?>" alt="About Us Image">
        <?php endif; ?>
    </div>
</div>




<!-- dives part -->
  <!-- <div class="container">
 
     <div class="box box1"> -->

              <!-- <h1>  <i class="fa-solid fa-graduation-cap"></i> Learn Somethig</h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis commodi inventore rerum, facere eligendi laborum aliquid quia accusamus quis itaque. Perspiciatis, facere autem! Deleniti veritatis sed, hic minima totam in fugiat explicabo repellat repellendus ipsum perferendis doloribus quod delectus expedita. 
        </div>
        <div class="box box2"> -->
       
         <!-- <h1>  <i class="fa-solid fa-building-columns"></i> Learn Something</h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem sequi assumenda corporis, officiis non sint eaque doloribus, vel nam quis, velit debitis quo beatae dolore magnam ad consectetur enim aperiam. Neque repudiandae adipisci quo sint minus est, exercitationem dolore ab? 
        </div>
        <div class="box box3"><h1> <i class="fa-solid fa-book"></i> Learn Something</h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta quas dignissimos amet voluptate sit corrupti quisquam ab voluptates voluptatem cum ullam, qui odit totam, architecto dolore praesentium perferendis! Vero dolorum debitis ipsam et facere architecto est quod, eveniet amet molestiae.</div>
    </div> -->



   
    <!-- <div class="container1">
        <div class="content">
       
            <h1>About Us</h1>
            <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum pariatur fuga eveniet soluta aspernatur rem, nam voluptatibus voluptate voluptates sapiente, inventore. Voluptatem, maiores esse molestiae.

<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Saepe a minima quod iste libero rerum dicta!</li>
<li>Voluptas obcaecati, iste porro fugit soluta consequuntur. Veritatis?</li>
<li>Ipsam deserunt numquam ad error rem unde, omnis.</li>
<li>Repellat assumenda adipisci pariatur ipsam eos similique, explicabo.</li>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quaerat harum facilis excepturi et? Mollitia!</p>
        </div>
        <div class="image">
            <img src="<?php echo get_theme_file_uri('images/66.png'); ?>" alt="Description of Image">
        </div>
    </div> -->


    
<!-- <div class="uon">More Fcilities</div>


  
    <div class="containerd">
        <div class="row">
            <div class="boxx">
                <img src="<?php echo get_theme_file_uri('images/building.PNG');?>" alt="Image 1">
                <p>Quiet Building</p>
            </div>
            <div class="boxx">
                <img src="<?php echo get_theme_file_uri('images/tchrz.png');?>" alt="Image 2">
                <p>Well Educated Teachers</p>
            </div>
            <div class="boxx">
                <img src="<?php echo get_theme_file_uri('images/convocation.png');?>" alt="Image 3">
                <p>Annual Convocation</p>
            </div>
        </div>
        <div class="row">
            <div class="boxx">
                <img src="<?php echo get_theme_file_uri('images/cafe.png');?>" alt="Image 4">
                <p>Beautifull Cafe</p>
            </div>
            <div class="boxx">
                <img src="<?php echo get_theme_file_uri('images/plg.png');?>" alt="Image 5">
                <p>Big Playground</p>
            </div>
            <div class="boxx">
                <img src="<?php echo get_theme_file_uri('images/sports.png');?>" alt="Image 6">
                <p>Annual Sports Gala</p>
            </div>
        </div>
    </div> -->

    <div class="uon">More Facilities</div>

<div class="containerd">
    <div class="row">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <div class="boxx">
                <?php 
                $image = get_theme_mod("facility_{$i}_image");
                if ($image) : ?>
                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_theme_mod("facility_{$i}_text", 'Image')); ?>">
                <?php else : ?>
                    <img src="<?php echo get_theme_file_uri('images/default.png'); ?>" alt="<?php echo esc_attr(get_theme_mod("facility_{$i}_text", 'Image')); ?>">
                <?php endif; ?>
                <p><?php echo esc_html(get_theme_mod("facility_{$i}_text", "Default text for facility $i.")); ?></p>
            </div>
        <?php endfor; ?>
    </div>
    <div class="row">
        <?php for ($i = 4; $i <= 6; $i++) : ?>
            <div class="boxx">
                <?php 
                $image = get_theme_mod("facility_{$i}_image");
                if ($image) : ?>
                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_theme_mod("facility_{$i}_text", 'Image')); ?>">
                <?php else : ?>
                    <img src="<?php echo get_theme_file_uri('images/default.png'); ?>" alt="<?php echo esc_attr(get_theme_mod("facility_{$i}_text", 'Image')); ?>">
                <?php endif; ?>
                <p><?php echo esc_html(get_theme_mod("facility_{$i}_text", "Default text for facility $i.")); ?></p>
            </div>
        <?php endfor; ?>
    </div>
</div>




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