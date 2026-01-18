<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
</head>

<body>
    <form action="" method="get">
        <table border="1" align="center">
            <tr>
                <td align="center" colspan="2">การคำนวนพื้นที่ สามเหลี่ยม</td>
            </tr>
            <tr>
                <td>½ × ฐาน × สูง</td>
                <td>
                    <input type="number" name="base" placeholder="ฐาน" required>
                    <input type="number" name="height" placeholder="สูง" required>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="OK">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
    </form>
        <?php
        if(isset($_GET['base']) && isset($_GET['height'])){
            $height = $_GET['base'];
            $base = $_GET['height'];
            
            echo "พื้นที่สามเหลี่ยม : ".(0.5) * $base * $height;
        }
    ?>

</body>

</html>