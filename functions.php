<?php

function Myropia_scripts() {
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/blog.css' );
}

add_action( 'wp_enqueue_scripts', 'Myropia_scripts' );

add_theme_support( 'title-tag' );

function mytheme_custom_excerpt_length( $length ) {
    return 7;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

//add_theme_support( 'post-thumbnails' );

function pagination_nav() {
    global $wp_query;
 
    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="pagination"><?php next_posts_link( 'Older posts &rarr;' ); ?></div>
            <div class="pagination"><?php previous_posts_link( '&larr; Newer posts' ); ?></div>
        </nav>
<?php }
}