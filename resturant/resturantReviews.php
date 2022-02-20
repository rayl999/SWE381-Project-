<?php
if (!isset($_COOKIE['authRest']))
    header('location:index.php?error=Please login again!');
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Resturant Reviews</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="bootstrap/js/bootstrap.bundle.min.js" rel="script" type="text/javascript">
    <link href="bootstrap/js/bootstrap.bundle.js" rel="script" type="text/javascript">

    <style>
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
    </style>
    <style>
        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>

</head>

<body>


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

    <main>

        </div>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Reviews</h1>

                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
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
                    $id = $_COOKIE['id'];
                    $sql = "SELECT * FROM rates WHERE resturantID= $id";
                    $rs = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($rs)) {

                        echo '
            <div class="col">
              <div class="card shadow-sm">';

                        echo '<div class="card-body">
                  <h1  class="text-center">' . $row["rate"] . '/5&#9733;</h1>
                  <p class="text-center">' . $row["txt"] . '</p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                  </div>
                  </div><br>
                  </div>
                  ';
                    }
                    ?>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>

        </div>
    </footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>




</body>

</html>