<!--
http://www.aaaahh.net/you-know-what-time-it-is/
-->
<?php get_header(); ?>

<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
	    get_template_part( 'content', get_post_format() );
	endwhile; ?>
    <?php pagination_nav(); ?>
	
<?php endif; ?>

<?php get_footer(); ?>

