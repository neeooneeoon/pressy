<?php require_once('config.php') ?>
<?php require_once('includes/registration.php') ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <title>Pressy - Registration
    </title>
</head>

<body>
    <div class="container">
        <?php include('includes/navbar.php'); ?>

        <div style="width: 40%; margin: 20px auto;">
            <form method="post" action="login.php">
                <h2>Login</h2>
                <?php include(ROOT_PATH . '/includes/errors.php') ?>
                <input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" class="btn" name="login_btn">Login</button>
                <p>
                    Not yet a member? <a href="register.php">Sign up</a>
                </p>
            </form>
        </div>
        <?php include('includes/footer.php') ?>
    </div>
</body>