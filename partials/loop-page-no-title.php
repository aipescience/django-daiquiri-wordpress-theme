<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="page">
        <?php the_content(); ?>

        <?php edit_post_link('Edit Page', '<p>', '</p>'); ?>

        <?php if (comments_open(get_the_ID())): ?>
            <?php comments_template() ?>
        <?php endif ?>
    </div>
<?php endwhile; else: ?>
    <p>Sorry, no page found.</p>
<?php endif; ?>
