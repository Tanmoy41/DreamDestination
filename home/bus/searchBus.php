<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wrapper {
            max-width: 450px;
            padding: 20px 30px;
            min-height: 300px;
            border-top: 1px solid #ffffff6e;
            border-left: 1px solid #ffffff6e;
            border-radius: 15px;
            margin: 0 auto;
            margin: 50px auto; /* Center the form horizontally and add space at the top */
            padding: 20px 0;
            position: relative;
        }
        h2 {
            color: black; /* Adjust this value to move the heading above the navbar */
            text-align: center; /* Add this line */
        }
        .content {
            padding-top: 60px; /* Adjusted padding to make space for the navbar */
        }

    </style>
</head>

<body>
    <?php include('navbar.php'); ?>
    <form class="content" action="busDetails.php" method="POST">
    <h2 style="color:black; margin-top: 0;">Search Buses</h2>
        <div class="wrapper">
            From
            <input class="form-control" placeholder="Enter a city" type="text" name="Origin">
            <br> To
            <input class="form-control" type="text" placeholder="Enter a city" name="Destination">
            <br> Date of journey
            <input class="form-control" type="date" placeholder="Enter a date (e.g., Tokyo)" name="Date"
                style="width:450px;">
            <br>
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>

    </form>
    <?php include('footer.php'); ?>
</body>

</html>