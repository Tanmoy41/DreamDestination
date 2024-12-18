<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
session_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
    <link rel="icon" href="#">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    

    <style>
        .hero {
            padding-top: 12%;
            /* padding-bottom: 10%; */
            padding-bottom: 6%;
            text-align: center;
            position: relative;
        }

        .hero h1 {
            font-family: "Give You Glory", cursive;
            color: #fff;
            font-size: 3.7em;
            font-weight: 700;
        }

        .hero:before {
            content: "";
            display: block;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
            background-color: rgba(7, 6, 29, 0.37);
        }

        .hero .hero-inner {
            position: relative;
            z-index: 1;
        }

        .step-item {
            display: inline-block;
            margin: 0 40px 0;
            position: relative;
        }

        .banner-form {
            margin-bottom: 60px;
            display: block;
            margin-top: 20px;
        }

        /* .steps {
            margin-left: 300px;
            align-items: center;
        } */

        .step-item svg {
            display: inline-block;
            width: 34px;
            height: 34px;
        }

        .step-item img {
            display: block;
            margin: 0 auto 15px;
        }

        .step-item h4 {
            font-family: "Give You Glory", cursive;
            color: #fff;
            font-size: 21px;
        }

        .step-item h4 span {
            color: black;
        }

        .step1:after,
        .step2:after {
            position: absolute;
            content: "";
            right: -58%;
            top: -20%;
            width: 130px;
            height: 32px;
            background: url(../images/arrow.png);
        }

        .step2:after {
            background: url(../images/arrow-dotted.png);
            height: 25px;
            right: -95%;
            top: -15%;
        }

        @media (max-width: 568px) and (min-width: 280px) {

            .step1:after,
            .step2:after {
                display: none;
            }

            .hero h1 {
                font-size: 2.2em;
                padding-top: 75px;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .step-item {
                margin: 0 30px 0;
            }
        }

        #description {
            padding: 100px;
            text-align: center;
            margin-top: 30px;
            font-family: "Give You Glory", cursive;
        }
    </style>
</head>

<body>
    <?php
    include('navbar.php')
        ?>
    <section class="hero bg-image" data-image-src="images/banner.jpg">
        <div class="hero-inner">
            <div class="container text-center hero-text font-white">
                <h1>BookMyBusTicket</h1>

                <div class="banner-form">
                    <form class="form-inline">

                    </form>
                </div>
            </div>
        </div>

    </section>

    <section id="description">
        <header class="desc">
            <h2>BookMyBusTicket</h2>
            <p> <b>BookMyBusTicket is a online bus reservation system. <br>You can now choose your bus and your seat
                    easily, have the tickets delivered to your mail and online payments. <br>Try BookMyBusTicket
                    experience today.</b></p>

        </header>
        <div class="steps">
            <div class="step-item step1">
                <img src="images/trash.svg" alt="" style="height: 70px; width: 70px;">
                <h4 style="color: black;">You can book the tickets <br> before one month You can cancel <br> the tickets
                    one day before <br> the journey with 100% refund</h4>
            </div>

            <div class="step-item step2">
                <img src="images/chat.svg" alt="" style="height: 70px; width: 70px;">
                <h4 style="color: black;">You can comment/mail your <br> queries to our contacts</h4>
            </div>

            <div class="step-item step3">
                <img src="images/person.svg" alt="" style="height: 70px; width: 70px;">
                <h4 style="color: black;">You can create your personal account <br> and can see your booking history
                </h4>
            </div>
        </div>
    </section>
    <?php include('footer.php')
        ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>

</body>

</html>