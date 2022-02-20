<?php
if (!isset($_COOKIE['authCust']))
    header('location:/SWE381 Project/signInCust.php?error=Please login again!');
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Customer Home Page</title>

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
  <style>
    body {
      font-family: Verdana, sans-serif;
      margin: 0;

    }



    .row>.column {
      padding: 0 8px;
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .column {
      float: left;
      width: 25%;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.85);
      /* Black w/ opacity */
      
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: white;
      opacity: 100%;
      margin: auto;
      padding: 0;
      width: 90%;
      max-width: 1200px;
    }

    /* The Close Button */
    .close {
      color: black;
      position: absolute;
      top: 10px;
      right: 25px;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #999;
      text-decoration: none;
      cursor: pointer;
    }

    .mySlides {
      display: none;
    }

    .cursor {
      cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -50px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
      -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    img {
      margin-bottom: -4px;
    }

    .caption-container {
      text-align: center;
      background-color: black;
      padding: 2px 16px;
      color: white;
    }

    .demo {
      opacity: 0.6;
    }

    .active,
    .demo:hover {
      opacity: 1;
    }

    img.hover-shadow {
      transition: 0.3s;
    }

    .hover-shadow:hover {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    
  </style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>

<body>


  <header>

    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <?php
        
        
        
        echo'
        <a href="CustomerHomePage.php" class="navbar-brand d-flex align-items-center">
          <strong> Welcome : '.$_COOKIE["name"].'</strong>
        </a>';
        ?>
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



            </div>          <a class="btn btn btn-warning" href="/SWE381 Project/signout.php">Signout</a>

          </div>

        </div>
      </div>
    </div>
  </header>

  <main>

    </div>
    <section class="py-5 text-center container">
      <h1 class="fw-light">Resturants</h1>
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
          $lat = $_COOKIE['lat'];
          $lng = $_COOKIE['lng'];

          $sql = "SELECT * FROM resturants";
          $rs = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($rs)) {

            echo '
            <div class="col" style="padding-top: 2%;">
              <div class="card shadow-sm" >';
            echo "<img src='data:image/jpeg;base64," . base64_encode($row["Logo"]) . "' ' style='width: 100%;height: 100%;' id='myBtn2" . $row["id"] . "' class='hover-shadow cursor' /> </svg>";
            echo '<div class="card-body">
                  <h1  class="text-center">' . $row["ResturantName"] . '</h1>
                  <div class="d-flex justify-content-between align-items-center">
                  <button id="myBtn' . $row["id"] . '" class="btn btn-sm btn-outline-secondary" >View resturant</button>
                  <div id="myModal' . $row["id"] . '" class="modal w3-animate-zoom" stlye="opacity: 30%;">
                    <div class="modal-content">';
            echo "
            <span id='close" . $row["id"] . "' onclick='closeModal()' style='color: black;position: absolute;top: 10px;right: 25px;font-size: 35px;font-weight: bold;'>&times;</span>
                    <div>
                      <div style='padding: 10%;'>
                        <div class='card shadow-sm'>
                        <div class='col align-self-center' style='padding-left: 33%;padding-top: 5%;'>";
            echo " <img src='data:image/jpeg;base64," . base64_encode($row["Logo"]) . "' ' style='width: 50%;height: 50%;' onclick='openModal2" . $row["id"] . "();currentSlide" . $row['id'] . "(10)' class='hover-shadow cursor' />";
            echo "
                        <div id='#myModal" . $row["id"] . "' class='modal w3-animate-zoom'>
                              <span class='close cursor' onclick='closeModal2" . $row["id"] . "()'>&times;</span>
                              <div class='modal-content'>
              
                                <div class='mySlides " . $row["id"] . "' >
                                  <div class='numbertext'>1 / 10</div>";
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic1"]) . '" " width="100%" height="100%" />';
            echo "</div>
              
                                <div class='mySlides " . $row["id"] . "'>
                                  <div class='numbertext'>2 / 10</div>";
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic2"]) . '" " width="100%" height="100%" />';
            echo "</div>
              
                                <div class='mySlides " . $row["id"] . "'>
                                  <div class='numbertext'>3 / 10</div>";
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic3"]) . '" " width="100%" height="100%" />';
            echo "</div>
              
                                <div class='mySlides " . $row["id"] . "'>
                                  <div class='numbertext'>4 / 10</div>";
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic4"]) . '" " width="100%" height="100%" />';
            echo "</div>
              
                                  <div class='mySlides " . $row["id"] . "'>
                                  <div class='numbertext'>5 / 10</div>";
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic5"]) . '" " width="100%" height="100%" />';
            echo "</div>
                                  <div class='mySlides " . $row["id"] . "'>
                                  <div class='numbertext'>6 / 10</div>";
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic6"]) . '" " width="100%" height="100%" />';
            echo "</div>
              
                                <div class='mySlides " . $row["id"] . "'>
                                  <div class='numbertext'>7 / 10</div>";
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic7"]) . '" " width="100%" height="100%" />';
            echo "</div>
              
                                <div class='mySlides " . $row["id"] . "'>
                                  <div class='numbertext'>8 / 10</div>";
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic8"]) . '" " width="100%" height="100%" />';
            echo "</div>
              
                                <div class='mySlides " . $row["id"] . "'>
                                  <div class='numbertext'>9 / 10</div>";
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic9"]) . '" " width="100%" height="100%" />';
            echo "</div>
              
                                  <div class='mySlides " . $row["id"] . "'>
                                  <div class='numbertext'>10 / 10</div>";
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic10"]) . '" " width="100%" height="100%" />';
            echo "</div>
              
                                <a class='prev' onclick='plusSlides" . $row['id'] . "(-1)'>&#10094;</a>
                                <a class='next' onclick='plusSlides" . $row['id'] . "(1)'>&#10095;</a>
              
                                <div class='caption-container'>
                                  <p id='caption'></p>
                                </div>
              
              
              
                              </div>
                            </div>
                          </div>";
            echo '  <script>
              function openModal2' . $row["id"] . '() {
                document.getElementById("#myModal' . $row["id"] . '").style.display = "block";
              }
          
              function closeModal2' . $row["id"] . '() {
                document.getElementById("#myModal' . $row["id"] . '").style.display = "none";
              }
          
              var slideIndex' . $row["id"] . ' = 1;
              showSlides' . $row["id"] . '(slideIndex' . $row["id"] . ');
          
              function plusSlides' . $row["id"] . '(n) {
                showSlides' . $row["id"] . '(slideIndex' . $row["id"] . ' += n);
              }
          
              function currentSlide' . $row["id"] . '(n) {
                showSlides(slideIndex' . $row["id"] . ' = n);
              }
          
              function showSlides' . $row["id"] . '(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides ' . $row["id"] . '");
                var dots = document.getElementsByClassName("demo");
                var captionText = document.getElementById("caption");
                if (n > slides.length) {
                  slideIndex' . $row["id"] . ' = 1
                }
                if (n < 1) {
                  slideIndex' . $row["id"] . ' = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex' . $row["id"] . ' - 1].style.display = "block";
                dots[slideIndex' . $row["id"] . ' - 1].className += " active";
                captionText.innerHTML = dots[slideIndex' . $row["id"] . ' - 1].alt;
              }
            </script>';


            echo "
              
                          <div class='card-body'>
                            <h1 class='text-center'>";
            echo $row["ResturantName"];
            echo "</h1><p class='text-center'>Specialty: ";
            if ($row['Fast_food']) echo "Fast food ,";
            if ($row['Sandwiches']) echo "Sandwiches ,";
            if ($row['Arab_food']) echo "Arab food ,";
            if ($row['Desserts']) echo "Desserts ,";
            if ($row['American_food']) echo "American food ,";
            if ($row['Drinks']) echo "Drinks ,";



            echo "</p>
                            <p class='text-center'>";
            echo $row['Description'];
            echo "</p>";
            echo '<img class="text-center" src="data:image/jpeg;base64,' . base64_encode($row["menu"]) . '" " width="70%"  style="padding-left: 30%;padding-top: 2%;"/>';

            echo "<a href='https://maps.google.com/?q=";
            echo $row['lat'];
            echo ",";
            echo $row['lng'] . "'";
            echo " class='nav-link px-2 text-black'>Location</a>
                            <div class='d-flex justify-content-between align-items-center'>
                              <div class='btn-group'>
                              <form class='needs-validation' novalidate='' method='post' action='showRates.php'>
                              <input hidden name='resturantID' value=" . $row['id'] . ">

                              <button type='submit' class='btn btn-sm btn-outline-secondary'>Reviews</button>
                              </form>

                                <form class='needs-validation' novalidate='' method='post' action='newRate.php'>
                                <input hidden name='resturantID' value=" . $row['id'] . ">
                                <input hidden name='rate' value=" . $row['rate'] . ">

                                <button type='submit' class='btn btn-sm btn-outline-secondary'>Review it now !</button>
                                </form>
                              </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                      ";
            $long1 = deg2rad($lng);
            $long2 = deg2rad($row['lng']);
            $latt1 = deg2rad($lat);
            $latt2 = deg2rad($row['lat']);
            //Haversine Formula
            $dlong = $long2 - $long1;
            $dlati = $latt2 - $latt1;

            $val = pow(sin($dlati / 2), 2) + cos($latt1) * cos($latt2) * pow(sin($dlong / 2), 2);

            $res = 2 * asin(sqrt($val));
            $radius = 3958.756;
            $distince = $res * $radius;
            $distince = round($distince, 2);



            echo '
                              </div>
                            </div>
                              <small class="text-muted">' . $distince . 'km       ' . round($row["rate"], 2) . '&#9733;</small>
                            </div>
                          </div>
                        </div>
                      </div>';

            echo '<script>
            // Get the modal
            var modal' . $row["id"] . ' = document.getElementById("myModal' . $row["id"] . '");
        
            // Get the button that opens the modal
            var btn' . $row["id"] . ' = document.getElementById("myBtn' . $row["id"] . '");
            var btn2' . $row["id"] . ' = document.getElementById("myBtn2' . $row["id"] . '");

            // Get the <span> element that closes the modal
            var span' . $row["id"] . ' = document.getElementById("close' . $row["id"] . '");
        
            // When the user clicks the button, open the modal 
            btn' . $row["id"] . '.onclick = function() {
              modal' . $row["id"] . '.style.display = "block";
            }
            // When the user clicks the button, open the modal 
            btn2' . $row["id"] . '.onclick = function() {
              modal' . $row["id"] . '.style.display = "block";
            }
        
            // When the user clicks on <span> (x), close the modal
            span' . $row["id"] . '.onclick = function() {
              modal' . $row["id"] . '.style.display = "none";
            }
        
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal' . $row["id"] . ') {
                modal' . $row["id"] . '.style.display = "none";
              }
            }
          </script>';
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