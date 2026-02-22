<?php
    $bookId = $_REQUEST['BookID'];

    $conn = mysqli_connect("localhost", "root", "", "bookstore");
    if (!$conn) die("ไม่สามารถติดต่อกับ MySQL ได้");

    mysqli_set_charset($conn, "utf8mb4");

    $sql = "DELETE FROM book WHERE BookID='$bookId'";
    mysqli_query($conn, $sql) or die("Delete ผิดพลาด: " . mysqli_error($conn));

    mysqli_close($conn);
    header("location:bookList1.php");
    exit();
?>
