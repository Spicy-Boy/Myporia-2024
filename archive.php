<?php /* Template Name: archive */ ?>
<?php get_header(); ?>

<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
<center>
    <h1 class="archiveHeader">
        - Archive -
    </h1>
</center>

<div class="archiveBlock"> 
    <div id="container">
        <div id="one">
            Date
        </div>
        <div id="two">
            Title
        </div>
        <div id="three">
            Type
        </div>
    </div>
    
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <div id="container">
            <div id="one">
                <?php the_date(); ?>
            </div>
            <div id="two">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div id ="three">
                <?php foreach((get_the_category()) as $category){
                    echo $category->name."<br>";
                }	?>
            </div>
        </div>
    <?php endwhile; ?>
    <!-- end of the loop -->
</div> 

<?php get_footer(); ?>