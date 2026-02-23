<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1</title>
</head>
<body>
    <?php
        session_start();
        session_destroy();
    ?>

    <form action="session_file2.php">
        กรุณาป้อนชื่อผู้ใช้ (username) แล้วคลิกปุ่ม OK <br><br>
        <input type="text" name="userName">
        <input type="submit" value="OK">
    </form>
</body>
</html>