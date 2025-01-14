<!DOCTYPE html>
<html lang="en">
<?php
include("../../config.php");
error_reporting(0);
session_start();




if (isset($_POST['submit'])) {







    if (empty($_POST['bus_name']) || $_POST['date'] == '' || $_POST['fare'] == '' || $_POST['nos'] == '' || $_POST['origin'] == '' || $_POST['destination'] == '' || $_POST['atime'] == '' || $_POST['dtime'] == '') {
        $error = '<div class="alert alert-danger alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>All fields Must be Fillup!</strong>
				</div>';



    } else {



        $bus_name = $_POST['bus_name'];

        $sql = "INSERT INTO `bus`(`Name`, `Origin`, `Destination`, `Seats`, `Arrival_time`, `Departure_time`, `Date`, `Fare`) VALUE('" . $bus_name . "','" . $_POST['origin'] . "','" . $_POST['destination'] . "','" . $_POST['nos'] . "','" . $_POST['atime'] . "','" . $_POST['dtime'] . "','" . $_POST['date'] . "','" . $_POST['fare'] . "')";  // store the submited data ino the database :images
        mysqli_query($conn, $sql);
        move_uploaded_file($temp, $store);

        $success = '<div class="alert alert-success alert-dismissible fade show">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						 New Bus Added Successfully.
					</div>';


    }







}








?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Add Bus</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

    <div id="main-wrapper">

        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">

                        <span><img src="images/icn.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <div class="navbar-collapse">

                    <ul class="navbar-nav mr-auto mt-md-0">




                    </ul>

                    <ul class="navbar-nav my-lg-0">



                        <li class="nav-item dropdown">

                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>

                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all
                                                notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>



                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/user-icn.png"
                                    alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="left-sidebar">

            <div class="scroll-sidebar">

                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-label">Log</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i
                                    class="fa fa-archive f-s-20 color-warning"></i><span
                                    class="hide-menu">Bus</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all_bus.php">All Bus</a></li>
                                <li><a href="add_bus.php">Add Bus</a></li>

                            </ul>
                        </li>
                        <li> <a href="all_bookings.php"><i class="fa fa-shopping-cart"
                                    aria-hidden="true"></i><span>Bookings</span></a></li>

                    </ul>
                </nav>

            </div>

        </div>

        <div class="page-wrapper">



            <div class="container-fluid">



                <?php echo $error;
                echo $success; ?>




                <div class="col-lg-12">
                    <div class="card card-outline-primary">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Add Bus</h4>
                        </div>
                        <div class="card-body">
                            <form action='' method='post' enctype="multipart/form-data">
                                <div class="form-body">

                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Bus Name</label>
                                                <input type="text" name="bus_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Date</label>
                                                <input type="date" name="date" class="form-control form-control-danger">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Fare</label>
                                                <input type="text" name="fare" class="form-control form-control-danger">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">No of Seats</label>
                                                <input type="text" name="nos" class="form-control form-control-danger">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Origin</label>
                                                <input type="text" name="origin"
                                                    class="form-control form-control-danger">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Destination</label>
                                                <input type="text" name="destination"
                                                    class="form-control form-control-danger">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Arrival Time</label>
                                                <input type="text" name="atime"
                                                    class="form-control form-control-danger">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Departure time</label>
                                                <input type="text" name="dtime"
                                                    class="form-control form-control-danger">
                                            </div>
                                        </div>
                                    </div>




                                </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" name="submit" class="btn btn-primary" value="Save">
                            <a href="add_bus.php" class="btn btn-inverse">Cancel</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer"></footer>
        </div>

    </div>

    </div>

    </div>

    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>

</body>

</html>