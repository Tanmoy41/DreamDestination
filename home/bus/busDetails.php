<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
session_start();
$_SESSION['Date'] = $_POST['Date'];
$_SESSION['Origin'] = $_POST['Origin'];
$_SESSION['Destination'] = $_POST['Destination'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <style>
        .card {
            margin-top: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #fff;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: #fff;
            text-align: center;
            padding: 15px 0;
            font-size: 1.5rem;
        }

        .card-body {
            padding: 20px;
            background-color: #f8f9fa;
        }

        .card-footer {
            background-color: #e9ecef;
            padding: 15px;
            text-align: center;
        }

        .card-footer a {
            color: #fff;
            text-decoration: none;
        }

        .card-footer a:hover {
            text-decoration: none;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>
    <div>
        <!-- <h2 class="mb-2 text-center mt-5">Available Bus Details</h2> -->
        <div class="row container" style="margin-bottom: 30px;">
            <?php
            include('../../config.php');
            $Bus_id;
            $_SESSION['Time'] = $row['Departure_time'];
            $sel = "SELECT * FROM `bus` where Origin='" . $_POST["Origin"] . "' and Destination='" . $_POST["Destination"] . "' and Date='" . $_POST["Date"] . "' ";
            $str = mysqli_query($conn, $sel) or die(mysqli_connect_error());
            $rows = mysqli_num_rows($str);
            if ($rows == 0) {
                echo '<div class="col-12"><h3 class="text-center text-danger">No available Buses</h3></div>';
            } else {
                while ($row = mysqli_fetch_array($str)) {
                    $Bus_id = $row['bus_id'];
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-header">Available Bus Details</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="card-title">Bus Name:</h5>
                                        <p class="card-text">
                                            <?php echo $row['Name']; ?>
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 class="card-title">Seat Fare:</h5>
                                        <p class="card-text">
                                            <?php echo $row['Fare']; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="card-title">Arrival Time:</h5>
                                        <p class="card-text">
                                            <?php echo $row['Arrival_time']; ?>
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 class="card-title">Departure Time:</h5>
                                        <p class="card-text">
                                            <?php echo $row['Departure_time']; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="card-title">Available Seats:</h5>
                                        <p class="card-text">
                                            <?php echo $row['Seats']; ?>
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 class="card-title">Date of Journey:</h5>
                                        <p class="card-text">
                                            <?php echo $row['Date']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="seat.php?bus_id=<?php echo $Bus_id; ?>&fare=<?php echo $row['Fare']; ?>&Name=<?php echo $row['Name']; ?>"
                                    class="btn btn-primary btn-block">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>