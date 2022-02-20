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


$logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));


$id = $_POST['id'];
$sql = "UPDATE resturants SET Logo = '$logo' WHERE id = $id";

$rs = mysqli_query($conn, $sql);
if ($rs) {
    header('location:resturantHomePage.php');
}else header('location:resturantHomePage.php');
$conn->close();
