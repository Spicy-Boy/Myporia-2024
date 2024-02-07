<?php /* Template Name: adventure-homepage */ ?>
<?php 
get_template_part( 'content-adventure-header-homepage' ); 
?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

	get_template_part( 'content-adventure', get_post_format() );

endwhile; endif;
?>

<?php get_footer(); ?>
