<?php
	require_once 'header.php';  
?>

<div class="row container"  style="margin-top: -20px;">
    <div class="col-sm-12">
      <a href="dashboard.php" style=" font-size: 18pt; text-decoration: none;">Dashboard</a><font style="font-size: 18pt"> / Friends</font>
    </div>
</div>
</br>
<div class="container-fluid">
	<a href="findmatch.php" class="btn btn-primary">Find Match</a>
	<form action="friends.php" method="POST" class="d-flex" style="float: right;">
	  <input type="text" name="search" id="search" class="form-control" style="width: 350px; margin-bottom: 10px;" placeholder="Search for names here...">
	</form>
	<br>
	<table class="table table-striped" id="friendTable" style="text-align: center;">
    <thead>
      <tr>
        <th scope="col" style="text-align: center; font-size: 15pt;">Picture</th>
        <th scope="col" style="text-align: center; font-size: 15pt;">Name</th>
        <th scope="col" style="text-align: center; font-size: 15pt;">Age</th>
        <th scope="col" style="text-align: center; font-size: 15pt;">Personality Type</th>
        <th scope="col"	style="text-align: center; font-size: 15pt;">Hobbies</th>
        <th scope="col"	style="text-align: center; font-size: 15pt;">Games</th>
        <th scope="col"	style="text-align: center; font-size: 15pt;">Contact</th>
        <th scope="col"	style="text-align: center; font-size: 15pt;">Action</th>
      </tr>
    </thead>
    <tbody id="friendlist">
	<?php

    	$email = $_SESSION['email'];

    	$query = "SELECT * FROM friends WHERE email='$email'";
	    $result = mysqli_query($conn, $query);
	    if(mysqli_num_rows($result) > 0)
	    {	      
	      	while($row = mysqli_fetch_array($result))
	      	{
	    	
    			echo '<tr>';
    			echo '<td>';
		    	echo '<a href="/sussex/app/img/users/'.$row['image'].'" target="_blank">
		        	  <img src="img/users/'.$row['image'].'" onerror=this.src="img/users/person_alt.png" style="vertical-align: middle; width: 100px; height: 100px; border-radius: 50%;"></a>';
    			echo '</td>';
    			echo '<td style="vertical-align: middle; font-size: 12pt;">'.$row['name'].'</td>';
    			echo '<td style="vertical-align: middle; font-size: 12pt;">'.$row['age'].'</td>';
    			echo '<td style="vertical-align: middle; font-size: 12pt;">'.$row['personalityType'].'</td>';
    			echo '<td style="vertical-align: middle; font-size: 12pt;">'.$row['hobbies'].'</td>';
    			echo '<td style="vertical-align: middle; font-size: 12pt;">'.$row['games'].'</td>';
    			echo '<td style="vertical-align: middle; font-size: 12pt;">Email: '.$row['friendEmail'].'</br>Phone: '.$row['phone'].'</td>';
    			echo '<td style="vertical-align: middle;">';
    			echo '<form action="friends.php" method="POST">';  			
    			echo '<input type="submit" name="btn_delete" value="Delete" class="btn btn-danger">';
				echo '<input type="hidden" name="hidden_id" value="'.$row['id'].'">';
				echo '</td>';
    			echo '</tr>';
    			echo '</form>';
    			echo '</tbody>';
		    	echo '</table>';
    		}
    	}
    	else
    	{
    		echo '<tr><td colspan="8"><h3 style="color: red; text-align: center;">You have not matched any friends!</h3></td></tr>';
    		echo '</tbody>';
		    echo '</table>';
    	}

    	if (isset($_POST["btn_delete"])) 
		{
			$id = $_POST['hidden_id'];

			$delQuery = "DELETE FROM friends WHERE id ='$id'";
			$resultdel = mysqli_query($conn,$delQuery);

			if (!$resultdel) 
			{
				echo '<script>
				window.alert("Deletion failed!");
				window.location.assign("/Sussex/app/friends.php");
				</script>';
			}
			else
			{
				echo '<script>
				window.alert("Successfully deleted!");
				window.location.assign("/Sussex/app/friends.php");
				</script>';
			}
		}
    ?> 
</div>

<?php
  require_once 'footer.php'; 
?>

<script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#friendlist tr:not('.no-records')").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
    var trSel =  $("#friendlist tr:not('.no-records'):visible")
    // Check for number of rows & append no records found row
    if(trSel.length == 0){
        $("#friendlist").html('<tr class="no-records"><td colspan="8"><h3 style="color: red; text-align: center;">No records found!</h3></td></tr>')
    }
    else{
        $('.no-records').remove()
    }

  });
});
</script>