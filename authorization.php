<!DOCTYPE htmL>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="app.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>"КХ ТУМАН"</title>
</head>
<body>
<?php
include 'index.php';
require_once 'connect.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($connection, "SELECT username, password FROM users WHERE ( username = '$username' AND password = '$password')");
    $kk = mysqli_fetch_assoc($result);
    print_r($kk);
    if ($kk) {
        $smsg = "Добро пожаловать";
    }
    else {
        $fsmsg = "неправильный логин или пароль";
    }
}
?>
<div class="container">
    <form class="form-signit" method="POST">
        <h2>Authorization </h2>
        <?php if (isset($smsg)) { ?>
            <div class="alert alert-success" role="alert"><?php echo $smsg; ?></div><?php } ?>
        <?php if (isset($fsmsg)) { ?>
            <div class="alert alert-danger" role="alert"><?php echo $fsmsg; ?></div><?php } ?>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button type="button" class="btn btn-outline-light me-2">Вход</button>
    </form>
</div>
</body>
</html>