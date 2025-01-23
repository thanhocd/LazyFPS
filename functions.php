<?php
/**
 * Theme Function.
 * 
 * @package LazyFPS
 * 
 */
function lazyfps_enqueue_scripts(){
    wp_enqueue_style()

}
 add_action('wp-enqueue_scripts', 'lazyfps_enqueue_scripts')
 ?>