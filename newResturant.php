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
$txtNAME = $_POST['ResturantName'];
$Description = $_POST['Description'];
$email = $_POST['email'];

$image = $_FILES['logo']['tmp_name'];
$name = $_FILES['logo']['name'];
$logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
$menu = addslashes(file_get_contents($_FILES['menu']['tmp_name']));


$Password = $_POST['Password'];
$isFaastFood = 0;
$isSandwiches = 0;
$isArab = 0;
$isDesserts = 0;
$isAmerican = 0;
$isDrinks = 0;

$latitude = 0;
$longitude = 0;
$rate = 5;
$specialty = $_POST['specialty'];
foreach ($specialty as $items) {
    if ($items === 'Fast food') $isFaastFood = 1;
    if ($items === 'Sandwiches') $isSandwiches = 1;
    if ($items === 'Arab food') $isArab = 1;
    if ($items === 'Desserts') $isDesserts = 1;
    if ($items === 'American food') $isAmerican = 1;
    if ($items === 'Drinks') $isDrinks = 1;
}



$sql = "INSERT INTO `resturants` (`id`, `ResturantName`, `Description`, `Email`, `Password`, `Fast_food`, `Sandwiches`, `Arab_food`, `Desserts`, `American_food`, `Drinks`, `lat`, `lng`,`logo`,`menu`) 
VALUES (NULL, '$txtNAME', '$Description', '$email', '$Password', '$isFaastFood', '$isSandwiches', '$isArab', '$isDesserts', '$isAmerican', '$isDrinks', '$latitude', '$longitude','$logo','$menu')";


$rs = mysqli_query($conn, $sql);


if ($rs) {
    header('location:signinRest.php');
} else {
       header('location:resturant.php?error=Something went wrong, please try again');

}
$conn->close();
