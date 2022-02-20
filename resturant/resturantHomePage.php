<?php
if (!isset($_COOKIE['authRest']))
  header('location:/SWE381 Project/signInRest.php?error=Please login again!');
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Resturant Homepage</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/headers.css" rel="stylesheet">

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
      position: fixed;
      z-index: 1;
      padding-top: 100px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: black;
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      width: 90%;
      max-width: 1200px;
    }

    /* The Close Button */
    .close {
      color: white;
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
      $name = $row['ResturantName'];
      $Description =  $row['Description'];
      $logo =  $row['Logo'];
      $menu =  $row['menu'];
      $Fast_food =  $row['Fast_food'];
      $Sandwiches =  $row['Sandwiches'];
      $Arab_food =  $row['Arab_food'];
      $Desserts =  $row['Desserts'];
      $American_food =  $row['American_food'];
      $Drinks =  $row['Drinks'];
      $rate =  $row['rate'];
      $pic1 =  $row['pic1'];
      $pic2 =  $row['pic2'];
      $pic3 =  $row['pic3'];
      $pic4 =  $row['pic4'];
      $pic5 =  $row['pic5'];
      $pic6 =  $row['pic6'];
      $pic7 =  $row['pic7'];
      $pic8 =  $row['pic8'];
      $pic9 =  $row['pic9'];
      $pic10 =  $row['pic10'];
      $lat =  $row['lat'];
      $lng =  $row['lng'];
      $conn->close();


      echo "
      



      <div class='text-center'>
        <div style='padding: 10%;'><span class='text-muted' >This how your resturant will display for customers</span>
          <div class='card shadow-sm'>
          <div class='col align-self-center' padding-top: 5%;'>";
      echo " <img src='data:image/jpeg;base64," . base64_encode($logo) . "' ' style='width: 30%;height: 30%;' onclick='openModal();currentSlide(1)' class='hover-shadow cursor' />";
      echo "
          <div id='myModal' class='modal'>
                <span class='close cursor' onclick='closeModal()'>&times;</span>
                <div class='modal-content'>

                  <div class='mySlides'>
                    <div class='numbertext'>1 / 10</div>";
      echo '<img src="data:image/jpeg;base64,' . base64_encode($pic1) . '" " width="100%" height="100%" />';
      echo "</div>

                  <div class='mySlides'>
                    <div class='numbertext'>2 / 10</div>";
      echo '<img src="data:image/jpeg;base64,' . base64_encode($pic2) . '" " width="100%" height="100%" />';
      echo "</div>

                  <div class='mySlides'>
                    <div class='numbertext'>3 / 10</div>";
      echo '<img src="data:image/jpeg;base64,' . base64_encode($pic3) . '" " width="100%" height="100%" />';
      echo "</div>

                  <div class='mySlides'>
                    <div class='numbertext'>4 / 10</div>";
      echo '<img src="data:image/jpeg;base64,' . base64_encode($pic4) . '" " width="100%" height="100%" />';
      echo "</div>

                    <div class='mySlides'>
                    <div class='numbertext'>5 / 10</div>";
      echo '<img src="data:image/jpeg;base64,' . base64_encode($pic5) . '" " width="100%" height="100%" />';
      echo "</div>
                    <div class='mySlides'>
                    <div class='numbertext'>6 / 10</div>";
      echo '<img src="data:image/jpeg;base64,' . base64_encode($pic6) . '" " width="100%" height="100%" />';
      echo "</div>

                  <div class='mySlides'>
                    <div class='numbertext'>7 / 10</div>";
      echo '<img src="data:image/jpeg;base64,' . base64_encode($pic7) . '" " width="100%" height="100%" />';
      echo "</div>

                  <div class='mySlides'>
                    <div class='numbertext'>8 / 10</div>";
      echo '<img src="data:image/jpeg;base64,' . base64_encode($pic8) . '" " width="100%" height="100%" />';
      echo "</div>

                  <div class='mySlides'>
                    <div class='numbertext'>9 / 10</div>";
      echo '<img src="data:image/jpeg;base64,' . base64_encode($pic9) . '" " width="100%" height="100%" />';
      echo "</div>

                    <div class='mySlides'>
                    <div class='numbertext'>10 / 10</div>";
      echo '<img src="data:image/jpeg;base64,' . base64_encode($pic10) . '" " width="100%" height="100%" />';
      echo "</div>

                  <a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
                  <a class='next' onclick='plusSlides(1)'>&#10095;</a>

                  <div class='caption-container'>
                    <p id='caption'></p>
                  </div>



                </div>
              </div>
            </div>


            <div class='card-body'>
              <h1 class='text-center'>";
      echo $name;
      echo "</h1><p class='text-center'>Specialty: ";
      if ($Fast_food) echo "Fast food ,";
      if ($Sandwiches) echo "Sandwiches ,";
      if ($Arab_food) echo "Arab food ,";
      if ($Desserts) echo "Desserts ,";
      if ($American_food) echo "American food ,";
      if ($Drinks) echo "Drinks ,";



      echo "</p>
              <p class='text-center'>";
      echo $Description;
      echo "</p>";
      echo '<img class="text-center" src="data:image/jpeg;base64,' . base64_encode($menu) . '" " width="60%"  padding-top: 2%;"/>';

      echo "
              
              <a href='https://maps.google.com/?q=";
      echo $lat;
      echo ",";
      echo $lng;
      echo "' class='nav-link px-2 text-black'>Location</a>
              <div class='d-flex justify-content-between align-items-center'>
                <div class='btn-group'>
                  <button type='button' class='btn btn-sm btn-outline-secondary'>Reviews</button>
                  <button type='button' class='btn btn-sm btn-outline-secondary'>Review it now !</button>


                </div>
              </div>
            </div>
          </div>
        </div>

        "


      ?>

      </div>
    </body>

  </main>


  <script>
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      captionText.innerHTML = dots[slideIndex - 1].alt;
    }
  </script>

</body>

</html>