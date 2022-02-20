<?php
if (!isset($_COOKIE['authCust']))
    header('location:/SWE381 Project/signInCust.php?error=Please login again!');
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rates</title>

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


    <header>

        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="CustomerHomePage.php" class="navbar-brand d-flex align-items-center">
                    <strong>Resturants</strong>
                </a>

                <div class="text-end row">
                    <div class="input-group col container">
                        <form class="container" action="search.php">
                            <div class="input-group col container">
                                <input type="search" class="form-control rounded" name="search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <button type="submit" class="btn btn-primary">search</button>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown" style="padding-right: 30; ">
                        <button class="btn btn-secondary dropdown-toggle">Sort</button>
                        <div class="dropdown-content">
                            <a href="nearest.php">Nearest</a>
                            <a href="sortRating.php">Best rating!</a>
                            <form class="Insert" action="sortSpecialty.php">
                                <input hidden name="type" value="Arab_food">
                                <button class="btn btn-link" type="submit" style="color: black;">Arab food</button>
                            </form>
                            <form class="Insert" action="sortSpecialty.php">
                                <input hidden name="type" value="Desserts">
                                <button class="btn btn-link" type="submit" style="color: black;">Desserts</button>
                            </form>
                            <form class="Insert" action="sortSpecialty.php">
                                <input hidden name="type" value="American_food">
                                <button class="btn btn-link" type="submit" style="color: black;">American food</button>
                            </form>
                            <form class="Insert" action="sortSpecialty.php">
                                <input hidden name="type" value="Drinks">
                                <button class="btn btn-link" type="submit" style="color: black;">Drinks</button>
                            </form>
                            <form class="Insert" action="sortSpecialty.php">
                                <input hidden name="type" value="Sandwiches">
                                <button class="btn btn-link" type="submit" style="color: black;">Sandwiches</button>
                            </form>
                            <form class="Insert" action="sortSpecialty.php">
                                <input hidden name="type" value="Fast_food">
                                <button class="btn btn-link" type="submit" style="color: black;">Fast food</button>
                            </form>



                        </div>                    <a class="btn btn btn-warning" href="/SWE381 Project/signout.php">Signout</a>

                    </div>

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
                    $id = $_POST['resturantID'];

                    $sql = "SELECT * FROM rates WHERE resturantID= $id";
                    $rs = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($rs)) {

                        $id2 = $row['customerID'];
                        $sql2 = "SELECT * FROM customers WHERE id= $id2";
                        $rs2 = mysqli_query($conn, $sql2);
                        $row2 = mysqli_fetch_array($rs2);

                        echo '
            <div class="col">
              <div class="card shadow-sm">';

                        echo '<div class="card-body">
                        <h3  class="text-center"> By : ' . $row2["firstName"] . '  ' . $row2["lastName"] . '</h3>

                  <h4  class="text-center">' . $row["rate"] . '/5&#9733;</h4>
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