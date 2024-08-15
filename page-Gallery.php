<?php
get_header();
?>
<div class="uon">More Facilities</div>

<div class="containerd">
    <div class="row">
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="boxx">
                <img src="<?php echo esc_url(get_theme_mod("mytheme2_gallery_image_$i")); ?>" alt="Image <?php echo $i; ?>">
                <p><?php echo esc_html(get_theme_mod("mytheme2_gallery_text_$i")); ?></p>
            </div>
        <?php endfor; ?>
    </div>
    <div class="row">
        <?php for ($i = 4; $i <= 6; $i++): ?>
            <div class="boxx">
                <img src="<?php echo esc_url(get_theme_mod("mytheme2_gallery_image_$i")); ?>" alt="Image <?php echo $i; ?>">
                <p><?php echo esc_html(get_theme_mod("mytheme2_gallery_text_$i")); ?></p>
            </div>
        <?php endfor; ?>
    </div>
</div>




<?php 
get_footer();
?>