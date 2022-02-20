<?php
if (!isset($_COOKIE['authCust']))
    header('location:/SWE381 Project/signInCust.php?error=Please login again!');
?>
<html lang="en">
<?php
$resturantID = $_POST['resturantID'];
$rate = $_POST['rate'];

setcookie('resturantID', $resturantID, time() + (3600 * 3), '/');
setcookie('rate', $rate, time() + (3600 * 3), '/');

?>
<head>
    <meta charset="utf-8">
    <title>New Rate</title>

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

<body class="vsc-initialized">
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



        </div>      <a class="btn btn btn-warning" href="/SWE381 Project/signout.php">Signout</a>

      </div>

    </div>
  </div>
</div>
</header>



    <body>
        <div class="container">
            <main>
                <div class="py-5 text-center">
                    <h2>Rate it now !</h2>

                </div>
                <div>
                    <div>
                        <form class="needs-validation" novalidate="" method="post" action="rateSubmit.php">
                            
                            <div class="row align-items-start">
                                <div class="form-check" class="col-md-4">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"value="5" id="flexRadioDefault5">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        5
                                    </label>
                                    <div class="col-md-4"></div>

                                </div>
                                <div class="form-check" class="col-md-4">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="4"id="flexRadioDefault4" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        4
                                    </label>
                                    <div class="col-md-4"></div>

                                </div>
                                <div class="form-check" class="col-md-4">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="3"id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        3
                                    </label>
                                    <div class="col-md-4"></div>

                                </div>
                                <div class="form-check" class="col-md-4">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"value="2" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        2
                                    </label>
                                    <div class="col-md-4"></div>

                                </div>
                                <div class="form-check" class="col-md-4">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"value="1" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        1
                                    </label>
                                    <div class="col-md-4"></div>

                                </div>
                            </div>
                            <label class="form-label">Write your experience !</label>
                            <div class="input-group">
                                <textarea class="form-control" id="Description" name="Description" aria-label="With textarea" placeholder="" value="" required=""></textarea>
                            </div>
                            <br>
                            <button class="w-25 btn btn-primary btn-lg" type="submit">Submit </button>
                        </form>
                    </div>
                </div>

            </main>
            <footer class="mt-auto text-white-50">


            </footer>
        </div>

    </body>

</html>