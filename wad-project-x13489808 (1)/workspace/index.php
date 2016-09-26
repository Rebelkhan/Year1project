<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Amazing Super-Duper Video Randomizer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
  
</head>
<body>

  <div id="header">

   
    <h1>Welcome To The Random Movie Generator</h1>

  </div>
    
  <div class="container">
     <button onclick ="imageDisplay()" type="button" id="firstBtn" class="btn btn-primary btn-block">click to generate random movie</button>
      <button onclick="horror()" type="button" id="secondBtn" class="btn btn-primary btn-block">Horror</button>
      <button onclick="action()" type="button" id="thirdBtn" class="btn btn-primary btn-block">Action</button>
      <button onclick="comedy()" type="button" id="fourthBtn" class="btn btn-primary btn-block">Comedy</button>
  </div>
  
  <div class="col-xs-4">
  </div>
  
  <div class="col-xs-4">
    <img name="canvas" />
  </div>
  
  <div class="col-xs-4">
  </div>
  

</body>
</html>
