<!DOCTYPE htmL>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="app.css">
    <link rel="script" href="app.js">
    <link rel="stylesheet" href="style.css">
    <title>"КХ ТУМАН"</title>
    <link href="connect.php">
</head>
<body>
<?php
include 'index.php';
require ('connect.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $smsg = "Вы зарегистрированы ";
    } else {
        $fsmsg = "Логин или почта уже зарегистрированы";
    }
}
?>
<div class="container">
    <form class="form-signit" method="POST">
        <h2>Registration</h2>
        <?php if (isset($smsg)) { ?>
            <div class="alert alert-success" role="alert"><?php echo $smsg; ?></div><?php } ?>
        <?php if (isset($fsmsg)) { ?>
            <div class="alert alert-danger" role="alert"><?php echo $fsmsg; ?></div><?php } ?>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button type="button" class="btn btn-warning">Регистрация</button>
    </form>
</div>
</body>
</html>