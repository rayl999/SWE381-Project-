<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: absolute;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: black;
            font-size: 15px;
            opacity: 80%;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {

            animation-name: fade;
            animation-duration: 5s;

        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-center">
                <a href="index.php" class="nav-link px-2 text-secondary" style="color: white;">Homepage&nbsp</a></li>

                    
                <div class="text-right" style="padding-left: 700px;">
                    
                <a class="btn btn btn-primary" href="signInCust.php">Customer</a>
                <a class="btn btn btn-primary" href="signInRest.php">Restaurant</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="slide1.jpg" style="width:100vw; height: 800px;">

            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="slide2.jpg" style="width:100vw; height: 800px;">

            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="slide3.jpg" style="width:100vw; height: 800px;">

            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>


        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
        </script>
    </main>
    <footer class="text ">
        <span>Made by Rayan</span>
    </footer>


</html>