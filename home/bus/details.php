<?php
include("../../config.php");
error_reporting(0);
session_start();
if (empty($_SESSION['user_id'])) {
    header('location:../../user/login.php');
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from seat.php
        $selectedSeats = $_POST['selectedSeats'] ?? '';
        $totalFare = $_POST['totalFare'] ?? '';
        $totalSeat = $_POST['totalSeat'] ?? '';

        // Store the data in session for forwarding
        $_SESSION['selectedSeats'] = $selectedSeats;
        $_SESSION['totalFare'] = $totalFare;
        $_SESSION['totalSeat'] = $totalSeat;
        $bus_name = $_SESSION['Bus_name'];
        $start = $_SESSION['Origin'];
        $end = $_SESSION['Destination'];
        $date = $_SESSION['Date'];

    } else {
        // Redirect back to seat.php or handle the error
        header('Location: seat.php');
        exit;
    }
    $sql = mysqli_query($conn, "select * from reginfo where id='" . $_SESSION["user_id"] . "' ");
    $result = mysqli_fetch_assoc($sql);

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
                            placeholder="Provide your transaction ID" name="name">
                        <br>
                        <h4>Bus Name</h4>
                        <input class="form-control" value="<?php echo $bus_name ?>" type="text" readonly="readonly"
                            placeholder="Provide your transaction ID" name="bname">
                        <br>
                        <h4>Seat Name</h4>
                        <input class="form-control" value="<?php echo $selectedSeats ?>" type="text" readonly="readonly"
                            placeholder="Provide your transaction ID" name="seat">
                        <br>
                        <h4>Total Fare</h4>
                        <input class="form-control" value="<?php echo $totalFare ?>" type="text" readonly="readonly"
                            placeholder="Provide your transaction ID" name="fare">
                        <br>
                        <h4>Date of journey</h4>
                        <input class="form-control" value="<?php echo $date ?>" type="text" readonly="readonly"
                            placeholder="Provide your transaction ID" name="doj">
                    </div>
                    <div class="col-md-6 .frm">
                        <h4>Starting Point</h4>
                        <input class="form-control" value="<?php echo $start ?>" type="text" readonly="readonly"
                            placeholder="Provide your transaction ID" name="start">
                        <br>
                        <h4>Destination Point</h4>
                        <input class="form-control" value="<?php echo $end ?>" type="text" readonly="readonly"
                            placeholder="Provide your transaction ID" name="destination">
                        <br>
                        <h4>Select a Payment Method</h4>
                        <select name="Bank" class="form-control" style="height: 50px;">
                            <option value="Bkash">BKash</option>
                            <option value="Nagad">Nagad</option>
                        </select>
                        <br>
                        <h4>Transaction ID</h4>
                        <input class="form-control" type="text" placeholder="Provide your transaction ID" name="trans">
                        <br>
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </form>
        <?php include('footer.php'); ?>

        <!-- <script>
            function calculateTotalFare() {
                var seats = document.getElementById('seats').value;
                var farePerSeat = 
                
                var totalFare = seats * farePerSeat;
                document.getElementById('totalFare').textContent = totalFare;
            }

            document.getElementById('seats').addEventListener('input', calculateTotalFare);
        </script> -->
    </body>

    </html>
<?php } ?>