<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>

    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="#" style="color: black;">
            <h2>Today Weather</h2>
        </a>

    </nav>
</head>

<body>
   
    <div class="wrapper">
        <div class="img-logo">
          <img src="image/Login/7xm2_1v9x_230103-removebg-preview.png">
        </div>
        <h3> Current Weather</h3>
        <input type="text" id="city" placeholder="Enter city name">
        <div id="weather"></div>
       
        <div class="btn">
          
        <button onclick="getWeather()">Get Weather</button>
        </div>
      </div>

    <!-- Second Part -->
      <section class="services">
        <div class="">
          <div class="title">
            <h1>Choose Option For <span>Crop Rotation</span></h1>
            <span class="slogan">भाग्य के भरोसे नहीं कर्म के हौसलों पे जो आगे बढ़ता है वहीं देश का किसान!</span>
          </div>
          <div class="services_boxes">
            <div class="box">
             <img src="image/Login/plant-svgrepo-com.svg">
              <h4>Crop Suggestions </h4>
              <p>Optimizing Agricultural Choices for Higher Yields and Profitability" </p>
              <button><a href="crop  rotation/new.php">Get it</a> </button>
            </div>
    
            <div class="box ">
              <img src="image/Login/tablet-svgrepo-com.svg">
              <h4>Start with Video Kheti </h4>
              <p>Empowering Farmers Through Visual Insights and Guidance"</p>
              <button><a href="video/video.php">Get it</a></button>
            </div>
    
            <div class="box">
                <img src="image/Login/market-trends-svgrepo-com.svg">
             <i class="bi bi-cloud-sun-fill"></i>
              <h4>Market Analysis </h4>
              <p>"Navigating Opportunities for Growth and Success"</p>
              <button><a href="marketAnalysis/index.php">Get it</a></button>
            </div>
          </div>
      </div>
      <script>
      function getWeather() {
        var city = document.getElementById("city").value;
        var apiKey = "e64e60dc29ce0c9d56c2a574ecd554e8"; // replace with your own API key from OpenWeatherMap
        var url = "https://api.openweathermap.org/data/2.5/weather?q=" + city + "&appid=" + apiKey;
        $.getJSON(url, function(data) {
          var description = data.weather[0].description;
          var temperature = (data.main.temp - 273.15).toFixed(2); // convert from Kelvin to Celsius
          var humidity = data.main.humidity;
          var windSpeed = data.wind.speed;
          var weatherHTML = "<p>Description: " + description + "</p>";
          weatherHTML += "<p>Temperature: " + temperature + " &#8451;</p>";
          weatherHTML += "<p>Humidity: " + humidity + "%</p>";
          weatherHTML += "<p>Wind Speed: " + windSpeed + " m/s</p>";
          $("#weather").html(weatherHTML); // display weather information in the "weather" div
        });
      }
    </script>
</body>

</html>