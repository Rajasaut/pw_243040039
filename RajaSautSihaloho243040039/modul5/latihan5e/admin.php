<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="admin-container">
        <h2>Selamat Datang, Admin</h2>
        <img src="img//logo.jpg" alt="Background Admin" class="background">
        <a href="logout.php"><button>Logout</button></a>
    </div>
</body>

</html>