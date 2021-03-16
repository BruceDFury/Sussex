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

		echo '<form>';
  		echo '<div class="col-md-3">';
        echo '<div class="card mt-2 mb-2">';
        echo '<img src="" class="card-img-top" onerror=this.src="img/person_alt.png">';
        echo '<div class="card-body">';
        echo '<p class="card-text"><b>Name:</b> Mr. Paul</p>';
        echo '<p class="card-text"><b>Age:</b> 51y</b></p>';
        echo '<p class="card-text"><b>Personality Type:</b> Driver</b></p>';
        echo '<p class="card-text"><b>Interest:</b> Rock Climbing</p>';
        echo '<p class="card-text"><b>Email:</b> abc@gmail.com</p>';
        echo '<p class="card-text"><b>Phone:</b> 0123456789</p>';
        echo '<input type="submit" class="btn btn-primary primary-bg mt-4" name="add_to_list" value="Add to List">';

       /* echo '<input type="hidden" name="id" value="'.$value['id'].'"/>';
        echo '<input type="hidden" name="hidden_name" value="'.$value['name'].'"/>';
        echo '<input type="hidden" name="hidden_price" value="'.$value['price'].'"/>';*/
        echo '</div></div></div>';
        echo '</form>';
    ?>
</div>