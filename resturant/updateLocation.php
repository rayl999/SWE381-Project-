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

$lat = $_POST['lat'];
$lng = $_POST['lng'];


$id = $_COOKIE['id'];
$sql = "UPDATE resturants SET lat = '$lat',lng = '$lng' WHERE id = $id";

$rs = mysqli_query($conn, $sql);
if ($rs) {
    header('location:resturantHomePage.php');
}else header('location:resturantHomePage.php');
$conn->close();
