<!DOCTYPE html>
<html lang="en">

<?php
include("../../../config.php");
error_reporting(0);
session_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <link href="../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../Css/font-awesome.min.css" rel="stylesheet">
    <link href="../Css/animsition.min.css" rel="stylesheet">
    <link href="../Css/animate.css" rel="stylesheet">
    <script src="../js/skel.min.js"></script>
    <script src="../js/skel-layers.min.js"></script>
    <script src="../js/init.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: auto;
        }

        /* Navbar */
        /* nav {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
        }

        nav h1 {
            font-size: 1.5rem;
            margin-left: 1rem;
        }

        nav ul {
            list-style: none;
            margin-right: 1rem;
        }

        nav ul li {
            display: inline;
            margin-right: 1rem;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
        } */

        /* Hero Section */
        .hero {
            padding-top: 20%;
            padding-bottom: 6%;
            text-align: center;
            position: relative;
        }

        .hero h1 {
            font-size: 3.7em;
            font-weight: 700;
            color: #fff;
            margin-top: 0.5rem;
            text-align: center;
        }

        /* Description Section */
        #description {
            padding: 3rem;
            text-align: center;
            background-color: #f9f9f9;
        }

        #description h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        #description p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 2rem;
        }

        /* Popular Hotels Section */
        .steps {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
        }

        .food-item {
            flex: 1 1 300px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .food-item-wrap {
            overflow: hidden;
            border-radius: 5px 5px 0 0;
        }

        .figure-wrap {
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .content {
            padding: 1rem;
        }

        .product-name {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .price-btn-block {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price {
            font-size: 1.2rem;
            color: #333;
        }

        .btn {
            background-color: #333;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <?php
    include('navbar.php')
        ?>
    <section class="hero bg-image" data-image-src="../image/hotelbkg.jpg">
        <div class="hero-inner">
            <div class="container text-center hero-text font-white">
                <h1>Hotels For Refreshing</h1>

                <div class="banner-form">
                    <form class="form-inline">

                    </form>
                </div>
            </div>
        </div>

    </section>

    <section id="description">
        <header class="desc">
            <h2>Popular hotels near your area</h2>

        </header>
        <div class="steps">
            <?php
            $query_hotel = mysqli_query($conn, "SELECT * FROM `hotel` LIMIT 6");
            while ($r = mysqli_fetch_array($query_hotel)) {

                echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                            <div class="food-item-wrap">
                                                <div class="figure-wrap bg-image" data-image-src="../../../admin/admin_hotel/Hotel_img/' . $r['image'] . '"></div>
                                                <div class="content">
                                                    <h5><a href="room.php?hotel_id=' . $r['hotel_id'] . '">' . $r['hotel_name'] . '</a></h5>
                                                    <div class="product-name">' . $r['location'] . '</div>
                                                    <div class="price-btn-block"> <span class="price">Available room: ' . $r['no_of_rooms'] . '</span> <a href="room.php?hotel_id=' . $r['hotel_id'] . '" class="btn theme-btn-dash pull-right">Visit Now</a> </div>
                                                </div>
                                                
                                            </div>
                                    </div>';
            }
            ?>
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
    <script src="js/foodpicky.min.js"></script>
</body>

</html>