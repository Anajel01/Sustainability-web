<!-- This code is here to decide how the comments are rendered and how to desplay a form -->
<div id="comments" class="comments-area">
<?php if (have_comments()) : ?>
    <h2 class="comments-title">Comments:</h2>
    <?php wp_list_comments(); ?>

<?php endif; ?>

<?php if(comments_open()): ?>
    <?php comment_form(); ?>

<?php else: ?>
        <p class="no-comments">Comments are closed</p>
<?php endif; ?>

</div>


























