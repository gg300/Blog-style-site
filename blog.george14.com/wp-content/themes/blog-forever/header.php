<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog Forever
 */
/**
* Hook - blog_forever_action_doctype.
*
* @hooked blog_forever_doctype -  10
*/
do_action( 'blog_forever_action_doctype' );
?>
<head>
<?php
/**
* Hook - blog_forever_action_head.
*
* @hooked blog_forever_head -  10
*/
do_action( 'blog_forever_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<?php

/**
* Hook - blog_forever_action_before.
*
* @hooked blog_forever_page_start - 10
*/
do_action( 'blog_forever_action_before' );

/**
*
* @hooked blog_forever_header_start - 10
*/
do_action( 'blog_forever_action_before_header' );

/**
*
*@hooked blog_forever_site_branding - 10
*@hooked blog_forever_header_end - 15 
*/
do_action('blog_forever_action_header');

/**
*
* @hooked blog_forever_content_start - 10
*/
do_action( 'blog_forever_action_before_content' );

/**
 * Banner start
 * 
 * @hooked blog_forever_banner_header - 10
*/
do_action( 'blog_forever_banner_header' );  
