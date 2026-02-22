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
    $oldPicture = $_POST['oldPicture'];

    $picture = $oldPicture;

    if (!empty($_FILES['imageFile']['name'])) {
        $picture = $_FILES['imageFile']['name'];
        move_uploaded_file($_FILES['imageFile']['tmp_name'], "pictures/".$picture);
    }

    $sql = "UPDATE book SET
    bookName='$bookName',
    typeId='$typeId',
    statusId='$statusId',
    publish='$publish',
    unitPrice='$unitPrice',
    unitRent='$unitRent',
    dayAmount='$dayAmount',
    picture='$picture'
    WHERE BookID='$bookId'";

    mysqli_query($conn, $sql) or die("Update ผิดพลาด: " . mysqli_error($conn));

    mysqli_close($conn);

    header("location:bookList1.php");
    exit();
?>
