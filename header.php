<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php wp_head();?>
    </head>
    <body>
        <div id="center">
            <div class="heading">
                <div class="title">
                    <a href="<?php echo get_bloginfo( 'wpurl' );?>">AAAAHH</a>
                </div>
                    <div class="navlinks">
                        <a href="<?php echo esc_url( get_permalink(8) ); ?>">Posts</a>
                        /
                        <a href="<?php echo esc_url( get_permalink(10) ); ?>">About</a>
                    </div>
            </div>