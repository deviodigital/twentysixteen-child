<?php
/**
 * Template Name: Builder
 * 
 * This is the template that displays full width, empty pages.
 * Please note that this is set up to use with a page builder
 * plugin of your choice. I recommend Beaver Builder :)
 *
 */

get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
	the_content();
endwhile;
?>

<?php get_footer(); ?>
