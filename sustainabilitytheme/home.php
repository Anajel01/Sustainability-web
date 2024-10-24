<?php get_header(); ?>
<div class="container">
    <div class="content">
        <?php if(have_posts()): ?>

            <!-- This is section for blog -->
            <?php while(have_posts()): the_post() ?>
                <?php 
                $title = get_the_title();
                $date = get_the_date(); //get the date when post was written
                $author = get_the_author();  //get the name of the user who wrote the post
                $content(); = get_the_content(); 
                ?>
                <!-- HTML to print one blog entry preview -->

            <?php if (comments_open() || get_comments_number()): ?>
                    <?php comments_template(); ?>
            <?php endif; ?>
            
                <?php endwhile; ?>
            <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>