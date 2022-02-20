<html>

<head>
    <meta charset="utf-8">
    <title>Sing up</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                <h2>Sing up</h2>
            </div>
            <div>
                <div>
                    <h4 class="mb-3">Personal Information</h4>
                    <form class="needs-validation" method="post" action="newCustomer.php">
                        <?php
                        if (isset($_GET['error'])) {
                            echo "<div class='alert alert-danger' role='alert'>" . $_GET['error'] . " !</div>";
                        }
                        ?>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-group">

                                    <label for="First name">First name</label>
                                    <input type="text" name="firstName" id="firstName" class="form-control" placeholder="" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="First name">Last name</label>
                                    <input type="text" name="lastName" id="lastName" class="form-control" placeholder="" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="Email" id="Email" class="form-control" placeholder="" value="" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="example@example.com">
                            <div class="invalid-feedback">
                                Valid Email is required.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="text" name="inputPassword" id="inputPassword" class="form-control" placeholder="" value="" pattern=".{8,}" title="Eight or more characters" required="">
                            <div class="invalid-feedback">
                                Must be 8-20 characters long.
                            </div>
                        </div>
                        <label for="inputPassword6" class="form-lebel">Repeat password</label>
                        <input type="password" id="inputRepeatPassword" class="form-control" placeholder="" value="" pattern=".{8,}" title="Eight or more characters" required="">
                        <div class="invalid-feedback">
                            Must be 8-20 characters long.
                        </div>
                        <hr class="my-4">
                        <button class="w-25 btn btn-primary btn-lg" type="submit">Sing up</button>
                    </form>
                </div>
            </div>
        </main>
        <footer class="mt-auto text-white-50">

        </footer>
    </div>

</body>

</html>