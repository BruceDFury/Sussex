<?php
require_once 'header.php'; 
?>

<div class="row container" style="margin-top: -20px;">
    <div class="col-sm-12">
      <a href="dashboard.php" style="font-size: 18pt; text-decoration: none;">Dashboard / </a><a href="events.php" style="text-decoration: none; font-size: 18pt;">Events</a><font style="font-size: 18pt"> / Rock Climbing</font>
    </div>
</div>

<main role="main">

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card mt-4 mb-3">
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <img src="img/rancrisp_devilled_cashew_nuts_100g.jpg" class="card-img">
                    </div>

                    <div class="col-md-6">
                        <p class="card-text"><small><b>Status: Pending</b></small></p>

                        <h5 class="card-title"><b>Rock Climbing</b></h5>

                        <p class="card-text"><small>15th February 2021 | 5 - days | 10 Users</small></p>
                        <form action="eventPreview.php" method="POST">
                          <input type="submit" name="checkout" class="btn btn-info" value="Preview" />
                        </form>
                    </div>
                </div>        
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="row align-items-center">
                    <!-- <div class="card-body"> -->
                        <div class="col-md-9">
                            <p align="justify">Rock climbing is the sport or activity of climbing rock faces, especially with the aid of ropes and special equipment. The concept is to reach an end point, or a summit, of a rock face or structure. ... There are many types of rock climbing, each with their own equipment, setting, and surface(s)</p>
                        </div>
                        <div class="col-md-3" style="text-align: center;">
                            <form action="#" method="POST">
                                <span style='font-size:30px;'>&#8356; 228</span>
                                <br/>
                                <input type="submit" name="checkout" class="btn btn-success" value="Checkout" />
                            </form>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

</div>
</br>
<?php
require_once 'footer.php'; 
?>                 