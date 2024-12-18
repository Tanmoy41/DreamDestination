<!DOCTYPE html>
<html lang="en">
<?php
include("../../../config.php");
error_reporting(0);
session_start();

if (empty($_SESSION['user_id'])) {
    header('location:../../../user/login.php');
} else {
    ?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="#">
        <title>My Orders</title>
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
                /* padding-top: 5%; */
                padding-bottom: 5%;
                height: 250px;
                margin-top: -15px;
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
            <div class="inner-page-hero bg-image" data-image-src="../image/hotelbkg.jpg">
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
                                                <th>Check-in-Date</th>
                                                <th>Check-out-Date</th>
                                                <th>Room Type</th>
                                                <th>Occupancy</th>
                                                <th>Total Cost</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                

                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
                                            $query_res = mysqli_query($conn, "select * from room_booking_details where id='" . $_SESSION['user_id'] . "'");
                                            if (!mysqli_num_rows($query_res) > 0) {
                                                echo '<td colspan="6"><center>You have No orders Placed yet. </center></td>';
                                            } else {

                                                while ($row = mysqli_fetch_array($query_res)) {

                                                    ?>
                                                    <tr>
                                                        <td data-column="Item">
                                                            <?php echo $row['name']; ?>
                                                        </td>
                                                        <td data-column="Quantity">
                                                            <?php echo $row['check_in_date']; ?>
                                                        </td>
                                                        <td data-column="price">
                                                            <?php echo $row['check_out_date']; ?>
                                                        </td>
                                                        <td data-column="price">
                                                            <?php echo $row['room_type']; ?>
                                                        </td>
                                                        <td data-column="price">
                                                            <?php echo $row['Occupancy']; ?>
                                                        </td>
                                                        <td data-column="price">৳
                                                            <?php echo $row['price']; ?>
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
                                                                        class="fa fa-cog fa-spin" aria-hidden="true"></span> On The
                                                                    Way!</button>
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
                                                                href="delete_orders.php?order_del=<?php echo $row['o_id']; ?>"
                                                                onclick="return confirm('Are you sure you want to cancel your order?');"
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