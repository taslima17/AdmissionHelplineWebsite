<?php
include("user.php");
$profile=new user;
$profile->cat_shows();

?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Model Test Question</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Online Model Test</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    
   
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <center> <button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Start Quiz</button></center>
      <div class="col-sm-4"></div>
       <div class="col-sm-4"><br>

       <div id="select" class="tab-pane fade">
      <select class="form-control" id="sel1" onchange="la(this.value)">
        <option disable="disable">select catagory</option>
        
        
<option value="English.php">English</option>
<option value="gk.php">General knowledg</option>
<option value="math.php">Mathematics</option>
<option value="Analytical.php">Analytical Ability</option>
        
      </select>
      <script>
      function la(src)
      {
        window.location=src;
      }

      </script>
    </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Showing profile</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>
