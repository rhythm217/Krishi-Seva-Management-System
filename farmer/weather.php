<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <title>Weather App With JavaScript</title>
    <link rel="stylesheet" href="weather_style.css">
</head>
<body>

<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid"> 
            <a class="navbar-brand" href="farmer_dashboard.php">Krishi Seva Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <span class="nav-link"><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link"><strong>Email: <?php echo $_SESSION['email'];?></strong></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->


    <div class="container">
        <div class="header">
            <div class="search-box">
                <input type="text" placeholder="Enter your location" class="input-box">

                <button class="fa-solid fa-magnifying-glass" id="searchBtn"></button>
            </div>
        </div>

        <div class="location-not-found">
            <h1>Sorry, Location not found!!!</h1>
            <img src="../admin/images/404.png" alt="404 Error">
        </div>

        <div class="weather-body">
            <img src="../admin/images/cloud.png" alt="Weather Image" class="weather-img">

            <div class="weather-box">
                <p class="temperature">0 <sup>°C</sup></p>
                <p class="description">light rain</p>
            </div>

            <div class="weather-details">
                <div class="humidity">
                    <i class="fa-sharp fa-solid fa-droplet"></i>
                    <div class="text">
                        <span id="humidity">45%</span>
                        <p>Humidity</p>
                    </div>
                </div>

                <div class="wind">
                    <i class="fa-solid fa-wind"></i>
                    <div class="text">
                        <span id="wind-speed">12Km/H</span>
                        <p>Wind Speed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="weather_script.js"></script>
    <script src="https://kit.fontawesome.com/595a890311.js" crossorigin="anonymous"></script>
</body>
</html>