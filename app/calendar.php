<?php
require_once 'header.php'; 
?>
<head>
  <!-- calendar libraries -->
  <link href='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.css' rel='stylesheet' />
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/
  bootstrap.min.css'>
  <link href='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
  <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/moment.min.js'></script>
  <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/jquery.min.js'></script>
  <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
</head>

<div class="row container"  style="margin-top: -20px;">
    <div class="col-sm-12">
      <a href="dashboard.php" style=" font-size: 18pt; text-decoration: none;">Dashboard</a><font style="font-size: 18pt"> / Calendar</font>
    </div>
</div>

<div id="calendar" style="max-width: 1000px; margin: auto; font-size: 14pt;" ></div>

<?php
  
  $email = $_SESSION['email'];

  $sql = "SELECT event as title, edate as start FROM payments WHERE email = '$email' AND status = 'valid'";
  $result = mysqli_query($conn,$sql); 
  $myArray = array();
  if (mysqli_num_rows($result) > 0) {

      // output data of each row
      while($row = $result->fetch_assoc()) {
          $myArray[] = $row;
      }
  } 
  else 
  {
      echo '<h3 style="color: red; text-align: center;">No Events found!</h3>';
  }
?>


<script>
  $(document).ready(function() {
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      defaultDate: new Date(),
      navLinks: true, // can click day/week names to navigate views
      editable: false,
      eventLimit: true, // allow "more" link when too many events
      
      events: <?php echo json_encode($myArray); ?>
    });
  });
</script>