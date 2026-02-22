<html>

<head>
    <title>bookList1.php</title>
</head>

<body>

    <?php
        // ================== เชื่อมต่อฐานข้อมูล ==================
        $conn = mysqli_connect("localhost", "root", "", "bookstore");
        if (!$conn) 
            die("ไม่สามารถติดต่อกับ MySQL ได้");

        mysqli_set_charset($conn, "utf8mb4");

        // ================== ดึงข้อมูลหนังสือ ==================
        $sql = "SELECT * FROM book ORDER BY BookID";
        $result = mysqli_query($conn, $sql);
    ?>

    <center>

        <h3>รายชื่อหนังสือ</h3>

        <!-- ปุ่มเพิ่มข้อมูล -->
        <table width="500">
            <tr>
                <td align="left">
                    <a href="bookInsert1.php">เพิ่มรายการหนังสือ</a>
                </td>
            </tr>
        </table>

        <br>

        <!-- ตารางแสดงข้อมูล -->
        <table width="700" border="1">
            <tr align="center">
                <th width="50">ลำดับ</th>
                <th width="100">รหัสหนังสือ</th>
                <th width="250">ชื่อหนังสือ</th>
                <th width="80">แก้ไข</th>
                <th width="80">ลบ</th>
            </tr>

            <?php
                $row = 1;

                // วนลูปแสดงข้อมูลแต่ละแถว
                while ($rs = mysqli_fetch_assoc($result)) {
            ?>
                <tr align="center">
                    <td><?php echo $row; ?></td>

                    <!-- คลิกที่รหัส เพื่อไปหน้าแก้ไข -->
                    <td>
                        <a href="bookDetail1_edit.php?BookID=<?php echo $rs['BookID']; ?>">
                            <?php echo $rs['BookID']; ?>
                        </a>
                    </td>

                    <td align="left"><?php echo $rs['BookName']; ?></td>

                    <!-- ปุ่มแก้ไข (แก้ถูกต้องแล้ว) -->
                    <td>
                        <a href="bookDetail1_edit.php?BookID=<?php echo $rs['BookID']; ?>">
                            [แก้ไข]
                        </a>
                    </td>

                    <!-- ปุ่มลบ -->
                    <td>
                        <a href="bookDelete1.php?BookID=<?php echo $rs['BookID']; ?>"
                            onclick="return confirm('ยืนยันการลบข้อมูลหนังสือ <?php echo $rs['BookName']; ?> ?')">
                            [ลบ]
                        </a>
                    </td>
                </tr>
            <?php
                    $row++;
                }
            ?>

        </table>

        <br><br>
        <a href="bookInsert1.php">Back to menu</a>

    </center>

    <?php
    // ปิดการเชื่อมต่อ
    mysqli_close($conn);
    ?>

</body>

</html>