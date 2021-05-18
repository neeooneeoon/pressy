<?php include('../config.php'); ?>
<?php include('includes/functions.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto+Mono" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>
    <link rel="stylesheet" href="../css/admin.css">
    <meta charset="UTF-8">
    <title>Pressy - Users</title>
</head>

<body>
    <div class="container content">
        <?php include('../includes/navbar.php') ?>
        <?php include('includes/menu.php') ?>

        <!-- Middle form - to create and edit  -->
        <div class="action">
            <h2 class="page-title">Create/Update User</h2>

            <form method="post" action="<?php echo BASE_URL . 'admin/users.php'; ?>">

                <!-- validation errors for the form -->
                <?php include(ROOT_PATH . '/includes/errors.php') ?>

                <!-- if editing user, the id is required to identify that user -->
                <?php if ($isEditingUser === true) : ?>
                    <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
                <?php endif ?>

                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
                <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="passwordConfirmation" placeholder="Password confirmation">
                <select name="role">
                    <option value="" selected disabled>Assign role</option>
                    <?php foreach ($roles as $key => $role) : ?>
                        <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
                    <?php endforeach ?>
                </select>

                <!-- if editing user, display the update button instead of create button -->
                <?php if ($isEditingUser === true) : ?>
                    <button type="submit" class="btn" name="update_admin">UPDATE</button>
                <?php else : ?>
                    <button type="submit" class="btn" name="create_admin">Save User</button>
                <?php endif ?>
            </form>
        </div>
        <!-- // Middle form - to create and edit -->

        <!-- Display records from DB-->
        <div class="table-div">
            <!-- Display notification message -->
            <?php include(ROOT_PATH . '/includes/messages.php') ?>

            <?php if (empty($admins)) : ?>
                <h1>No admins in the database.</h1>
            <?php else : ?>
                <table class="table">
                    <thead>
                        <th>N</th>
                        <th>Admin</th>
                        <th>Role</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($admins as $key => $admin) : ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td>
                                    <?php echo $admin['username']; ?>, &nbsp;
                                    <?php echo $admin['email']; ?>
                                </td>
                                <td><?php echo $admin['role']; ?></td>
                                <td>
                                    <a class="fa fa-pencil btn edit" href="users.php?edit-admin=<?php echo $admin['id'] ?>">
                                    </a>
                                </td>
                                <td>
                                    <a class="fa fa-trash btn delete" href="users.php?delete-admin=<?php echo $admin['id'] ?>">
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php endif ?>
        </div>
        <!-- // Display records from DB -->

    </div>

</body>

</html>