<?php
include("../../config.php");
error_reporting(0);
session_start();
$_SESSION['bus_id'] = $_GET['bus_id'];
$_SESSION['Bus_name'] = $_GET['Name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Ticket Booking</title>
  <link rel="icon" href="#">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animsition.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <script src="js/skel.min.js"></script>
  <script src="js/skel-layers.min.js"></script>
  <script src="js/init.js"></script>
  <style>
    body {
      background-color: #f8f9fa;
    }

    .page-wrapper {
      padding-top: 68px;
      padding-bottom: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      /* Used for inpper pages if navigation fixed to the top */
    }

    .container {
      z-index: 1;
    }

    .ticket-selector {
      background-color: #fff;
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 5px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 400px;
    }

    .seat {
      width: 50px;
      height: 50px;
      background: white;
      border-radius: 5px;
      border: 1px solid #ced4da;
      cursor: pointer;
    }

    .seat.selected {
      background-color: #007bff;
      color: white;
    }

    .seat.booked {
      background: #b4b4b4;
      cursor: not-allowed;
    }

    .seat-row {
      display: flex;
      justify-content: center;
      margin-bottom: 10px;
    }

    .seat-gap {
      width: 50px;
      height: 50px;
      background: transparent;
      border: none;
    }

    .total {
      font-size: 16px;
      font-weight: 500;
    }

    .selected-seats {
      background-color: #fff;
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 5px;
      padding: 20px;
      width: 300px;
    }

    .proceed-button {
      display: block;
      margin-top: 20px;
      width: 100%;
    }
  </style>
</head>

<body>
  <?php include('navbar.php') ?>
  <div class="page-wrapper">
    <div class="row">
      <div class="col-md-9">
        <div class="ticket-selector">
          <h3 class="text-center mb-4">Bus Seating</h3>
          <div class="seats mb-4">
            <div class="seat-row">
              <div class="seat" data-name="A1"></div>
              <div class="seat" data-name="A2"></div>
              <div class="seat-gap"></div>
              <div class="seat" data-name="A3"></div>
              <div class="seat" data-name="A4"></div>
            </div>
            <div class="seat-row">
              <div class="seat" data-name="B1"></div>
              <div class="seat" data-name="B2"></div>
              <div class="seat-gap"></div>
              <div class="seat" data-name="B3"></div>
              <div class="seat" data-name="B4"></div>
            </div>
            <div class="seat-row">
              <div class="seat" data-name="C1"></div>
              <div class="seat" data-name="C2"></div>
              <div class="seat-gap"></div>
              <div class="seat" data-name="C3"></div>
              <div class="seat" data-name="C4"></div>
            </div>
            <div class="seat-row">
              <div class="seat" data-name="D1"></div>
              <div class="seat" data-name="D2"></div>
              <div class="seat-gap"></div>
              <div class="seat" data-name="D3"></div>
              <div class="seat" data-name="D4"></div>
            </div>
            <div class="seat-row">
              <div class="seat" data-name="E1"></div>
              <div class="seat" data-name="E2"></div>
              <div class="seat-gap"></div>
              <div class="seat" data-name="E3"></div>
              <div class="seat" data-name="E4"></div>
            </div>
            <div class="seat-row">
              <div class="seat" data-name="F1"></div>
              <div class="seat" data-name="F2"></div>
              <div class="seat-gap"></div>
              <div class="seat" data-name="F3"></div>
              <div class="seat" data-name="F4"></div>
            </div>
            <div class="seat-row">
              <div class="seat" data-name="G1"></div>
              <div class="seat" data-name="G2"></div>
              <div class="seat-gap"></div>
              <div class="seat" data-name="G3"></div>
              <div class="seat" data-name="G4"></div>
            </div>
            <div class="seat-row">
              <div class="seat" data-name="H1"></div>
              <div class="seat" data-name="H2"></div>
              <div class="seat-gap"></div>
              <div class="seat" data-name="H3"></div>
              <div class="seat" data-name="H4"></div>
            </div>
            <div class="seat-row">
              <div class="seat" data-name="I1"></div>
              <div class="seat" data-name="I2"></div>
              <div class="seat-gap"></div>
              <div class="seat" data-name="I3"></div>
              <div class="seat" data-name="I4"></div>
            </div>
            <div class="seat-row">
              <div class="seat" data-name="J1"></div>
              <div class="seat" data-name="J2"></div>
              <div class="seat" data-name="J3"></div>
              <div class="seat" data-name="J4"></div>
              <div class="seat" data-name="J5"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="selected-seats">
          <h3 class="mb-4">Selected Seats</h3>
          <ul id="selectedSeats"></ul>
          <div class="total mt-4">
            <span class="font-weight-bold">Total Fare:</span> ৳<span id="totalAmount">0</span><br>
            <span class="font-weight-bold">Total Selected Seat:</span> <span id="totalSeat">0</span>
          </div>
        </div>

        <form id="bookingForm" action="details.php" method="POST">
          <input type="hidden" id="selectedSeatsInput" name="selectedSeats">
          <input type="hidden" id="totalFareInput" name="totalFare">
          <input type="hidden" id="totalSeatInput" name="totalSeat">
          <button type="submit" class="btn btn-primary proceed-button" disabled>Proceed to Details</button>
        </form>
      </div>
    </div>
  </div>

  <?php include('footer.php') ?>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const seats = document.querySelectorAll('.seat');
      const selectedSeatsList = document.getElementById('selectedSeats');
      const totalAmountDisplay = document.getElementById('totalAmount');
      const totalSeatDisplay = document.getElementById('totalSeat');
      const proceedButton = document.querySelector('.proceed-button');

      seats.forEach(seat => {
        seat.addEventListener('click', () => {
          if (!seat.classList.contains('booked')) {
            seat.classList.toggle('selected');
            updateSelectedSeats();
          }
        });
      });

      function updateSelectedSeats() {
        const selectedSeats = document.querySelectorAll('.selected');
        const numberOfSelectedSeats = selectedSeats.length;
        const selectedSeatNames = [];
        let totalFare = 0;

        selectedSeats.forEach(seat => {
          selectedSeatNames.push(seat.dataset.name);
          totalFare += <?php echo $_GET['fare']; ?>;;
        });

        document.getElementById('selectedSeatsInput').value = selectedSeatNames.join(','); // Store selected seat names
        document.getElementById('totalFareInput').value = totalFare; // Store total fare
        document.getElementById('totalSeatInput').value = numberOfSelectedSeats;

        totalAmountDisplay.textContent = totalFare;
        totalSeatDisplay.textContent = numberOfSelectedSeats;

        proceedButton.disabled = selectedSeats.length === 0;
      }
    });
  </script>
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/animsition.min.js"></script>
  <script src="js/bootstrap-slider.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/headroom.js"></script>
  <script src="js/foodpicky.min.js"></script>
</body>

</html>