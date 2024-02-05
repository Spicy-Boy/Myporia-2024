<div id="entry">

    <?php	the_post_thumbnail('thumbnail'); ?>
<center>
    <div class="entryTitleSingle">
        <?php the_title(); ?>
    </div>

    <div class="entryDate">
        <?php the_date(); ?>
    </div>
</center>
    <div class="content">
        <?php the_content(); ?>
    </div>

</div>