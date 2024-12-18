<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

mysqli_query($conn,"DELETE FROM reginfo WHERE id = '".$_GET['user_del']."'");
header("location:all_users.php");  

?>
