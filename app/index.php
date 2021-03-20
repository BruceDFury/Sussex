<?php
  require_once 'header.php';
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -20px;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/slide/slide1.jpg" alt="Los Angeles" style="width:100%; height: 650px;">
    </div>

    <div class="item">
      <img src="img/slide/slide2.jpg" alt="Chicago" style="width:100%; height: 650px;">
    </div>
  
    <div class="item">
      <img src="img/slide/slide3.jpg" alt="New york" style="width:100%; height: 650px;">
    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div id="aboutUs" class="container">
  <h1>About Us</h1>
  <p align="justify"><font size="4"><b>Sussex Companions</b></font> (SC) is a club for the over 50s, which seeks to match up individuals with new friends. The company is based in Brighton - a charming city by the sea on the South Coast of England. Many people move to Brighton and other places on the South Coast after retirement and seek to find new friends with similar hobbies and interests. SC has lots of customers and is thriving as a business.
  </p>
  <p align="justify">The company is fairly traditional – the staff meet new clients in person to get to know them and identify potential matches by hand rather than with an automated system. In addition to matching individuals up with new friends, they also host several events each year, to which all clients are invited. These range from evenings lectures to coastal walks and yacht trips – even skydiving and rock-climbing trips have been arranged for the more adventurous clients. The success of SC in helping to create new friendships means that a good deal of business comes from personal recommendations.</p>
  <p align="justify">Having developed largely through word-of-mouth, they have grown very rapidly over the past decade and have recently opened up new offices in the nearby towns of Eastbourne and Bognor Regis, which are also attracting a large number of clients.</p>
</div>

<div id="upcomingEvents" class="container">
  <h1>Upcoming Events</h1>

  <?php

  $searchDate = date("Y/m/d h:i:sa");

  $queryEvent = "SELECT * FROM event WHERE event_startdate > '$searchDate' LIMIT 12";
  $resultEvent = mysqli_query($conn, $queryEvent);

  if(mysqli_num_rows($resultEvent) > 0)
  {
    while($row = mysqli_fetch_array($resultEvent))
    {
      echo '<div class="col-md-3">';
      echo '<div class="card mt-2 mb-2">';
      echo '<img src="/Sussex/Admin/pages/img/'.$row['photo'].'" class="card-img-top" alt="...">';
      echo '<div class="card-body">';
      echo '<p class="card-text"><b>Status: '.$row['event_status'].'</b></p>';
      echo '<h3 class="card-title">'.$row['event_name'].'</h3>';
      
      //date format
      $date=date_create($row['event_startdate']);

      //timstamp to date start
      $sd = $row['event_startdate'];
      $timestampsd = strtotime($sd);

      //timstamp to date end
      $ed = $row['event_enddate'];
      $timestamped = strtotime($ed);
      
      $days = (strtotime(date("Y-m-d", $timestamped)) - strtotime(date("Y-m-d", $timestampsd)))/60/60/24;

      $event_name = $row['event_name'];
      $event_date = $row['event_startdate'];

      //count users
      $countUsers = "SELECT * FROM payments WHERE event = '$event_name' AND edate = '$event_date' AND status = 'valid'";
      $resUsrCnt = mysqli_query($conn,$countUsers);
      $Count = mysqli_num_rows($resUsrCnt);

      echo '<p class="card-text" style="font-size:12pt;">'.date_format($date,"d/F/Y").' | '.$days.' - days | '.$Count.' Users</p>';
      if(isset($_SESSION['first_name']) && !empty($_SESSION['first_name'])) 
      {

        echo'<form action="eventpreview.php" method="POST">';
        echo '<input type="submit" class="btn btn-primary primary-bg mt-4" name="preview" value="Preview"/>';
        echo '<input type="hidden" name="img" value="'.$row['photo'].'"/>';
        echo '<input type="hidden" name="status" value="'.$row['event_status'].'"/>';
        echo '<input type="hidden" name="name" value="'.$row['event_name'].'"/>';
        echo '<input type="hidden" name="date" value="'.date_format($date,"d/F/Y").'"/>';
        echo '<input type="hidden" name="evt_date" value="'.$row['event_startdate'].'"/>';
        echo '<input type="hidden" name="days" value="'.$days.'"/>';
        echo '<input type="hidden" name="users" value="'.$Count.'"/>';
        echo '<input type="hidden" name="dec" value="'.$row['event_description'].'"/>';
        echo '<input type="hidden" name="amount" value="'.$row['event_price'].'"/>';
        echo '<input type="hidden" name="eid" value="'.$row['id'].'"/>';
        echo '</form>';

      }
      else
      {
        echo '<a href="login.php" class="btn btn-primary primary-bg mt-4" name="preview">Login to Preview</a>';

      }
      echo '</div></div></div>';
    }
  }else{
    echo '<h3 style="color: red; text-align: center;">No Upcomming Events!</h3>';
  }

    ?>
</div>

<div id="customers" class="container">
  <h1>Customers</h1>

  <?php
  $query = "SELECT * FROM member LIMIT 12";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_array($result))
    {
  
      echo '<div class="col-md-1">';
      echo '<div class="card mt-2 mb-2" style="border: none;">';
      echo '<img src="img/users/'.$row['image'].'" onerror=this.src="img/users/person_alt.png" style="vertical-align: middle; width: 70px; height: 70px; border-radius: 50%;">';
      echo'<p class="card-text" align="center">'.$row['title']." ".$row['firstName'].'</p>';
      echo '</div></div>';
    }
  }else
    echo '<h3 style="color: red; text-align: center;">No Users!</h3>';
  ?>

</div>

<?php
  require_once 'footer.php';
?>