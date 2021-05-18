<?php require_once('config.php') ?>
<?php require_once('includes/functions.php') ?>

<?php $posts = getPublishedPosts(); ?>
<?php
if (isset($_GET['post-slug'])) {
    $post = getPost($_GET['post-slug']);
}
$categories = getAllCategories();
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
            <div class="post-wrapper">
                <div class="full-post-div">
                    <?php if ($post['published'] == false) : ?>
                        <h2 class="post-title">Sorry... This post has not been published</h2>
                    <?php else : ?>
                        <h2 class="post-title"><?php echo $post['title']; ?></h2>
                        <div class="post-body-div">
                            <?php echo html_entity_decode($post['body']); ?>
                        </div>
                    <?php endif ?>
                </div>
                <!-- Comments -->
            </div>

            <?php include('includes/footer.php') ?>
        </div>
</body>