<?php
function fabulous_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400&family=Super+Sunday&display=swap', false);
}
add_action('wp_enqueue_scripts', 'fabulous_enqueue_styles');
?>
