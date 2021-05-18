<?php include('../config.php'); ?>
<?php include('includes/admin_functions.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto+Mono" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <meta charset="UTF-8">
    <title>Pressy - Dashboard</title>
</head>

<body>
    <div class="container dashboard">
        <?php include('../includes/navbar.php') ?>

        <div class="stats">
            <a href="users.php" class="first btn" style="background-color: #0dcaf0;">
                <span>43</span> <br>
                <span>Newly registered users</span>
            </a>
            <a href="posts.php" class="btn" style="background-color: #0dcaf0;">
                <span>43</span> <br>
                <span>Published posts</span>
            </a>
            <a class="btn btn-primary" style="background-color: #0dcaf0;">
                <span>43</span> <br>
                <span>Published comments</span>
            </a>
        </div>

        <div class="buttons">
            <a href="users.php" class="btn btn-secondary">Add Users</a>
            <a href="posts.php" class="btn btn-secondary">Add Posts</a>
        </div>

    </div>

</body>

</html>