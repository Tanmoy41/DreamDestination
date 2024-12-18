<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Navbar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <style>
        #header {
            position: relative;
            width: 100%;
            border: 0;
            z-index: 99;
        }

        .nav-fixed {
            position: fixed;
            width: 100%;
            z-index: 10;
        }

        .navbar {
            background-image: url("images/menu-bg.jpg");
            padding: 0.95rem 1rem;
            border-radius: 0;
            position: fixed;
            top: 0; /* Align to top */
            width: 100%; /* Ensure full width */
            z-index: 1000;
        }

        .navbar-nav .nav-item {
            padding-left: 10px;
        }

        .navbar-dark .navbar-toggler {
            background-image: none;
            border-color: transparent;
        }

        @media (max-width: 62em) {
            .navbar-nav {
                padding-top: 0.425rem;
                padding-left: 0.75rem;
            }

            .navbar-nav .nav-item {
                float: none;
            }

            .navbar-brand {
                float: right;
            }

            .navbar-brand,
            .navbar-nav .nav-item {
                display: block;
            }

            .navbar-nav .nav-item+.nav-item {
                margin-left: 0;
            }

            .dropdown-menu {
                position: relative;
                float: none;
                background-color: transparent;
            }

            .dropdown-menu a {
                color: #fff;
            }
        }

        .headroom--pinned {
            display: block;
        }

        .headroom--unpinned {
            display: none;
        }

        .navbar-fixed-top {
            position: fixed;
        }

        .navbar-toggler {
            padding: 4px 0;
            font-size: 1.25rem;
            line-height: 1;
            background: 0 0;
            border: 1px solid transparent;
            color: #5c4ac7;
            border-radius: 2px;
        }
    </style>

</head>

<body>
    <header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
                    data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="navbar-brand" href="../homepage/home.php"> <img class="img-rounded" src="images/logo.png" style="height:40px; width: 80px;" alt=""> </a>
                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="home.php">Home <span
                                    class="sr-only">(current)</span></a> </li>
                                    <li class="nav-item"><a href="searchBus.php" class="nav-link active">Buses</a> </li>
                        <!-- <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Book Ticket<span
                                    class="sr-only"></span></a> </li> -->


                        <?php
                        if (empty($_SESSION["user_id"])) // if user is not login
                        {
                            echo '
                                <li class="nav-item"><a href="../../user/login.php" class="nav-link active">Login</a> </li>
							    <li class="nav-item"><a href="../../user/register.php" class="nav-link active">Register</a> </li>';
                        } else {

                            echo '<li class="nav-item"><a href="yourBookings.php" class="nav-link active">Booking History</a> </li>';
                            echo '<li class="nav-item"><a href="../../user/logout.php" class="nav-link active">Logout</a> </li>';
                        }

                        ?>

                    </ul>

                </div>
            </div>
        </nav>

    </header>

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>