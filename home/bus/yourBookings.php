<!DOCTYPE html>
<html lang="en">
<?php
include("../../config.php");
error_reporting(0);
session_start();

if (empty($_SESSION['user_id'])) {
    header('location:../../user/login.php');
} else {
    ?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="#">
        <title>My Booking</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animsition.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <style type="text/css" rel="stylesheet">
            .container {
                max-width: 1270px;
                width: 94%;
            }

            .inner-page-hero {
                margin-top: -68px;
                padding-bottom: 5%;
                height: 200px;
            }

            .indent-small {
                margin-left: 5px;
            }

            .form-group.internal {
                margin-bottom: 0;
            }

            .dialog-panel {
                margin: 10px;
            }

            .datepicker-dropdown {
                z-index: 200 !important;
            }

            .page-wrapper {
                padding-top: 68px;
                /* Used for inpper pages if navigation fixed to the top */
            }

            .inner-page {
                margin-top: 30px;
                margin-bottom: 50px;
            }

            .panel-body {
                background: #e5e5e5;
                /* Old browsers */
                background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
                /* FF3.6+ */
                background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
                /* Chrome,Safari4+ */
                background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
                /* Chrome10+,Safari5.1+ */
                background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
                /* Opera 12+ */
                background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
                /* IE10+ */
                background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
                /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
                font: 600 15px "Open Sans", Arial, sans-serif;
            }

            label.control-label {
                font-weight: 600;
                color: #777;
            }

            @media only screen and (max-width: 760px),
            (min-device-width: 768px) and (max-device-width: 1024px) {}
        </style>

    </head>

    <body>
        <?php include('navbar.php') ?>
        <div class="page-wrapper">
            <div class="inner-page-hero bg-image" data-image-src="images/banner.jpg">
                <div class="container"> </div>

            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">


                    </div>
                </div>
            </div>

            <section class="restaurants-page" style="margin-top: 30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bg-gray">
                                <div class="row">

                                    <table class="table table-bordered table-hover">
                                        <thead style="background: #404040; color:white;">
                                            <tr>

                                                <th>Name</th>
                                                <th>Bus Name</th>
                                                <th>Seat Name</th>
                                                <th>Date of Journey</th>
                                                <th>Departure Time</th>
                                                <th>Total Fare</th>
                                                <th>Departure</th>
                                                <th>Destination</th>
                                                <th>Status</th>
                                                <th>Cancel</th>

                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
                                            $bus_name = $_SESSION['Bus_name'];
                                            $name = $_SESSION['username'];
                                            $time= $_SESSION['Time'];
                                            $sql = mysqli_query($conn, "select * from reginfo where id='" . $_SESSION["user_id"] . "' ");
                                            $result = mysqli_fetch_assoc($sql);
                                            $sel = mysqli_query($conn, "SELECT bus.bus_id, bus.Name, bus.Departure_time, booking.* FROM bus INNER JOIN booking ON bus.bus_id=booking.bus_id WHERE bus.bus_id = booking.bus_id");
                                            $res = mysqli_fetch_assoc($sel);
                                            $query_res = mysqli_query($conn, "select * from booking where id='" . $_SESSION['user_id'] . "'");
                                            if (!mysqli_num_rows($query_res) > 0) {
                                                echo '<td colspan="6"><center>You have No orders Placed yet. </center></td>';
                                            } else {

                                                while ($row = mysqli_fetch_array($query_res)) {

                                                    ?>
                                                    <tr>
                                                        <td data-column="Item">
                                                            <?php echo $result['username'] ?>
                                                        </td>
                                                        <td data-column="Quantity">
                                                            <?php echo $res['Name'] ?>
                                                        </td>
                                                        <td data-column="price">
                                                            <?php echo $row['seat_name']; ?>
                                                        </td>
                                                        <td data-column="price">
                                                            <?php echo $row['Date']; ?>
                                                        </td>
                                                        <td data-column="price">
                                                            <?php echo $res['Departure_time'] ?>
                                                        </td>
                                                        <td data-column="Date">৳
                                                            <?php echo $row['Total_fare']; ?>
                                                        </td>
                                                        <td data-column="Date">
                                                            <?php echo $row['start']; ?>
                                                        </td>
                                                        <td data-column="Date">
                                                            <?php echo $row['destination']; ?>
                                                        </td>
                                                        <td data-column="status">
                                                            <?php
                                                            $status = $row['status'];
                                                            if ($status == "" or $status == "NULL") {
                                                                ?>
                                                                <button type="button" class="btn btn-info"><span class="fa fa-bars"
                                                                        aria-hidden="true"></span> Dispatch</button>
                                                                <?php
                                                            }
                                                            if ($status == "in process") { ?>
                                                                <button type="button" class="btn btn-warning"><span
                                                                        class="fa fa-cog fa-spin" aria-hidden="true"></span> Pending!</button>
                                                                <?php
                                                            }
                                                            if ($status == "closed") {
                                                                ?>
                                                                <button type="button" class="btn btn-success"><span
                                                                        class="fa fa-check-circle" aria-hidden="true"></span>
                                                                    Delivered</button>
                                                                <?php
                                                            }
                                                            ?>
                                                            <?php
                                                            if ($status == "rejected") {
                                                                ?>
                                                                <button type="button" class="btn btn-danger"> <i
                                                                        class="fa fa-close"></i> Cancelled</button>
                                                                <?php
                                                            }
                                                            ?>






                                                        </td>
                                                        
                                                        <td data-column="Action"> <a
                                                                href="delete_bookings.php?book_del=<?php echo $row['Booking_id']; ?>"
                                                                onclick="return confirm('Are you sure you want to cancel your Booking?');"
                                                                class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i
                                                                    class="fa fa-trash-o" style="font-size:16px"></i></a>
                                                        </td>

                                                    </tr>


                                                <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php include('footer.php'); ?>
        </div>



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
    <?php
}
?>