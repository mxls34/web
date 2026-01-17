<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electric Calculate</title>
</head>
<body>
    <form action="" method="get">
        <center>
            <h1>คำนวนไฟฟ้า</h1>
            <table border="1px" width="500px">
                <tr>
                    <td align="end">ใส่จำนวนหน่วยค่าไฟ : </td>
                    <td align="end"><input type="number" name="unitElect" required></td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <input type="submit" value="OK">
                        <input type="reset" value="Cancel">
                    </td>
                </tr>
            </table>
        </center>
    </form>
    <?php
        function electCal($unitElect){
            $unit = 0.0;
            $payBill = 0.0;
            if($unitElect >= 0 && $unitElect <= 50){
                $unit = 3.0;
                $payBill = $unit * $unitElect;
            }elseif($unitElect <= 100){
                $unit = 4.0;
                $payBill = $unit * $unitElect;
            }elseif($unitElect > 100){
                $unit = 5.0;
                $payBill = $unit * $unitElect;
            }

            return $payBill;
        }

        if(isset($_GET['unitElect'])){
            $unitElect = $_GET['unitElect'];

            $pay = electCal($unitElect);
            $result = "หน่วยค่าไฟ : $unitElect หน่วย<br>";
            $result .= "จำนวนเงินที่ต้องจ่าย : $pay บาท";

            echo $result;
        }
    ?>
</body>
</html>