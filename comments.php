<div class="comments">
    <?php if (get_comments_number() > 0): ?>
    <h3>Comments</h3>
    <div>
        <?php wp_list_comments('style=div&callback=daiquiri_comment'); ?>
    </div>
    <?php endif ?>

    <p>
        <a href="" id="comment-open-write-link">Write a comment</a>
        <a href="" id="comment-close-write-link">Close comment form</a>

        <script>
            $(document).ready(function() {
                if (window.location.hash.indexOf('#comment') != -1 ||
                    window.location.hash.indexOf('#respond') != -1) {

                    $('#comment-open-write-link').hide();
                } else {
                    $('#respond').hide();
                    $('#comment-close-write-link').hide();
                }
                $('#comment-open-write-link').on('click', function() {
                    $('#respond').show();
                    $('#comment-open-write-link').hide();
                    $('#comment-close-write-link').show();
                    return false;
                });
                $('#comment-close-write-link').on('click', function() {
                    $('#respond').hide();
                    $('#comment-open-write-link').show();
                    $('#comment-close-write-link').hide();
                    return false;
                });
            });
        </script>
    </p>

    <?php
    comment_form(array(
        'title_reply' => 'Write a comment',
        'comment_notes_after' => '<p class="comment-help><span class="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ), ' <code>' . trim(allowed_tags()) . '</code>' ) . '.</span></p>',
        'fields' => array(
            'author' => '
                <div class="form-group comment-form-author">
                    <label class="control-label" for="inputAuthor">' . __('Name', 'domainreference') . '</label>
                    <input id="inputAuthor" class="form-control" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' />
                </div>',
            'email' => '
                <div class="form-group comment-form-email">
                    <label class="control-label" for="inputEmail">' . __('Email', 'domainreference') . '</label>
                    <input id="inputEmail" class="form-control" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' />
                    <span class="help-block">Your email address will not be published.</span>
                </div>',
            'url' => '
                <div class="form-group comment-form-url">
                    <label class="control-label" for="inputUrl">' . __('Website', 'domainreference') . ' (not required)</label>
                    <input id="inputUrl" class="form-control" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30"' . $aria_req . ' />
                </div>'
        ),
        'comment_field' => '
            <div class="form-group comment-form-comment">
                <label class="control-label" for="inputComment">' . _x('Comment', 'noun') . '</label>
                <textarea id="inputComment" class="form-control" name="comment" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30"' . $aria_req . ' rows="8"></textarea>
            </div>',
        'class_submit' => 'btn btn-primary'
    ));
    ?>
</div>
