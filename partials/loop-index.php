<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post">
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <p class="post-date">by <?php the_author(); ?> on <?php the_date(); ?></p>

        <div class="post-video">
           <?php daiquiri_the_video(320); ?>
           <?php daiquiri_the_image(320); ?>
        </div>

        <?php the_content(); ?>

        <?php if (comments_open(get_the_ID())): ?>
            <?php comments_template() ?>
        <?php endif ?>
    </div>
<?php endwhile; else: ?>
    <p>Sorry, no page found.</p>
<?php endif; ?>
