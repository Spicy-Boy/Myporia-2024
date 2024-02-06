

<div id="entry">

    <div class="entryTitle">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>

    <div class="entryDate">
        <?php the_date(); ?>
        <div>
            <?php foreach((get_the_category()) as $category){
                echo $category->name."<br>";
            }	?>
        </div>
    </div>

    <div class="content">
        <?php the_content(); ?>
    </div>

</div>