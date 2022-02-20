<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swe381project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
    "connected";
}
$rate = $_POST['flexRadioDefault'];
$txt = $_POST['Description'];
$customerID = $_COOKIE['id'];
$resturantID = $_COOKIE['resturantID'];
$rate2 = $_COOKIE['rate'];


$sql = "INSERT INTO `rates` (`customerID`, `resturantID`, `rate`, `txt`) VALUES ('$customerID','$resturantID' , '$rate', '$txt')";
$rs = mysqli_query($conn, $sql);
$rate2 = ($rate2+$rate)/2;
$sql2 = "UPDATE resturants SET rate = '$rate2' WHERE id = $resturantID";
$rs2 = mysqli_query($conn, $sql2);

if($rs)
{
    
	echo "Contact Inserted";
    header('location:CustomerHomePage.php');

}else header('location:CustomerHomePage.php');
$conn -> close();
?>