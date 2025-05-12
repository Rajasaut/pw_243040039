<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin") {
        $_SESSION['login'] = $username;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Username / Password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-container">
        <img src="" alt="" class="">
        <h2>Login Admin</h2>
        <?php if ($error) {
            echo "<p class='error'>$error</p>";
        } ?>
        <form method="POST">
            <div class="untuk-input">
                <label>Username :</label>
                <input type="text" name="username" required><br>
                <label>Password :</label>
                <input type="password" name="password" required><br>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>