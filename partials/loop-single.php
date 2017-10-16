<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post">
        <?php
            daiquiri_the_video(700);
            daiquiri_the_image(700);
        ?>

        <h1 class="post-title">
            <?php edit_post_link('<i class="fa fa-pencil"></i>', '<div class="pull-right">', '</div>'); ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>

        <p class="post-date">by <?php the_author(); ?> on <?php the_date(); ?></p>

        <?php the_content(); ?>

        <p class="post-nav">
            <?php echo get_previous_posts_link(); ?>
            <?php previous_post_link('Previous post: %link&nbsp&nbsp&nbsp'); ?>
            <?php next_post_link('Next post: %link'); ?>
        </p>

        <?php if (comments_open(get_the_ID())): ?>
            <?php comments_template(); ?>
        <?php endif ?>
    </div>
<?php endwhile; else: ?>
    <p>Sorry, no post was found.</p>
<?php endif; ?>
