<?php
require_once 'header.php'; 
?>

<div class="row bg-light"  style="margin-top: -20px;">
    <div class="col-sm-12">
      <a href="dashboard.php" style=" font-size: 18pt; text-decoration: none;">Dashboard</a><font style="font-size: 18pt"> / Events</font>
    </div>
</div>

<main role="main">

<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card mt-2 mb-3" style="border:solid; border-width: 2px;  border-radius: 25px;">
          <div class="row align-items-center" style="text-align: center;">
            <div class="col-sm-3">
              <img src="img/rancrisp_devilled_cashew_nuts_100g.jpg" class="card-img" alt="..." style="padding: 10px;">
            </div>
            <div class="col-sm-6">
              <div class="card-body">

                <p class="card-text"><small><b>Status: Pending</b></small></p>

                <h5 class="card-title">Rock Climbing</h5>

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
    <div class="col-md-2"></div>
</div>
 
<?php
  require_once 'footer.php'; 
?>