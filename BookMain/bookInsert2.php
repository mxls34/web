<?php
    $conn = mysqli_connect("localhost", "root", "", "bookstore");
    if (!$conn) die("ไม่สามารถติดต่อกับ MySQL ได้");

    mysqli_set_charset($conn, "utf8mb4");

    $bookId = $_POST['BookID'];
    $bookName = $_POST['BookName'];
    $typeId = $_POST['TypeID'];
    $statusId = $_POST['StatusID'];
    $publish = $_POST['Publish'];
    $unitPrice = $_POST['UnitPrice'];
    $unitRent = $_POST['UnitRent'];
    $dayAmount = $_POST['DayAmount'];
    $bookDate = date("Y-m-d");

    $picture = "";
    if (!empty($_FILES['imageFile']['name'])) {
        $picture = $_FILES['imageFile']['name'];
        move_uploaded_file($_FILES['imageFile']['tmp_name'], "pictures/".$picture);
    }

    $sql = "INSERT INTO book 
    (BookID, BookName, TypeID, StatusID, Publish, UnitPrice, UnitRent, DayAmount, Picture, Bookdate)
    VALUES
    ('$bookId','$bookName','$typeId','$statusId','$publish','$unitPrice','$unitRent','$dayAmount','$picture','$bookDate')";

    mysqli_query($conn, $sql) or die("Insert ผิดพลาด: " . mysqli_error($conn));

    echo "<center><h2>บันทึกข้อมูลเรียบร้อย</h2>";
    echo "<a href='bookList1.php'>กลับหน้าแสดงรายการ</a></center>";

    mysqli_close($conn);
?>
