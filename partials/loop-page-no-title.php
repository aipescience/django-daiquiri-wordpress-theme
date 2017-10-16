<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post">
        <?php edit_post_link('<i class="fa fa-pencil"></i>', '<div class="pull-right">', '</div>'); ?>

        <?php the_content(); ?>

        <?php if (comments_open(get_the_ID())): ?>
            <?php comments_template() ?>
        <?php endif ?>
    </div>
<?php endwhile; else: ?>
    <p>Sorry, no page found.</p>
<?php endif; ?>
