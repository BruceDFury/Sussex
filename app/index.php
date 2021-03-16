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
      <img src="img/slide1.jpg" alt="Los Angeles" style="width:100%; height: 650px;">
    </div>

    <div class="item">
      <img src="img/slide2.jpg" alt="Chicago" style="width:100%; height: 650px;">
    </div>
  
    <div class="item">
      <img src="img/slide3.jpg" alt="New york" style="width:100%; height: 650px;">
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
  echo '<div class="col-md-3">';
        echo '<div class="card mt-2 mb-2">';
        echo '<img src="img/rancrisp_devilled_cashew_nuts_100g.jpg" class="card-img-top" alt="...">';
        echo '<div class="card-body">';
        echo '<p class="card-text"><small><b>Status: Pending</b></small></p>';
        echo '<h5 class="card-title">Rock Climbing</h5>';
        echo '<p class="card-text"><small>15th February 2021 | 5 - days | 10 Users</small></p>';
        if((isset($_SESSION['name']) && !empty($_SESSION['name']))) {

          echo '<a href="eventpreview.php" class="btn btn-primary primary-bg mt-4" name="preview">Preview</a>';

        } else{
          echo '<a href="login.php" class="btn btn-primary primary-bg mt-4" name="preview">Login to Preview</a>';

        }
       /* echo '<input type="hidden" name="id" value="'.$value['id'].'"/>';
        echo '<input type="hidden" name="hidden_name" value="'.$value['name'].'"/>';
        echo '<input type="hidden" name="hidden_price" value="'.$value['price'].'"/>';*/
        echo '</div></div></div>';
    ?>
</div>

<div id="customers" class="container">
  <h1>Customers</h1>

  <div class="col-md-1">
    <div class="card mt-2 mb-2" style="border: none;">
      <img src="img/" onerror=this.src="img/person_alt.png" style="vertical-align: middle; width: 50px; height: 50px; border-radius: 50%;">
      <p class="card-text">Mr. John</p>
    </div>
  </div>

</div>


<?php
  require_once 'footer.php';
?>