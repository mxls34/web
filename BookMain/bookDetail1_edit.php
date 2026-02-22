<html>

<head>
    <title>แก้ไขข้อมูลหนังสือ</title>
</head>

<body>
    <?php
        $bookId = $_GET['BookID'];
        
        $conn = mysqli_connect("localhost", "root", "", "bookstore");
        if (!$conn) die("ไม่สามารถติดต่อกับ MySQL ได้");
        mysqli_set_charset($conn, "utf8mb4");
        
        $sql = "SELECT * FROM book WHERE BookID='$bookId'";
        $result = mysqli_query($conn, $sql);
        $rs = mysqli_fetch_assoc($result);
        
        function getTypeSelect($selected)
        {
            global $conn;
            $sql = "SELECT * FROM typebook ORDER BY TypeID";
            $result = mysqli_query($conn, $sql);
            
            while ($row = mysqli_fetch_assoc($result)) {
                $sel = ($row['TypeID'] == $selected) ? "selected" : "";
                echo '<option value="' . $row['TypeID'] . '" ' . $sel . '>' . $row['TypeName'] . '</option>';
                }
                }
                
                function getStatusSelect($selected)
                {
                    global $conn;
                    $sql = "SELECT * FROM statusbook ORDER BY StatusID";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $sel = ($row['StatusID'] == $selected) ? "selected" : "";
                        echo '<option value="' . $row['StatusID'] . '" ' . $sel . '>' . $row['StatustName'] . '</option>';

                    }
                }
                        
    ?>

    <center>
        <form enctype="multipart/form-data" method="post" action="bookUpdate1.php">
            <input type="hidden" name="BookID" value="<?php echo $rs['BookID']; ?>">
            <input type="hidden" name="oldPicture" value="<?php echo $rs['Picture']; ?>">

            <table border="1">
                <tr>
                    <th colspan="2">แก้ไขข้อมูลหนังสือ</th>
                </tr>

                <tr>
                    <td>รหัสหนังสือ</td>
                    <td><?php echo $rs['BookID']; ?></td>
                </tr>

                <tr>
                    <td>ชื่อหนังสือ</td>
                    <td><input type="text" name="BookName" value="<?php echo $rs['BookName']; ?>"></td>
                </tr>

                <tr>
                    <td>ประเภทหนังสือ</td>
                    <td>
                        <select name="TypeID">
                            <?php getTypeSelect($rs['TypeID']); ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>สถานะหนังสือ</td>
                    <td>
                        <select name="StatusID">
                            <?php getStatusSelect($rs['StatusID']); ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>สำนักพิมพ์</td>
                    <td><input type="text" name="Publish" value="<?php echo $rs['Publish']; ?>"></td>
                </tr>

                <tr>
                    <td>ราคาซื้อ</td>
                    <td><input type="text" name="UnitPrice" value="<?php echo $rs['UnitPrice']; ?>"></td>
                </tr>

                <tr>
                    <td>ราคาเช่า</td>
                    <td><input type="text" name="UnitRent" value="<?php echo $rs['UnitRent']; ?>"></td>
                </tr>

                <tr>
                    <td>จำนวนวันที่เช่า</td>
                    <td><input type="text" name="DayAmount" value="<?php echo $rs['DayAmount']; ?>"></td>
                </tr>

                <tr>
                    <td>รูปภาพเดิม</td>
                    <td>
                        <?php
                        if ($rs['Picture'] != "") {
                            echo "<img src='pictures/" . $rs['Picture'] . "' width='120'><br>";
                        }
                        ?>
                        <input type="file" name="imageFile">
                    </td>
                </tr>

            </table>
            <br>
            <input type="submit" value="บันทึกการแก้ไข">
        </form>

        <br><a href="bookList1.php">กลับหน้าแสดงรายการ</a>

    </center>
    <?php
        mysqli_close($conn);
    ?>
    
</body>

</html>