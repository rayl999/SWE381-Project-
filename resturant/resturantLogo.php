<?php
if (!isset($_COOKIE['authRest']))
    header('location:index.php?error=Please login again!');
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Resturant Logo</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/headers.css" rel="stylesheet">
  <style>
    body {
      font-family: Verdana, sans-serif;
      margin: 0;
    }
  </style>
</head>

<body class="vsc-initialized">
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-center">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="resturantHomePage.php" class="nav-link px-2 text-secondary">Homepage</a></li>
          <li><a href="resturantReviews.php" class="nav-link px-2 text-white">Reviews</a></li>
          <li><a href="resturantLogo.php" class="nav-link px-2 text-white">Logo</a></li>
          <li><a href="resturantMenu.php" class="nav-link px-2 text-white">Menu</a></li>
          <li><a href="resturantLocation.php" class="nav-link px-2 text-white">Location</a></li>
          <li><a href="resturantPhotos.php" class="nav-link px-2 text-white">Photos</a></li>
        </ul>
        <div class="text-right">
        <button type="button" class="btn btn-danger" onclick="del()">Delete resturant</button>

<script>
  function del() {
    let text = "Confirm deletion.";
    if (confirm(text) == true) {
      window.location = "delete.php";
    } else {
      
    }
    
  }
</script>
          <a class="btn btn btn-warning" href="/SWE381 Project/signout.php">Signout</a>
        </div>
      </div>
    </div>
  </header>



  <body>
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2>Logo</h2>
          <?php
          $id = $_COOKIE['id'];


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
          $sql = "SELECT * FROM resturants WHERE id='$id'";
          $rs = mysqli_query($conn, $sql);

          $row = mysqli_fetch_array($rs);
          $id =  $row['id'];
          $logo =  $row['Logo'];
          $conn->close();
          echo " <img src='data:image/jpeg;base64," . base64_encode($logo) . "' ' style=' width: 50%;height: 50%;' />";
          echo'
        </div>
        <div>
          <div>
            <form class="needs-validation"  enctype="multipart/form-data" method="post" action="updateLogo.php" >
              <input hidden value= '.$id.' name="id">
              <label for="logo" class="form-label">Update Logo.</label><span class="text-muted">( as 400 x 400 png )</span>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="logo" id="logo" required>
                <label class="input-group-text" for="inputGroupFile02" >Upload</label>
              </div>

              
              <button class="w-25 btn btn-primary btn-lg" type="submit">Update Logo</button>
            </form>
          </div>
        </div>
        '?>
      </main>
      <footer class="mt-auto text-white-50">


      </footer>
    </div>

  </body>

</html>