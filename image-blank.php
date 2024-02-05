<?php /* Template Name: image-blank */ ?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

	get_template_part( 'content-blank', get_post_format() );

endwhile; endif;
?>