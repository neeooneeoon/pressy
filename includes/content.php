<div class="content">
    <!-- <h2 class="content-title">Recent Posts</h2> -->
    <hr>
    <?php foreach ($posts as $post) : ?>
        <div class="post" style="margin-left: 0px;">

            <?php if (isset($post['category']['name'])) : ?>
                <a href="<?php echo BASE_URL . 'filtered_posts.php?category=' . $post['category']['id'] ?>" class="btn category">
                    <?php echo $post['category']['name'] ?>
                </a>
            <?php endif ?>

            <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                <div class="post_info">
                    <h3><?php echo $post['title'] ?></h3>
                    <div class="info">
                        <span><?php echo date("F j, Y ", strtotime($post["posted_at"])); ?></span>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach ?>
</div>