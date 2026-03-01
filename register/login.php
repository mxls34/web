<?php
session_start();
include("connect.php");

if (isset($_POST['btnLogin'])) {

    $userName = $_POST['userName'];
    $passwords = $_POST['passwords'];

    $sql = "SELECT * FROM login 
            WHERE userName='$userName' 
            AND passwords='$passwords'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $_SESSION['userName'] = $userName;
        header("Location: welcome.php");
    } else {
        echo "<script>alert('Login Failed');</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="box">
        <h2>Login</h2>
        <form method="post">
            <input type="text" name="userName" placeholder="Username" required>
            <input type="password" name="passwords" placeholder="Password" required>
            <button type="submit" name="btnLogin">Login</button>
            <p><a href="register.php">Go to Register</a></p>
        </form>
    </div>

</body>

</html>