<?php
include("../../config.php");
error_reporting(0);
session_start();

mysqli_query($conn,"DELETE FROM bus WHERE bus_id = '".$_GET['bus_del']."'");
header("location:all_bus.php");

?>
