<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area calculate</title>
</head>

<body>
    <?php
        if (isset($_GET['getArea'])) {

            if($_GET['getArea'] == "สี่เหลี่ยม") {
                header("Location: ractangle.php");
                exit;
            }elseif($_GET['getArea'] == "สามเหลี่ยม") {
                header("Location: triangle.php");
                exit;
            }elseif($_GET['getArea'] == "วงกลม") {
                header("Location: circle.php");
                exit;
            }
    }
    ?>
    <form action="" method="get">
        <table border="1" align="center" width="300">
            <tr>
                <td colspan="2" align="center">
                    <h3>การคำนวนพื้นที่</h3>
                </td>
            </tr>
            <tr>
                <td>เลือกพื้นที่</td>
                <td align="end">
                    <select name="getArea">
                        <option value="สี่เหลี่ยม">สี่เหลี่ยม</option>
                        <option value="สามเหลี่ยม">สามเหลี่ยม</option>
                        <option value="วงกลม">วงกลม</option>
                    </select>
                    <input type="submit" value="OK">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>