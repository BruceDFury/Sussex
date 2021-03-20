<?php
require_once 'header.php';

if (isset($_POST['preview'])) 
{
    $_SESSION['img'] = $_POST['img'];
    $_SESSION['status'] = $_POST['status'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['days'] = $_POST['days'];
    $_SESSION['users'] = $_POST['users'];
    $_SESSION['dec'] = $_POST['dec'];
    $_SESSION['amount'] = $_POST['amount'];
    $_SESSION['eid'] = $_POST['eid'];
    $_SESSION['evt_date'] = $_POST['evt_date'];
    
}

$eid = $_SESSION['eid'];
$img = $_SESSION['img'];
$status =  $_SESSION['status'];
$name = $_SESSION['name'];
$date = $_SESSION['date'];
$days =  $_SESSION['days'];
$users = $_SESSION['users'];
$dec = $_SESSION['dec'];
$amount = $_SESSION['amount'];
$event_date = $_SESSION['evt_date'];
?>

<div class="row container" style="margin-top: -20px;">
    <div class="col-sm-12">
      <a href="dashboard.php" style="font-size: 18pt; text-decoration: none;">Dashboard / </a><a href="events.php" style="text-decoration: none; font-size: 18pt;">Events</a><font style="font-size: 18pt"> / <?php echo $name;?></font>
    </div>
</div>

<main role="main">

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card mt-4 mb-3">
                <div class="row mt-3 mb-3 align-items-center">
                    <div class="col-md-3">
                    
                         <img src="/Sussex/Admin/pages/img/<?php echo $img;?>" class="card-img">
                       
                    </div>

                    <div class="col-md-6">
                        <p class="card-text" style="font-size: 12pt;"><b>Status: <?php echo $status;?></b></p>

                        <h3 class="card-title"><b><?php echo $name;?></b></h3>

                        </br>
                        <p class="card-text" style="font-size: 12pt;"><?php echo $date;?> | <?php echo $days;?> - days | <?php echo $users;?> Users</p>
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
                            <p align="justify" style="font-size: 12pt;"><?php echo $dec;?></p>
                        </div>
                        <div class="col-md-3" style="text-align: center;">
                            <form action="payment.php" method="POST">
                                <span style='font-size:30px;'>&#8356; <?php echo $amount;?></span>
                                <br/>
                                <input type="hidden" name="event_id" value="<?php echo $eid;?>">
                                <input type="hidden" name="event" value="<?php echo $name;?>"/>
                                <input type="hidden" name="evt_date" value="<?php echo $event_date;?>"/>
                                <input type="submit" name="checkout" class="btn btn-success" value="Checkout" />
                                <input type="hidden" name="total" value="<?php echo $amount;?>"/>
                                <input type="hidden" name="orderno" value="<?php echo time();?>"/>
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