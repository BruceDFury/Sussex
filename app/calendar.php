<?php
require_once 'header.php'; 
?>

<div class="row container"  style="margin-top: -20px;">
    <div class="col-sm-12">
      <a href="dashboard.php" style=" font-size: 18pt; text-decoration: none;">Dashboard</a><font style="font-size: 18pt"> / Calendar</font>
    </div>
</div>

<div id="calendar" style="max-width: 1000px; margin: auto; font-size: 14pt;" ></div>

<?php
  $sql = "SELECT event_name as title, event_startdate as start FROM event";
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