<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s2</title>
</head>
<body>
    <?php
        session_start();
        $userName = $_GET['userName'];
        $_SESSION['userName'] = $userName;
    ?>

    ชื่อผู้ใช้ที่ป้อนมาให้คือ

    <?php
        echo $_SESSION['userName'];
    ?>

    <br><br><a href="session_file3.php">คลิกตรงนี้เพื่อไปยัง session_file3.php</a>

</body>
</html>