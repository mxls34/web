<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle</title>
</head>

<body>
    <form action="" method="get">
        <table border="1" align="center">
            <tr>
                <td align="center" colspan="2">การคำนวนพื้นที่ วงกลม</td>
            </tr>
            <tr>
                <td>รัศมี 3.14 * r * r </td>
                <td><input type="number" name="circle"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="คำนวน">
                    <input type="reset" value="clear">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_GET['circle'])) {
        $r = $_GET['circle'];

        echo "พื้นที่ของ r : " . (3.14) * $r * $r;
    }
    ?>

</body>

</html>