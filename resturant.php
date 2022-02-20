<html>

<head>
    <meta charset="utf-8">
    <title>Sing up</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/docs.css" rel="stylesheet">
    <script type="text/javascript" src="js/googlemap.js"></script>
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
    <link href="form-validation.css" rel="stylesheet">
    <script>
        function loadDoc() {
            header
        }
    </script>
</head>

<body class="bg-light vsc-initialized">
    <div class="container">
        <main>

            <div class="py-5 text-center">
                <?php
                if (isset($_GET['error'])) {
                    echo "<div class='alert alert-danger' role='alert'>" . $_GET['error'] . " !</div>";
                }
                ?>
                <h2>Sing up</h2>
            </div>
            <h4 class="mb-3">Resturant Information</h4>
            <form class="needs-validation" method="post" enctype="multipart/form-data" action="newResturant.php" id="signupform">

                <label for="ResturantName" class="form-label">Resturant name</label>
                <input type="text" class="form-control" name="ResturantName" id="ResturantName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                    Valid first Resturant is required.
                </div>
                <label class="form-label">Resturant Description</label>
                <div class="input-group">
                    <textarea class="form-control" id="Description" name="Description" aria-label="With textarea" placeholder="" value="" required=""></textarea>
                </div>
                <label for="email" class="form-label">Email </label>
                <input type="text" class="form-control" name="email" id="email" value="" required="" placeholder="you@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="example@example.com">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
                <br>
                <label for="logo" class="form-label">Resturant Logo </label><span class="text-muted">( as 400*400 png )</span>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="logo" id="logo" required="">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <label for="logo" class="form-label">Resturant menu </label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="menu" id="menu" required="">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <div class="row g-3">
                    <div class="col-12">
                        <label for="inputPassword6" class="form-lebel">Password</label>
                        <input type="password" name="Password" id="Password" class="form-control" aria-describedby="passwordHelpInline" required="" pattern=".{8,}" title="Eight or more characters">
                        <div class="invalid-feedback">
                            Must be 8-20 characters long.
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-12">

                        <label for="inputPassword6" class="form-lebel">Repeat password</label>
                        <input type="password" id="inputRepeatPassword" class="form-control" aria-describedby="passwordHelpInline" required="" pattern=".{8,}" title="Eight or more characters">
                        <div class="invalid-feedback">
                            Must be 8-20 characters long.
                        </div>
                    </div>
                </div><br>
                <script>

                </script>
                <div class="row g-3">
                    <label class="form-lebel">Please select your resturant specialty</label>
                    <div class="col-12">
                        <input hidden name="specialty[]" value="blabla">
                        <input type="checkbox" value="Fast food" name="specialty[]"> Fast food
                    </div>
                    <div class="col-12">
                        <input type="checkbox" value="Sandwiches" name="specialty[]"> Sandwiches
                    </div>
                    <div class="col-12">
                        <input type="checkbox" value="Arab food" name="specialty[]" default> Arab food
                    </div>
                    <div class="col-12">
                        <input type="checkbox" value="Desserts" name="specialty[]"> Desserts
                    </div>
                    <div class="col-12">
                        <input type="checkbox" value="American food" name="specialty[]"> American food
                    </div>
                    <div class="col-12">
                        <input type="checkbox" value="Drinks" name="specialty[]"> Drinks
                    </div>
                    <div class="col-12">
                        <input type="checkbox" value="else" name="specialty[]"> else
                    </div>
                </div>
                <label class="form-lebel">Please select your resturant location</label>
                <div id="map"></div>
                <hr class="my-4">
                <button class="w-25 btn btn-primary btn-lg" type="submit" id="submit">Sing up</button>
            </form>
        </main>
        <footer class="mt-auto text-white-50">

            <br><br><br>
        </footer>
    </div>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="form-validation.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArf1ibcutX4Ap9p6aDQbIWa7InsSAELYc&callback=loadMap">
    </script>
</body>

</html>