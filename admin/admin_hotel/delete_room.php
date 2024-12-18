<?php
include("../../config.php");
error_reporting(0);
session_start();

mysqli_query($conn,"DELETE FROM rooms WHERE room_id = '".$_GET['menu_del']."'");
header("location:all_room.php");  

?>
