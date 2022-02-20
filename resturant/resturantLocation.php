<?php
if (!isset($_COOKIE['authRest']))
    header('location:index.php?error=Please login again!');
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Resturant Location</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/headers.css" rel="stylesheet">
  <script type="text/javascript" src="js/googlemap.js"></script>

  <style>
    body {
      font-family: Verdana, sans-serif;
      margin: 0;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }

    }

    #map {
      width: 500px;
      height: 500px;
      border: 1px solid blue;
    }

    #data,
    #allData {
      display: none;
    }
  </style>


</head>

<body class="vsc-initialized">
  <main>
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
            <h2>Location</h2>
          </div>
          <div>
            <div>
              <h4 class="mb-3">Change Location</h4>


              <hr class="my-4">

              <div id="map" ></div>
              <hr class="my-4">
              <form class="needs-validation"  method="post" action="updateLocation.php">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="First name">Latitude </label>
                      <input type="text" name="lat" id="lat" class="form-control" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="First name">Longitude</label>
                      <input type="text" name="lng" id="lng" class="form-control" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
                  </div>
                </div>
                <button class="w-25 btn btn-primary btn-lg" type="submit">Change Location</button>
              </form>
            </div>
          </div>
        </main>
        <footer class="mt-auto text-white-50">

          <br><br><br>
        </footer>
      </div>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArf1ibcutX4Ap9p6aDQbIWa7InsSAELYc&callback=loadMap">
      </script>
    </body>

</html>