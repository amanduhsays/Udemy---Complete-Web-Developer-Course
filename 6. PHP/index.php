<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Weather Predictor</title>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>
<body>
  <div class="container-fluid">
  <div class="loader"></div>
    <div class="myContainer">
      <h1>Weather Predictor</h1>
      <p>Enter your city below to get a forecast for the weather</p>
      <form>
        <input type="text" class="form-control" placeholder="E.g. London" id="city">
        <div class="alertSuccess"></div>
        <div class="alertFail"></div>
        <button type="submit" class="btn btn-success btn-md" id="find-my-weather">Find my Weather</button>
      </form>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/script.js" type="text/javascript"></script>
</body>
</html>