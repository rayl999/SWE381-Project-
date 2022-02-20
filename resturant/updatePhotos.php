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
$id =$_POST['id'];
$sql = "SELECT * FROM resturants WHERE id=$id";
$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rs);
$pic1 = $row['pic1'];
$pic2 = $row['pic2'];
$pic3 = $row['pic3'];
$pic4 = $row['pic4'];
$pic5 = $row['pic5'];
$pic6 = $row['pic6'];
$pic7 = $row['pic7'];
$pic8 = $row['pic8'];
$pic9 = $row['pic9'];
$pic10 = $row['pic10'];
if (($_FILES['photo1']['tmp_name'])!=null)$pic1 = addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
if (($_FILES['photo2']['tmp_name'])!=null)$pic2 = addslashes(file_get_contents($_FILES['photo2']['tmp_name']));
if (($_FILES['photo3']['tmp_name'])!=null)$pic3 = addslashes(file_get_contents($_FILES['photo3']['tmp_name']));
if (($_FILES['photo4']['tmp_name'])!=null)$pic4 = addslashes(file_get_contents($_FILES['photo4']['tmp_name']));
if (($_FILES['photo5']['tmp_name'])!=null)$pic5 = addslashes(file_get_contents($_FILES['photo5']['tmp_name']));
if (($_FILES['photo6']['tmp_name'])!=null)$pic6 = addslashes(file_get_contents($_FILES['photo6']['tmp_name']));
if (($_FILES['photo7']['tmp_name'])!=null)$pic7 = addslashes(file_get_contents($_FILES['photo7']['tmp_name']));
if (($_FILES['photo8']['tmp_name'])!=null)$pic8 = addslashes(file_get_contents($_FILES['photo8']['tmp_name']));
if (($_FILES['photo9']['tmp_name'])!=null)$pic9 = addslashes(file_get_contents($_FILES['photo9']['tmp_name']));
if (($_FILES['photo10']['tmp_name'])!=null)$pic10 = addslashes(file_get_contents($_FILES['photo10']['tmp_name']));

$sql = "UPDATE resturants SET pic1 = '$pic1',pic2 = '$pic2',pic3 = '$pic3',pic4 = '$pic4',pic5 = '$pic5',pic6 = '$pic6',pic7 = '$pic7',pic8 = '$pic8',pic9 = '$pic9',pic10 = '$pic10' WHERE id = $id";


 $rs = mysqli_query($conn, $sql);
if($rs)
{
    header('location:resturantHomePage.php');
}else header('location:resturantHomePage.php');
$conn -> close();
