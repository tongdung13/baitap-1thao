<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: bai3.php");
} else {
    echo "Xin chào " . $_SESSION['user'];
}
?>

<!DOCTYPE html>

<html>
<head>
    <title>Home page</title>
</head>
<body>
<a href="bai3.php">Đăng xuất</a>
</body>
</html>