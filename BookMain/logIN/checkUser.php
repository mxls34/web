    <?php
    session_start();

    $UserName = $_POST['userName'];
    $Password = $_POST['password'];

    $hostnamw = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'sessions';

    $conn = mysqli_connect($hostnamw, $username, $password, $dbname);

    if (! $conn) {
        die('ไม่สามารถติดต่อกับ MySQL ได้');
    }

    mysqli_select_db($conn, $dbname) or die('ไม่สามารถเลือกฐารข้อมูล sessions ได้');

    $sqltxt = "SELECT * FROM login WHERE userName = '$UserName' ";
    $result = mysqli_query($conn, $sqltxt);
    $rs = mysqli_fetch_array($result);

    if ($rs) {
        if ($rs["password"] == "password") {
            $_SESSION["username"] = $UserName;
            header("Location: welcome.php?userName=$UserName");
        } else {
            echo "<br>Password not match.";
            echo "<br><a href='login.php'>คลิกกลับไปเพื่อ login</a>";
        }
    } else {
        echo "NOT found User Name " . $UserName;
        echo "<br><a href='login.php'>คลิกกลับไปเพื่อ login</a>";
    }
?>