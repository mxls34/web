<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Calculator</title>
</head>
<body>
    <form action="" method="get">
        <h1>การคำนวณ Tax</h1>
        รายได้ต่อปี : <input type="number" name="inputSalary" id="inputSalary" required>
        <input type="submit" value="คำนวนภาษี"><hr>
    </form>
    <?php
        function taxCal($salary){
            $tax = 0.0;
            if($salary <= 150000){
                $tax = 0;
            }elseif($salary <= 300000){
                $tax = 0.05;
            }elseif($salary <= 500000){
                $tax = 0.10;
            }else{
                $tax = 0.15;
            }

            return $tax;
        }

        $result = "";
        if(isset($_GET['inputSalary'])){
            $salary = $_GET['inputSalary'];
            $getTax = $salary * taxCal($salary);

            $result = "รายได้ต่อปี : $salary บาท<br>";
            $result .= "ภาษีที่ต้องจ่าย : $getTax บาท";
        }
    ?>
    <?= $result?>
</body>
</html>