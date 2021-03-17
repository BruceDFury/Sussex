<!DOCTYPE html>
<html>
<head>
  <title>Sussex</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- bootstrab and javascript libraries for tokenfield tags -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>

  <!-- Bootstrap CSS 5-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="row bg-dark" style="margin-top: -15px;">
  <div class="col-sm-12" style="text-align: right;">    
    <?php
    session_start();
    require_once 'db_connector.php';
    
    if((isset($_SESSION['first_name']) && !empty($_SESSION['first_name']))) {

        echo '<li class="nav-item">
        <a class="nav-link" href="signout.php" style="font-size: 15pt;">Welcome '.$_SESSION['first_name'].'. Sign Out</a>
        </li>';

      } else{

        echo '<li class="nav-item">
        <a class="nav-link" href="login.php" style="font-size: 15pt;">Login/Sign up</a>
        </li>';
      }

      ?>

  </div>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-right: -15px;">
  <a class="navbar-brand" href="index.php">Sussex Companions</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#aboutUs">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#upcomingEvents">Upcoming Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#customers">Customers</a>
      </li>
      <?php
      if((isset($_SESSION['first_name']) && !empty($_SESSION['first_name']))) {

        echo '<li class="nav-item">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>';
      }
      ?>      
    </ul>
  </div>  
</nav>