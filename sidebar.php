<div class="sidebar">
    <?php if (is_active_sidebar('sidebar')) {
        echo '<div id="sidebar"><ul class="unstyled">';
        dynamic_sidebar('sidebar');
        echo '</ul></div>';
    } ?>
</div>
