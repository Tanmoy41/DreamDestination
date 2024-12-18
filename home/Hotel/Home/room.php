<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hotel Details</title>
    <link href="../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../Css/font-awesome.min.css" rel="stylesheet">
    <link href="../Css/animsition.min.css" rel="stylesheet">
    <link href="../Css/animate.css" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Navbar */
        .navbar {
            background-color: #343a40;
            color: #fff;
            border-radius: 0;
        }

        .navbar-brand {
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }

        /* Hotel Section */
        .hotel-section {
            background-image: url('../image/roombkg.jpeg');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: #fff;
        }

        .hotel-details {
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
            max-width: 1200px;
            margin: 0 auto;
        }

        .hotel-details img {
            width: 400px;
            height: 280px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .hotel-info {
            max-width: calc(100% - 350px);
            padding: 0 20px;
        }

        .hotel-name {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hotel-location {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        /* Room Cards */
        .room-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            /* width: calc(33.33% - 20px); */
            width: 100%;
            margin: 20px 0;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .card-text {
            color: #666;
            margin-bottom: 15px;
        }

        .card-price {
            color: #f00;
            font-size: 1.25rem;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Footer */
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 50px 0;
            text-align: center;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <!-- Include navbar or header if necessary -->
    <?php include('navbar.php'); ?>

    <!-- Hotel Section -->
    <section class="hotel-section">
        <div class="container">
            <div class="hotel-details">
                <?php
                // Include database configuration and connect to the database
                include("../../../config.php");

                // Check if hotel_id is set in the URL
                if(isset($_GET['hotel_id'])) {
                    $hotel_id = $_GET['hotel_id'];

                    // Retrieve hotel information from the database
                    $sql = "SELECT * FROM hotel WHERE hotel_id = $hotel_id";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="hotel-image">
                                <img src="../../../admin/admin_hotel/Hotel_img/<?php echo $row['image']; ?>" alt="Hotel Image">
                            </div>
                            <div class="hotel-info">
                                <h1 class="hotel-name"><?php echo $row['hotel_name']; ?></h1>
                                <p class="hotel-location"><?php echo $row['location']; ?></p>
                            </div>
                            
                            <?php
                        }
                    } else {
                        echo "No hotel found";
                    }
                } else {
                    echo "Hotel ID not provided";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Room Cards -->
    <section class="room-cards">
        <div class="container">
            <div class="row">
                <?php
                // Retrieve room information from the database
                if(isset($_GET['hotel_id'])) {
                    $hotel_id = $_GET['hotel_id'];

                    $sql = "SELECT * FROM rooms WHERE hotel_id = $hotel_id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../../../admin/admin_hotel/Hotel_img/rooms/<?php echo $row['room_image']; ?>" alt="Room Image">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row['room_name']; ?></h5>
                                        <p class="card-text"><?php echo $row['room_desc']; ?></p>
                                        <p class="card-price">$<?php echo $row['room_price']; ?> per night</p>
                                        <a href="bookingForm.php?hotel_id=<?php echo $hotel_id; ?>&room_id=<?php echo $row['room_id']; ?>" class="btn btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "No rooms available";
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <!-- Include necessary JS files -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/animsition.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/headroom.js"></script>
    <script src="../js/foodpicky.min.js"></script>
</body>
</html>
