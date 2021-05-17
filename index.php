<?php require_once('includes/registration.php') ?>

<?php require_once('config.php') ?>
<?php require_once('includes/functions.php') ?>

<?php $posts = getPublishedPosts(); ?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto+Mono" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">
	<meta charset="UTF-8">
	<title>Pressy</title>
</head>

<body>
	<div class="container">

		<?php include('includes/navbar.php') ?>

		<?php include('includes/content.php') ?>

		<?php include('includes/user_section.php') ?>

		<?php include('includes/footer.php') ?>

	</div>
</body>

</html>