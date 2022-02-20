<?php
if (!isset($_COOKIE['authRest']))
    header('location:index.php?error=Please login again!');
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Resturant Photos</title>
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
          <h2>Photos</h2>
          <span class="text-muted">You can display photos on Homepage</span>
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
          $menu =  $row['menu'];
          $conn->close();
          echo'
        </div>
        <div>
          <div>
            <form class="needs-validation"  enctype="multipart/form-data" method="post" action="updatePhotos.php" >
              <input hidden value= '.$id.' name="id">
              <label for="menu" class="form-label">Update photo 1</label><span class="text-muted">( as 400 x * png )</span>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="photo1" id="photo1" required>
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div>
              <label for="menu" class="form-label">Update photo 2</label><span class="text-muted">( as 400 x * png )</span>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="photo2" id="photo2" required>
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div>
              <label for="menu" class="form-label">Update photo 3</label><span class="text-muted">( as 400 x * png )</span>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="photo3" id="photo3"required>
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div>
              <label for="menu" class="form-label">Update photo 4</label><span class="text-muted">( as 400 x * png )</span>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="photo4" id="photo4"required>
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div>
              <label for="menu" class="form-label">Update photo 5</label><span class="text-muted">( as 400 x * png )</span>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="photo5" id="photo5"required>
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div>
              <label for="menu" class="form-label">Update photo 6</label><span class="text-muted">( as 400 x * png )</span>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="photo6" id="photo6"required>
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div>
              <label for="menu" class="form-label">Update photo 7</label><span class="text-muted">( as 400 x * png )</span>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="photo7" id="photo7"required>
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div>
              <label for="menu" class="form-label">Update photo 8</label><span class="text-muted">( as 400 x * png )</span>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="photo8" id="photo8"required>
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div>
              <label for="menu" class="form-label">Update photo 9</label><span class="text-muted">( as 400 x * png )</span>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="photo9" id="photo9"required>
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div>
              <label for="menu" class="form-label">Update photo 10</label><span class="text-muted">( as 400 x * png )</span>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="photo10" id="photo10"required>
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div>

              <button class="w-25 btn btn-primary btn-lg" type="submit">Update Photos</button>
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