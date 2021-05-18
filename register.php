<?php require_once('config.php') ?>
<?php require_once('includes/registration.php') ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <title>Pressy - Registration
    </title>
</head>

<body>
    <div class="container">
        <?php include('includes/navbar.php'); ?>

        <div style="width: 40%; margin: 20px auto;">
            <form method="post" action="register.php">
                <h2>Register on Pressy</h2>
                <?php include(ROOT_PATH . '/includes/errors.php') ?>
                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
                <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
                <input type="password" name="password_1" placeholder="Password">
                <input type="password" name="password_2" placeholder="Password confirmation">
                <button type="submit" class="btn" name="reg_user">Register</button>
                <p>
                    Already a member? <a href="login.php">Sign in</a>
                </p>
            </form>
        </div>
        <?php include('includes/footer.php') ?>
    </div>

    
</body>