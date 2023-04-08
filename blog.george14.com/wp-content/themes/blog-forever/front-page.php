<?php
/**
 * The template for displaying home page.
 * @package Blog Forever
 */

if ( 'posts' != get_option( 'show_on_front' ) ) { 
    get_header(); ?>

    <div class="wrapper section-gap">
        <?php include( get_page_template() ); ?>
    </div>
    
    <?php get_footer();
} 
elseif ('posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} 