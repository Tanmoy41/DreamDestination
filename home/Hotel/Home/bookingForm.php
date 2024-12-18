<?php
include('../../../config.php');
session_start();
$eid = $_SESSION["user_id"];
if ($eid == "") {
    header('location:../../../user/login.php');
}
$hotel_id = $_GET['hotel_id'];
$room_id = $_GET['room_id'];
$sql = mysqli_query($conn, "select * from reginfo where id='$eid' ");
$result = mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);
if (isset($savedata)) {
    $sql = mysqli_query($conn, "select * from room_booking_details where id='" . $_SESSION["user_id"] . "' and room_type='$room_type' ");
    if (mysqli_num_rows($sql)) {
        $msg = "<h1 style='color:red'>You have already booked this room.</h1>";
    } else {

        $sql = "INSERT INTO `room_booking_details`(`id`, `hotel_id`, `room_id`, `name`,`email`,`phone`,`address`,`city`,`zip`,`price`,`room_type`,`check_in_date`,`check_in_time`,`check_out_date`,`Occupancy`) 
  VALUES('".$_SESSION["user_id"]."','$hotel_id','$room_id','$name','$email','$phone','$address','$city','$zip','$price','$room_type','$cdate','$ctime','$codate','$Occupancy')";
        if (mysqli_query($conn, $sql)) {
            $msg = "<h1 style='color:blue'>You have Successfully booked this room</h1><h2><a href='yourBookings.php'>View </a></h2>";
        }
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container-fluid.text-center#primary {
            padding-top: 80px;
            /* Adjust the value as needed */
        }

        #primary {
            background-color: white;
            color: black;
        }

        .forget a {
            text-decoration: none;
            color: #000408;
        }

        .forget a:hover {
            color: white;
        }

        .forget {
            /*margin-top:5px;*/
            padding-top: 10px;
        }

        /*Login Close*/
        h1 {
            font-family: "Lobster", cursive;
            color: #ffffff;
        }

        #top {
            margin: 0px;

        }

        input {
            padding-top: 100px;
        }

        .thumbnail a img:hover {
            box-shadow: 5px 5px 5px #000408;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        #font {
            font-family: "Abril Fatface", cursive;
            color: red;
            margin-top: 50px;
            /*padding-top:50px;
      height:auto;*/
        }

        .bg-1 {
            background-color: white;
            /* Green */
            color: #ffffff;
        }

        #bt {
            float: right;
            margin-left: 15px;
            border-radius: 10px;
            border: none;
        }

        @media screen and (max-width: 600px) {
            .frame {
                width: 100%;
            }
        }

        @media screen and (max-width: 600px) {
            .amit {
                text-align: center;
            }
        }

        .Ac_Room_Text {
            font-family: "Abril Fatface", cursive;
            color: black;
            text-shadow: 3px 3px 3px blue;
            text-align: center;
        }

        .Room_Text {
            font-family: "Abril Fatface", cursive;
            color: #ffbb31;
            text-shadow: 3px 3px 3px #000000;
            text-align: center;
            size: 15px;
        }
    </style>
</head>


<body>
    <header>
        <?php
            include('navbar.php');
        ?>
    </header>
    <div class="container-fluid text-center " id="primary"><!--Primary Id-->
        <h1 id="a">BOOKING Form</h1><br>
        <div class="container">
            <div class="row">
                <?php echo @$msg; ?>
                <!--Form Containe Start Here-->
                <form class="form-horizontal" method="post">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="control-label col-sm-4">
                                    <h4> Name :</h4>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $result['username'] ?>" class="form-control"
                                        name="name" placeholder="Enter Your Frist Name" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="control-label col-sm-4">
                                    <h4>Email :</h4>
                                </div>
                                <div class="col-sm-8">
                                    <input type="email" value="<?php echo $result['email'] ?>" readonly="readonly"
                                        class="form-control" name="email" placeholder="Enter Your Email-Id" required />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="control-label col-sm-4">
                                    <h4>Mobile :</h4>
                                </div>
                                <div class="col-sm-8">
                                    <input type="number" value="<?php echo $result['mobile'] ?>" readonly="readonly"
                                        class="form-control" name="phone" placeholder="Type Your Phone Number" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="control-label col-sm-4">
                                    <h4>Address :</h4>
                                </div>
                                <div class="col-sm-8">
                                    <textarea name="address" class="form-control" readonly="readonly"
                                        placeholder="Enter Your Address"><?php echo $result['addressline'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="control-label col-sm-4">
                                    <h4>Price:</h4>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="price"
                                        placeholder="Enter Your City Name" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="control-label col-sm-4">
                                    <h4></h4>
                                </div>
                                <div class="col-sm-8">
                                    <input type="hidden" name="state" class="form-control"
                                        placeholder="Enter Your State Name" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="control-label col-sm-4">
                                    <h4></h4>
                                </div>
                                <div class="col-sm-8">
                                    <input type="hidden" name="zip" class="form-control"
                                        placeholder="Enter Your Zip Code" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="control-label col-sm-5">
                                    <h4>Room Type:</h4>
                                </div>
                                <div class="col-sm-7">
                                    <select class="form-control" name="room_type" required>
                                        <option>Deluxe Room</option>
                                        <option>Luxurious Suite</option>
                                        <option>Standard Room</option>
                                        <option>Suite Room</option>
                                        <option>Twin Deluxe Room</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="control-label col-sm-5">
                                    <h4>Check In Date :</h4>
                                </div>
                                <div class="col-sm-7">
                                    <input type="date" name="cdate" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="control-label col-sm-5">
                                    <h4>Check In Time:</h4>
                                </div>
                                <div class="col-sm-7">
                                    <input type="time" name="ctime" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="control-label col-sm-5">
                                    <h4>Check Out Date :</h4>
                                </div>
                                <div class="col-sm-7">
                                    <input type="date" name="codate" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="row">
                                <label class="control-label col-sm-5">
                                    <h4 id="top">Occupancy :</h4>
                                </label>
                                <div class="col-sm-7">
                                    <div class="radio-inline"><input type="radio" value="single" name="Occupancy"
                                            required>Single</div>
                                    <div class="radio-inline"><input type="radio" value="twin" name="Occupancy"
                                            required>Twin</div>
                                    <div class="radio-inline"><input type="radio" value="dubble" name="Occupancy"
                                            required>Dubble</div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="submit" name="savedata" class="btn btn-danger" required />
                    </div>
                </form><br>
            </div>
        </div>
    </div>
    </div>
    <?php
    include('footer.php')
        ?>
</body>

</html>