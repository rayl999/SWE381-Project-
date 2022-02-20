<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swe381project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    "connected";
}




$id = $_COOKIE['id'];

$sql = "DELETE FROM resturants WHERE id = $id";

$rs = mysqli_query($conn, $sql);
if ($rs) {
    header('location:/SWE381 Project/signout.php');
}else header('location:resturantHomePage.php');
$conn->close();
