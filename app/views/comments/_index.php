<?php

/**
 * 
 * ./app/views/comments/_index.php
 * 
 */
?>

<h3 class="mb-5"><?php echo count($comments); ?> Comments</h3>
<ul class="comment-list">
    <?php foreach($comments as $comment): ?>
    <li class="comment">
        <div class="comment-body">
            <h3><?php echo $comment['pseudo']; ?></h3>
            <div class="meta mb-3"><?php echo \Core\Functions\formated_date($comment['created_at'], 'F d, Y \a\t g:i A'); ?></div>
            <p><?php echo $comment['content']; ?></p>
        </div>
    </li>
    <?php endforeach; ?>
</ul>