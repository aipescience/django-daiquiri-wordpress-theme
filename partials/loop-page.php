<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="page">
        <h2 class="page-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <?php edit_post_link('Edit Page', '<p>', '</p>'); ?>

        <?php the_content(); ?>

        <?php if (comments_open(get_the_ID())): ?>
            <?php comments_template() ?>
        <?php endif ?>
    </div>
<?php endwhile; else: ?>
    <p>Sorry, no page found.</p>
<?php endif; ?>
