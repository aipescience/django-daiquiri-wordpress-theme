<?php
/*
Template Name: News Template
*/
?>

<?php get_header(); ?>

<div class="container wordpress">
    <?php get_template_part('partials/loop', 'page'); ?>
    <?php get_template_part('partials/news'); ?>
</div>

<?php get_footer(); ?>
