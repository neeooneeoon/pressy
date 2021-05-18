<?php require_once('config.php') ?>
<?php require_once('includes/functions.php') ?>

<?php $posts = getPublishedPosts(); ?>
<?php 
	// Get posts under a particular categirt
	if (isset($_GET['category'])) {
		$cat_id = $_GET['category'];
		$posts = getPublishedPostsByCategory($cat_id);
	}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <title>Pressy</title>
</head>

<body>
    <div class="container">
        <?php include('includes/navbar.php'); ?>
        
        <div class="content">
            <h2 class="content-title">
                Articles on <u><?php echo getCategoryNameById($cat_id); ?></u>
            </h2>
            <hr>
            <?php foreach ($posts as $post) : ?>
                <div class="post" style="margin-left: 0px;">
                    <!-- <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt=""> -->
                    <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                        <div class="post_info">
                            <h3><?php echo $post['title'] ?></h3>
                            <div class="info">
                                <span><?php echo date("F j, Y ", strtotime($post["posted_at"])); ?></span>
                                <!-- <span class="read_more">Read more...</span> -->
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>

        <?php include('includes/footer.php') ?>
    </div>
</body>