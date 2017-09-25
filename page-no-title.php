<?php
/*
Template Name: Default Template (no title)
*/
?>

<?php get_header(); ?>

<div class="container wordpress">
    <div class="row">
        <div class="col-md-9">
            <?php get_template_part('partials/loop', 'page-no-title'); ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
