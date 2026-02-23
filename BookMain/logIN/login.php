<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        session_start();
        session_destroy();
    ?>
    <center>
        <form action="" method="post">
            <table border="1" width="300">
                <tr>
                    <td colspan="2" align="center">กรุณาป้อนชื่อใช้งานและรหัสผ่าน</td>
                </tr>
                <tr>
                    <td>
                        User Name : <input type="text" name="userName">
                    </td>
                    <td>
                        Password : <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="OK">
                    </td>
                </tr>
            </table>
        </form>
    </center>
    
</body>
</html>