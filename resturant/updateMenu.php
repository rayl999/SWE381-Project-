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


$id = $_POST['id'];
$menu = addslashes(file_get_contents($_FILES['menu']['tmp_name']));

$sql = "UPDATE resturants SET menu = '$menu' WHERE id = $id";

$rs = mysqli_query($conn, $sql);
if ($rs) {
    header('location:resturantHomePage.php');

}else header('location:resturantHomePage.php');
$conn->close();
