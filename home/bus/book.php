<?php
include "../../config.php";
session_start();

// Check if all required fields are set
if(isset($_POST['name'], $_POST['seat'], $_POST['fare'], $_POST['doj'], $_POST['start'], $_POST['destination'], $_POST['Bank'], $_POST['trans'])) {
    // Assign POST data to variables
    $name = $_POST['name'];
    $seat = $_POST['seat'];
    $fare = $_POST['fare'];
    $doj = $_POST['doj'];
    $start = $_POST['start'];
    $destination = $_POST['destination'];
    $bank = $_POST['Bank'];
    $trans = $_POST['trans'];

    // Prepare and execute INSERT query
    $ins = "INSERT INTO booking (id, Date, bus_id, seat_name, start, destination, Total_fare, transaction_id, Payment_method)
            VALUES ('".$_SESSION['user_id']."', '$doj', '".$_SESSION['bus_id']."', '$seat', '$start', '$destination', '$fare', '$trans', '$bank')";

    if(mysqli_query($conn, $ins)) {
        // If insertion successful, update the seat count
        $req = $_SESSION['totalSeat'];
        $id = $_SESSION['bus_id'];
        $upd = "UPDATE bus SET Seats = Seats - $req WHERE bus_id = $id";

        if(mysqli_query($conn, $upd)) {
            echo "<script>alert('Booking successful!')</script>";
            echo "<script>location.href='home.php'</script>";
            exit; // Exit script after redirect
        } else {
            echo "<script>alert('Failed to update seat count: " . mysqli_error($conn) . "')</script>";
        }
    } else {
        echo "<script>alert('Failed to insert booking: " . mysqli_error($conn) . "')</script>";
    }
} else {
    echo "<script>alert('Missing required fields')</script>";
    // Handle missing fields error here, redirect or display a message as needed
}
?>
