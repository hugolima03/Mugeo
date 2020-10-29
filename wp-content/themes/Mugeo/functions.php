<?php  
    add_theme_support( 'post-thumbnails' ) ;
    add_image_size ('homepage-slider-news', 250, 138.05, true);
    add_image_size ('homepage-news', 368, 218, true);
    
?>

<?php 
function wpdev_custom_excerpt_length( $length ) {
 return 22;
}
add_filter( 'excerpt_length', 'wpdev_custom_excerpt_length');

?>