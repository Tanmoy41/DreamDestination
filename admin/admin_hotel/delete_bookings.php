<?php
include("../../config.php");
error_reporting(0);
session_start();

mysqli_query($conn,"DELETE FROM room_booking_details WHERE book_id = '".$_GET['order_del']."'");
header("location:all_orders.php");  

?>
