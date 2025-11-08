<?php
// hq/index.php - Simple backend home for paszo V2
session_start();
if (!($_SESSION['hq_logged_in'] ?? false)) {
    header('Location: login.php');
    exit;
}
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HQ Backend - paszo V2</title>
</head>
<body>
    <h2>Welcome to HQ Backend</h2>
    <form method="get">
        <button type="submit" name="logout" value="1">Logout</button>
    </form>
</body>
</html>
