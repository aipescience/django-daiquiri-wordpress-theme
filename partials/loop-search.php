<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post">
        <h3>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>

        <p>
            <?php
            $content = get_the_content();
            $trimmed_content = wp_trim_words($content, 40, '<a href="'. get_permalink() .'"> ... more</a>' );
            echo $trimmed_content;
            ?>
        </p>
    </div>

<?php endwhile; else: ?>
    <p>Sorry, no page found.</p>
<?php endif; ?>
