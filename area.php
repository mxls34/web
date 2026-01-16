<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area</title>
</head>
<body>
    <form action="phpConnect.php" method="post">
        <table border="1" align="center" width="500">
            <tr>
                <td colspan="2" align="center">การคำนวนพื้นที่</td>
            </tr>
            <tr>
                <td>เลือกพื้นที่</td>
                <td align="center">
                    <select name="typeArea">
                        <option>---เลือกพื้นที่---</option>
                        <option name="triangle" value="triangle">สามเหลี่ยม</option>
                        <option name="square" value="square">สี่เหลี่ยม</option>
                        <option name="circle" value="circle">วงกลม</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="OK">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>