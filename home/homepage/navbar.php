<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Navbar</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bus/css/font-awesome.min.css" rel="stylesheet">
    <link href="../bus/css/animsition.min.css" rel="stylesheet">
    <link href="../bus/css/animate.css" rel="stylesheet">
    <style>
        #header {
            position: fixed;
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
            background-image: url("img/menu-bg.jpg");
            padding: 0.95rem 1rem;
            border-radius: 0;
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="home.php"> <img class="img-rounded" src="img/logo.png"
                        style="height:40px; width: 80px;" alt="logo"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse"
                    aria-controls="mainNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNavbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="../restaurent/rest_home.php">Restaurant Service</a>
                                <a class="dropdown-item" href="../Hotel/Home/home.php">Hotel Booking</a>
                                <a class="dropdown-item" href="../bus/home.php">Bus Ticket Booking</a>
                            </div>
                        </li>
                    </ul>
                    <?php
                    if (empty($_SESSION["user_id"])) {
                        echo '
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="../../user/login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../../user/register.php">Register</a>
                        </li>
                    </ul>
                ';
                    } else {
                        echo '
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="../../user/logout.php">Logout</a>
                        </li>
                    </ul>
                ';
                    }
                    ?>
                </div>
            </div>
        </nav>
    </header>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../bus/js/animsition.min.js"></script>
    <script src="../bus/js/bootstrap-slider.min.js"></script>
    <script src="../bus/js/jquery.isotope.min.js"></script>
    <script src="../bus/js/headroom.js"></script>
    <script src="../bus/js/foodpicky.min.js"></script>
</body>

</html>