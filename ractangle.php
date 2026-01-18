<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle</title>
</head>

<body>
    <form action="" method="get">
        <table border="1" align="center">
            <tr>
                <td colspan="2" align="center">การคำนวนพื้นที่ สี่เหลี่ยม</td>
            </tr>
            <tr>
                <td>ด้าน 1 : <input type="number" name="getSide1" required></td>
                <td>ด้าน 2 : <input type="number" name="getSide2" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="OK">
                    <input type="reset" value="Cancel">
                    <a href="area3.php">กลับ</a>
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_GET['getSide1']) && isset($_GET['getSide2'])){
            $side1 = $_GET['getSide1'];
            $side2 = $_GET['getSide2'];
            echo "พื้นที่สี่เหลี่ยม : ".$side1 * $side2;
        }
    ?>

</body>

</html>