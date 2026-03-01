<?php
session_start();

if (!isset($_SESSION['userName'])) {
    header("Location: login.php");
    exit();
}

$userName = $_SESSION['userName'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="box">
        <h2>Welcome</h2>
        <p>Hello, <?php echo $userName; ?></p>
        <a href="index.html">Next</a>
    </div>

</body>

</html>