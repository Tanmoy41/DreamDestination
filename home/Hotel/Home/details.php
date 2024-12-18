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
  VALUES('" . $_SESSION["user_id"] . "','$hotel_id','$room_id','$name','$email','$phone','$address','$city','$zip','$price','$room_type','$cdate','$ctime','$codate','$Occupancy')";
        if (mysqli_query($conn, $sql)) {
            $msg = "<h1 style='color:blue'>You have Successfully booked this room</h1><h2><a href='yourBookings.php'>View </a></h2>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
        .wrapper {
            max-width: 700px;
            padding: 0px 30px;
            min-height: 300px;
            border-top: 1px solid #ffffff6e;
            border-left: 1px solid #ffffff6e;
            border-radius: 15px;
            margin: 0 auto;
            margin: 50px auto;
            position: relative;
        }

        h2 {
            color: black;
            text-align: center;
        }

        .content {
            padding-top: 40px;
        }
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>
    <form class="content" action="book.php" method="POST">
        <h2 style="color:black; margin-top: 0;">Information</h2>
        <div class="wrapper">
            <div class="row">
                <div class="col-md-6">
                    <h4>Customer's Name</h2>
                        <input class="form-control" value="<?php echo $result['username'] ?>" type="text"
                            placeholder="Provide your Full Name" name="name" required>
                        <br>
                        <h4>E-mail</h4>
                        <input class="form-control" value="<?php echo $result['email'] ?>" type="text" readonly="readonly"
                            placeholder="Provide your E-mail Address" name="email">
                        <br>
                        <h4>Mobile</h4>
                        <input class="form-control" value="<?php echo $result['mobile'] ?>" type="text" readonly="readonly"
                            placeholder="Provide your Mobile No" name="phone">
                        <br>
                        <h4>Address</h4>
                        <textarea class="form-control" readonly="readonly" placeholder="Provide your Address" name="address"><?php echo $result['addressline'] ?></textarea>
                        <br>
                        <h4>Price</h4>
                        <input class="form-control" value="<?php echo $date ?>" type="text" readonly="readonly"
                            placeholder="Provide your transaction ID" name="price">
                </div>
                <div class="col-md-6">
                    <h4>Occupancy</h4>
                    <select name="room_type" class="form-control" style="height: 50px;" required>
                        <option>Deluxe Room</option>
                        <option>Luxurious Suite</option>
                        <option>Standard Room</option>
                        <option>Suite Room</option>
                        <option>Twin Deluxe Room</option>
                    </select>
                    <br>
                    <h4>Check in Date</h4>
                    <input class="form-control" value="<?php echo $start ?>" type="date" placeholder="" name="cdate" required>
                    <br>
                    <h4>Check in Time</h4>
                    <input class="form-control" value="<?php echo $end ?>" type="text" placeholder="" name="time" required>
                    <br>
                    <h4>Check out Date</h4>
                    <input class="form-control" value="<?php echo $end ?>" type="text" placeholder="" name="codate" required>
                    <br>
                    <h4>Occupancy</h4>
                    <select name="Occupancy" class="form-control" style="height: 50px;" required>
                        <option value="Single">Single</option>
                        <option value="Twin">Twin</option>
                        <option value="Double">Double</option>
                    </select>
                    <input class="btn btn-primary" name="savedata" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </form>
    <?php include('footer.php'); ?>

</body>

</html>