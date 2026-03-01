<?php
session_start();
include("connect.php");

if (isset($_POST['btnRegister'])) {

    $userName = $_POST['userName'];
    $passwords = $_POST['passwords'];
    $status = "member";

    $sqlCheck = "SELECT * FROM login WHERE userName='$userName'";
    $resultCheck = mysqli_query($conn, $sqlCheck);

    if (mysqli_num_rows($resultCheck) > 0) {
        echo "<script>alert('Username already exists');</script>";
    } else {

        $sql = "INSERT INTO login(userName,passwords,statust)
                VALUES('$userName','$passwords','$status')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Register Success');</script>";
            header("Location: login.php");
        } else {
            echo "<script>alert('Register Failed');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="box">
        <h2>Register</h2>
        <form method="post">
            <input type="text" name="userName" placeholder="Username" required>
            <input type="password" name="passwords" placeholder="Password" required>
            <button type="submit" name="btnRegister">Register</button>
            <p><a href="login.php">Go to Login</a></p>
        </form>
    </div>

</body>

</html>