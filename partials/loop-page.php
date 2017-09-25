<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="page">
        <h1 class="page-title">
            <?php the_title(); ?>
        </h1>

        <?php edit_post_link('Edit Page', '<p>', '</p>'); ?>

        <?php the_content(); ?>

        <?php if (comments_open(get_the_ID())): ?>
            <?php comments_template() ?>
        <?php endif ?>
    </div>
<?php endwhile; else: ?>
    <p>Sorry, no page found.</p>
<?php endif; ?>
