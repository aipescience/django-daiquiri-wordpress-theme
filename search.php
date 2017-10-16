<?php get_header(); ?>

<div class="wordpress">
    <div class="page row">
        <div class="col-md-9">
            <h2>
                Search results for "<?php
                echo $_GET['s'];
                ?>".
            </h2>
            <p>
                There are <?php
                global $wp_query;
                echo $wp_query->found_posts;
                ?> page(s) matching the search query.
            </p>

            <?php get_template_part('partials/loop', 'post-single'); ?>
        </div>
        <div class="sidebar col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
