<?php
include("../../config.php");
error_reporting(0);
session_start();

mysqli_query($conn,"DELETE FROM hotel WHERE hotel_id = '".$_GET['res_del']."'");
header("location:all_hotel.php");  

?>
