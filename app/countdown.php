<?php 
  require_once 'header.php';
?>

<p id="countDown" style=" text-align: center; font-size: 60px; margin-top: 75px;"></p>

<h1 style="color: red; text-align: center">Make your membership payment before get expired</h1>
<h1 style="color: red; text-align: center">Thank you</h1>
<h1 style="color: red; text-align: center">Have a nice day</h1>
<h1 style="color: red; text-align: center">!!!</h1>

<?php
  $date=date_create($_SESSION['end_date']);

  $formatted_date = $newticket['DateCreated'] =   date_format($date,"Y/m/d H:i:s");

?>
<script>

// Set the date we're counting down to
var countDownDate = new Date("<?php echo $formatted_date; ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("countDown").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countDown").innerHTML = "EXPIRED";
  }
}, 1000);
</script>