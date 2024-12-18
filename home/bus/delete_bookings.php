<?php
include("../../config.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($conn,"DELETE FROM booking WHERE Booking_id = '".$_GET['book_del']."'"); 
header("location:yourBookings.php");

?>
