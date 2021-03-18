<?php
require_once 'header.php'; 
?>

<div class="row container"  style="margin-top: -20px;">
    <div class="col-sm-12">
      <a href="dashboard.php" style=" font-size: 18pt; text-decoration: none;">Dashboard</a><font style="font-size: 18pt"> / Events</font>
    </div>
</div>

<form action="events.php" method="POST" class="d-flex" style="justify-content: center; margin-top: 20px;">
</br>
  <input type="text" name="search" class="form-control" style="width: 400px;">
  <button type="submit" class="btn btn-primary" name="btn_search" style="margin-left: 10px;">Search</button>
</form>

<div class="container" style="margin-top: 25px;">
  <div class="row" style="justify-content: center;">
  
  <?php
  if(isset($_POST['btn_search']) && !empty(trim($_POST['search'])))
  {

    $search = $_POST['search'];

    $query = "SELECT * FROM event WHERE event_name LIKE '%$search%'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {

      echo '<h3 style="text-align: center;">Showing results for: <font color="red">'.$search.'</font></h3>';
      
      while($row = mysqli_fetch_array($result))
      {
    ?>
      <div class="col-md-6">
          <div class="card mt-2 mb-3" style="border:solid; border-width: 1px;  border-radius: 25px; padding: 10px;">
            <div class="row align-items-center" style="text-align: center;">
              <div class="col-sm-3">
                <a href="/sussex/app/img/events/rancrisp_devilled_cashew_nuts_100g.jpg" target="_blank">
                  <img src="img/events/rancrisp_devilled_cashew_nuts_100g.jpg" class="card-img" alt="..." style="padding: 10px;">
                </a>
              </div>
              <div class="col-sm-6">
                <div class="card-body">

                  <p class="card-text"><small><b>Status: Pending</b></small></p>

                  <h5 class="card-title"><b>Rock Climbing</b></h5>

                  <p class="card-text"><small>15th February 2021 | 5 - days | 10 Users</small></p>
                  <form action="eventPreview.php" method="POST">
                    <input type="submit" name="checkout" class="btn btn-info" value="Preview" />
                  </form>
                </div>
              </div>
              <div class="col-sm-3">
                <form action="#" method="POST">
                  <span style='font-size:30px;'>&#8356; 228</span>
                  <br/>
                  <input type="submit" name="checkout" class="btn btn-success" value="Checkout" />
                </form>
              </div>
            </div>
          </div>
      </div>
  <?php
      }
    }
    else{
       echo '<h3 style="color: red; text-align: center;">No Upcomming Events!</h3>';
    }
  }
  else{

    $query = "SELECT * FROM event";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0 )
    {
      while($row = mysqli_fetch_array($result))
      {
    ?>
      <div class="col-md-6">
          <div class="card mt-2 mb-3" style="border:solid; border-width: 1px;  border-radius: 25px; padding: 10px;">
            <div class="row align-items-center" style="text-align: center;">
              <div class="col-sm-3">
                <a href="/sussex/app/img/events/rancrisp_devilled_cashew_nuts_100g.jpg" target="_blank">
                  <img src="img/events/rancrisp_devilled_cashew_nuts_100g.jpg" class="card-img" alt="..." style="padding: 10px;">
                </a>
              </div>
              <div class="col-sm-6">
                <div class="card-body">

                  <p class="card-text"><small><b>Status: Pending</b></small></p>

                  <h5 class="card-title"><b>Rock Climbing</b></h5>

                  <p class="card-text"><small>15th February 2021 | 5 - days | 10 Users</small></p>
                  <form action="eventPreview.php" method="POST">
                    <input type="submit" name="checkout" class="btn btn-info" value="Preview" />
                  </form>
                </div>
              </div>
              <div class="col-sm-3">
                <form action="#" method="POST">
                  <span style='font-size:30px;'>&#8356; 228</span>
                  <br/>
                  <input type="submit" name="checkout" class="btn btn-success" value="Checkout" />
                </form>
              </div>
            </div>
          </div>
      </div>
      <?php
      }
    }else{
        echo '<h3 style="color: red; text-align: center;">No Matching Records Found!</h3>';
    }
  }
  ?>
  </div>
</div>

<?php
  require_once 'footer.php'; 
?>