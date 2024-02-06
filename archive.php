<?php /* Template Name: archive */ ?>
<?php get_header(); ?>

<main>
    <h2 id="archive-name">- Archive -</h2>

    <section id="archive-labels">
        <div id="archive-label-date">
            <h6>Date</h6>
        </div>
        <div id="archive-label-title">
            <h6>Title</h6>
        </div>
        <div id="archive-label-category">
            <h6>Category</h6>
        </div>
    </section>

    <!-- the loop -->
    
    <?php 
        $wpb_all_query = new WP_Query('post_type=post&post_status=publish&posts_per_page=-1');
        while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
        // var_dump(get_the_date(), get_the_category());
    ?>
    
    <div class="archive-entry">
        <div class="archive-date">
            <?php 
                echo get_the_date()
            ?>
        </div>
        <div class="archive-mobile-title-date-container">
            <div class="archive-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="archive-mobile-date">
                <?php 
                    echo get_the_date()
                ?>
            </div>
        </div>
        <div class="archive-category">
            <?php 
                foreach((get_the_category()) as $category)
                {
                    echo $category->name."<br>";
                }
            ?>
        </div>
    </div>
    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
