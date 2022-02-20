<?php

if (!isset($_POST['login']) && !isset($_POST['pwd']))
    header('location:index.php');

$email = $_POST['login'];
$pass = $_POST['pwd'];
$type = $_POST['type'];
$id = 0;
$validate = 0;
if ($type == 'Customer') {

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
    $sql = "SELECT * FROM customers";
    $rs = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($rs)) {
        if (($row['email'] == "$email") && ($row['password'] == $pass)) {
            $id=$row['id'];
            $validate = 1;
            $name = $row['firstName'] . " ". $row['lastName'] ;
        } else {
        }
    }
} else {
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
    $sql = "SELECT * FROM resturants";
    $rs = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($rs)) {
        if (($row['Email'] == "$email") && ($row['Password'] == $pass)) {
            $id=$row['id'];
            $lat =$row['lat'];
            $lng=$row['lng'];
            $validate = 2;
        } else {
        }
    }
}

if ($validate == 1) {
    setcookie('authCust', 'yes', time() + (3600 * 3), '/');
    setcookie('id', $id, time() + (3600 * 3), '/');
    setcookie('name', $name, time() + (3600 * 3), '/');

    header('location:customer/CustomerHomePage.php');
} else if ($validate == 2) {
    setcookie('authRest', 'yes', time() + (3600 * 3), '/');
    setcookie('id', $id, time() + (3600 * 3), '/');
    header('location:resturant/resturantHomePage.php');
} else {
    header('location:index.php?error=Wrong username or password');
}
