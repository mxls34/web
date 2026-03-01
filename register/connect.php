<?php
$conn = mysqli_connect("localhost", "root", "", "sessions");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
