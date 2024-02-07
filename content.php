<!-- this gets displayed on the index page, list of blog posts -->
<article class="content-entry">
    <div class="content-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <div class="content-date">
        <?php
            echo get_the_date()
        ?>
    </div>
    <div class="content-categories">
        <?php
            foreach((get_the_category()) as $category)
            {
                echo $category->name."<br>";
            }
        ?>
    </div>
    <div class="content-content">
        <?php the_content(); ?>
    </div>
</article>
