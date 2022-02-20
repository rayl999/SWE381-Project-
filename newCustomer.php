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
$TXTfirstName = $_POST['firstName'];
$TXTlastName = $_POST['lastName'];
$TXTEmail = $_POST['Email'];
$TXTPassword = $_POST['inputPassword'];
$sql = "INSERT INTO `customers` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES (NULL, '$TXTfirstName', '$TXTlastName', '$TXTEmail', '$TXTPassword')";
$rs = mysqli_query($conn, $sql);
if($rs)
{
    header('location:signinCust.php');
}else {
    header('location:SingUP.php?error=Something went wrong, please try again');

}
$conn -> close();
?>