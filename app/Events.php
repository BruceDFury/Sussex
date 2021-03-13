<html>
<head>

<?php
require_once "header.php";
?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<title>Events</title>


</head>
<body>

<br>

  <form action = "connect.php" method="post">
  <div class="form-group">
    <label for="Name">Your Name:</label>
    <input type="text" class="form-control" name="name" placeholder="eg: Mr. Fernando">
  </div>
  <div class="form-group">
    <label for="events">Upcoming Events</label>
    <select class="form-control" name="events">
      <option>Sussex 20th Anniversary</option>
      <option>Retirement Party</option>
      <option>Food Festival 2021</option>
    </select>
  </div>
  <div class="form-group">
    <label for="members">No. of Members? (minimum 4 members)</label>
    <select multiple class="form-control" name="members">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
	<br>
	
	<button class="btn btn-primary" type="submitform">Submit</button>
  </div>
 
  
  </form>



</body>



</html>

