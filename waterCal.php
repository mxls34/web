<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>water Calculate</title>
</head>
<body>
    <form action="" method="get">
        <h1>คำนวนต่าน้ำประปา</h1>
        จำนวนหน่วยน้ำ : <input type="number" name="inputWaterBill" id="inputWaterBill" required>
        <input type="submit" value="คำนวน">
    </form><hr>
    <?php
        function calculateBill($unit, $resultCal, $totalCal, $output){
            if($unit <= 10){
                $totalCal += $resultCal = $unit * 8;
                $output = "0 - 10 หน่วย : $unit x 8 = $resultCal บาท";

                echo "น้ำทั้งหมด : $unit หน่วย";
                echo "$output";
                echo "รวมทั้งหมด : $totalCal บาท";

            }elseif($unit <= 20){
                $totalCal += $resultCal = 10 * 8 + ($unit - 10) * 10;
                $output = "10 - 20 หน่วย : $unit x 10 = $resultCal บาท";

                echo "น้ำทั้งหมด : $unit หน่วย<br>";
                echo "$output <br>";
                echo "รวมทั้งหมด : $totalCal บาท<br>";

            }elseif($unit > 20){
                $totalCal += $resultCal = 10 * 8 + 100 + ($unit - 20) * 12;
                $output = "20 หน่วยขึ้นไป : $unit x 12 = $resultCal บาท";
                
                echo "น้ำทั้งหมด : $unit หน่วย<br>";
                echo "$output <br>";
                echo "รวมทั้งหมด : $totalCal บาท<br>";
            }

        }

        if(isset($_GET['inputWaterBill'])){ // isset ว่างมั้ย ไม่ว่างทำ ถ้ามี value ทำ ไม่มีไป else
            $waterBill = $_GET['inputWaterBill'];

            $resultCal = 0;
            $totalCal = 0;
            $output = "";

            calculateBill($waterBill, $resultCal, $totalCal, $output);
        }         
    ?>

</body>
</html>