<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>HOME</title>

  <style>
    body {
      background-image: url('../src/img/body.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      margin: 0;
      padding-top: 400px;
    }

    .navbar {
      background-color: white;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
    }
    .nav-item{
      border: 1px solid black;
      border-radius: 10px;
      margin-left:4px;
      margin-right:4px;
    }

    .clock-container {
      padding-top: 100px;
      text-align: center;
      color: white;

      font-size: 24px;
      position: fixed;
      top: 10px;
      right: 10px;
      text-align: right;
      font-size: 24px;

    }

    #clock {
      font-weight: bold;
    }

    #date {
      margin-top: 10px;
    }
  </style>
 <?php
 include("../elements/navbar.php");
 
 ?>
</head>

<body>

  <div class="clock-container">
    <div id="clock"></div>
    <div id="date"></div>
  </div>
</body>


<script>


  function updateClock() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();

    // Add leading zeros to single digit hours, minutes, and seconds
    hours = (hours < 10 ? "0" : "") + hours;
    minutes = (minutes < 10 ? "0" : "") + minutes;
    seconds = (seconds < 10 ? "0" : "") + seconds;

    var timeString = hours + ":" + minutes + ":" + seconds;
    var dateString = now.toDateString();

    document.getElementById("clock").textContent = timeString;
    document.getElementById("date").textContent = dateString;
  }

  // Update the clock every second
  setInterval(updateClock, 1000);

  // Initial call to display the clock immediately
  updateClock();



</script>
</html>