<?php foreach($recent_posts as $post) : ?>
    <li>
        <a href="<?php echo get_permalink($post['ID']) ?>">
            <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?>
            <div><?php echo $post['post_title'] ?></div>
        </a>
    </li>
<?php endforeach; ?> 