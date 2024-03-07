<!-- this gets displayed on individual post pages -->
<!-- called from single.php! -->
<article class="content-entry-single">

    <div class="content-title-wrapper">
        <div class="content-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
        <div class="content-date padding-10px">
            <?php
                echo get_the_date()
            ?>
        </div>
    </div>

    <div class="content-content">
        <?php the_content(); ?>
    </div>
</article>