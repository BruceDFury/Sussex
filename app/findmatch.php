<?php
require_once 'header.php'; 
?>

<div class="row container"  style="margin-top: -20px;">
    <div class="col-sm-12">
      <a href="dashboard.php" style=" font-size: 18pt; text-decoration: none;">Dashboard</a><font style="font-size: 18pt"> / Find Match</font>
    </div>
</div>

<div class="container-fluid">
	<h3 style="color: red;">Potential Matches</h3>
</div>

<div class="container">
	<?php
	$email = $_SESSION['email'];
	$ptype = $_SESSION['personality_type'];
	$hobbies = $_SESSION['hobbies'];
	$games = $_SESSION['games'];

  	$query = "SELECT * FROM member WHERE (personalityType='$ptype' OR hobies LIKE '%$hobbies%' OR games LIKE '%$games%') AND email NOT IN ('$email')";
  	$result = mysqli_query($conn, $query);
  	
  	if(mysqli_num_rows($result) != null)
  	{
    	while($row = mysqli_fetch_array($result))
    	{
		  	//Find age by comparing dob with current date
			$age = date_diff(date_create($row['dob']), date_create('now'))->y;

			echo '<form>';
	  		echo '<div class="col-md-3">';
	        echo '<div class="card mt-2 mb-2">';
	        echo '<a href="/sussex/app/img/users/'.$row['image'].'" target="_blank">';
	        echo '<img src="img/users/'.$row['image'].'" class="card-img-top" onerror=this.src="img/users/person_alt.png">';
	        echo '</a>';
	        echo '<div class="card-body">';
	        echo '<p class="card-text"><b>Name:</b> '.$row['title']." ".$row['firstName']." ".$row['lastName'].'</p>';
	        echo '<p class="card-text"><b>Age:</b> '.$age." Y".'</p>';
	        echo '<p class="card-text"><b>Personality Type:</b> '.$row['personalityType'].'</p>';
	        echo '<p class="card-text"><b>Hobbies:</b> '.$row['hobies'].'</p>';
	        echo '<p class="card-text"><b>Games:</b> '.$row['games'].'</p>';
	        echo '<p class="card-text"><b>Email:</b> '.$row['email'].'</p>';
	        echo '<p class="card-text"><b>Phone:</b> '.$row['phone'].'</p>';
	        echo '<input type="submit" class="btn btn-primary primary-bg mt-4" name="add_to_list" value="Add to List">';

	       /* echo '<input type="hidden" name="id" value="'.$value['id'].'"/>';
	        echo '<input type="hidden" name="hidden_name" value="'.$value['name'].'"/>';
	        echo '<input type="hidden" name="hidden_price" value="'.$value['price'].'"/>';*/
	        echo '</div></div></div>';
	        echo '</form>';
	    }
	}else{
		echo '<h3 style="color: red; text-align: center;">No Potential Matches Found!</h3>';
	}
    ?>
</div>