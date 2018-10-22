<?php
/*
Template Name: News Template
*/
?>

<?php get_header(); ?>

<div class="wordpress">
    <div class="wide">
        <?php get_template_part('partials/loop', 'page'); ?>
        <div class="clearfix"></div>
        <?php get_template_part('partials/news'); ?>
    </div>
</div>

<?php get_footer(); ?>
