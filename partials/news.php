<div class="news">
    <h3>Recent News</h3>
    <ul class="list-unstyled">
        <?php foreach (wp_get_recent_posts() as $post): ?>
        <?php $teaser = explode('<!--more-->',$post["post_content"])[0]; ?>

        <li class="news-entry">
            <div class="row">
                <div class="col-md-2 news-entry-date">
                    <?php echo date('F jS, Y', strtotime($post["post_date"])); ?>
                </div>
                <div class="col-md-10 news-entry-content">
                    <p>
                        <a href="<?php echo get_permalink($post["ID"]) ?>"><?php echo $post["post_title"]; ?></a>
                    </p>
                    <p>
                        <?php echo $teaser; ?>
                    </p>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
