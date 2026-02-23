<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s3</title>
</head>
<body>
    <?php
        session_start();
        echo 'ชื่อผู้ใช้ของคุณยังคงเป็น'.$_SESSION['userName'];
    ?>

    <br><br><a href="session_file1.php">คลิกตรงนี้เพื่อไปยังไฟล์ session_file1.php</a>

</body>
</html>