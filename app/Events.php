<?php
require_once 'header.php'; 
?>

<div class="row container"  style="margin-top: -20px;">
    <div class="col-sm-12">
      <a href="dashboard.php" style=" font-size: 18pt; text-decoration: none;">Dashboard</a><font style="font-size: 18pt"> / Events</font>
    </div>
</div>
<?php
if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
    ?>
        <div class="alert alert-danger" align="center">
          <strong><?php echo $_SESSION['error'];?></strong>
        </div>
    <?php
        unset($_SESSION['error']);
    }
?>

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
    $searchDate = date("Y/m/d h:i:sa");

    $query = "SELECT * FROM event WHERE event_name LIKE '%$search%' AND event_startdate > '$searchDate'";
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
                <img src="/Sussex/Admin/pages/img/<?php echo $row['photo']?>" class="card-img" alt="...">
              </div>
              <div class="col-sm-6">
                <div class="card-body">

                  <p class="card-text" style="font-size: 12pt;"><b>Status: <?php echo $row['event_status'];?></b></p>

                  <h3 class="card-title"><b><?php echo $row['event_name'];?></b></h3>
                  <?php
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
                  ?>

                </div>
              </div>
              <div class="col-sm-3">
                <form action="payment.php" method="POST">
                  <span style='font-size:30px;'>&#8356; <?php echo $row['event_price'];?></span>
                  <br/>
                  <input type="hidden" name="event_id" value="<?php echo $row['id'];?>">
                  <input type="hidden" name="event" value="<?php echo $row['event_name'];?>"/>
                  <input type="hidden" name="evt_date" value="<?php echo $row['event_startdate'];?>"/>
                  <input type="submit" name="checkout" class="btn btn-success" value="Checkout" />
                  <input type="hidden" name="total" value="<?php echo $row['event_price'];?>"/>
                  <input type="hidden" name="orderno" value="<?php echo time();?>"/>
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

    $searchDate = date("Y/m/d h:i:sa");

    $query = "SELECT * FROM event WHERE event_startdate > '$searchDate'";
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
                  <img src="/Sussex/Admin/pages/img/<?php echo $row['photo']?>" class="card-img" alt="...">
              </div>
              <div class="col-sm-6">
                <div class="card-body">
      
                  <p class="card-text" style="font-size: 12pt;"><b>Status: <?php echo $row['event_status'];?></b></p>

                  <h3 class="card-title"><b><?php echo $row['event_name'];?></b></h3>
                  <?php
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
                

                  echo'<form action="eventpreview.php" method="POST">';
                  echo '<input type="submit" class="btn btn-primary primary-bg mt-4" name="preview" value="Preview"/>';
                  echo '<input type="hidden" name="img" value="'.$row['photo'].'"/>';
                  echo '<input type="hidden" name="status" value="'.$row['event_status'].'"/>';
                  echo '<input type="hidden" name="name" value="'.$row['event_name'].'"/>';
                  echo '<input type="hidden" name="date" value="'.date_format($date,"d/F/Y").'"/>';
                  echo '<input type="hidden" name="days" value="'.$days.'"/>';
                  echo '<input type="hidden" name="users" value="'.$Count.'"/>';
                  echo '<input type="hidden" name="evt_date" value="'.$event_date.'"/>';
                  echo '<input type="hidden" name="dec" value="'.$row['event_description'].'"/>';
                  echo '<input type="hidden" name="amount" value="'.$row['event_price'].'"/>';
                  echo '<input type="hidden" name="eid" value="'.$row['id'].'"/>';
                  echo '</form>';

                  ?>
                </div>
              </div>
              <div class="col-sm-3">
                <form action="payment.php" method="POST">
                  <span style='font-size:30px;'>&#8356; <?php echo $row['event_price'];?></span>
                  <br/>
                  <input type="hidden" name="event_id" value="<?php echo $row['id'];?>">
                  <input type="hidden" name="event" value="<?php echo $row['event_name'];?>"/>
                  <input type="hidden" name="evt_date" value="<?php echo $row['event_startdate'];?>"/>
                  <input type="submit" name="checkout" class="btn btn-success" value="Checkout" />
                  <input type="hidden" name="total" value="<?php echo $row['event_price'];?>"/>
                  <input type="hidden" name="orderno" value="<?php echo time();?>"/>
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