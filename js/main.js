function my_theme_enqueue_scripts() {
    wp_enqueue_script('my-slider-script', get_template_directory_uri() . '/js/slider.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
(function($) {
    $(document).ready(function() {
        var currentIndex = 0;
        var slides = $('.slide');
        var slideCount = slides.length;

        function showSlide(index) {
            slides.css('opacity', '0');
            slides.eq(index).css('opacity', '1');
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slideCount;
            showSlide(currentIndex);
        }

        setInterval(nextSlide, 3000);
        showSlide(currentIndex);
    });
})(jQuery);