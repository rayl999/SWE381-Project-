<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sing in</title>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/signin.css" rel="stylesheet">
</head>



<script>
    var loc = navigator.geolocation.getCurrentPosition(Position);

    function Position(position) {
      var latt = position.coords.latitude;
      var long = position.coords.longitude;

      document.cookie = "lat" + "=" + latt;

      function checkCookie() {
        let username = getCookie("test5");
        if (username != "") {
          alert("Welcome again " + username);
        } else {
          username = prompt("Please enter your name:", "");
          if (username != "" && username != null) {
            setCookie("test5", username, 365);
          }
        }
      }
      document.cookie = "lng" + "=" + long;

      function checkCookie() {
        let username = getCookie("lng");
        if (username != "") {
          alert("Welcome again " + username);
        } else {
          username = prompt("Please enter your name:", "");
          if (username != "" && username != null) {
            setCookie("lng", username, 365);
          }
        }
      }
    }
  </script>
<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        </br></br>
        <main class="px-3">
            <form class="form-signin" method="post" action="checkLogin.php">
                <?php
                if (isset($_GET['bye'])) {
                    echo "<div class='alert alert-success' role='alert'>" . $_GET['bye'] . " !</div>";
                }
                ?>
                <?php
                if (isset($_GET['error'])) {
                    echo "<div class='alert alert-danger' role='alert'>" . $_GET['error'] . " !</div>";
                }
                ?>
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="login" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" name="pwd" placeholder="Password" required>
                <input hidden name="type" value="Resturant">

                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
            <div class="row justify-content-center">
                <div>
                    <p>Dont have an account?</p>
                    <form class="SingUp" action="resturant.php">
                        <button class="btn btn-link" type="submit">Sing up now!</button>
                    </form>
                </div>
            </div>
        </main>
    </div>

</body>

</html>