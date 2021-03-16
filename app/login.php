<?php
require_once 'header.php';
if(isset($_SESSION['success'])){
   if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
    ?>
        <div class="alert alert-success" align="center">
            <strong><?php echo $_SESSION['error']; ?></strong>
        </div>
    <?php
        unset($_SESSION['success']);
        unset($_SESSION['error']);
    } 
}else{

    if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
    ?>
        <div class="alert alert-danger" align="center">
        	<strong><?php echo $_SESSION['error'];?></strong>
        </div>
    <?php
        unset($_SESSION['error']);
    }
}  
?>

<div class="container" style="padding-top: 100px">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">	
	<div class="card" style="width: 400px;">
		<div class="card-body" style="border:solid; border-width: 1px;  border-radius: 10px;">
		  <ul class="nav nav-tabs" style="float: left;">
		    <li class="active"><a data-toggle="pill" href="#login" style="font-size: 18pt;">Login</a></li>
		    <li><a data-toggle="pill" href="#signUp" style="font-size: 18pt;">Sign UP</a></li>
		  </ul>

		  	<div class="tab-content">
			    <div id="login" class="tab-pane fade in active">
			    	
	                <form method="POST" action="validate.php" style="padding-top: 80px; margin-left: 25px; margin-right: 25px">
	                    <div class="form-group">
		                    <label for="email">Email</label>
		                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="">
	                    </div>
	                    <div class="form-group">
		                    <label for="password">Password</label>
		                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required="">
	                    </div>
		                <div align="center" style="margin-bottom: 10px;">
		                    <button type="submit" class="btn btn-primary">Login</button>
	                    </div>
	                </form>
	                
			    </div>
			    <div id="signUp" class="tab-pane fade">
			       <form method="POST" action="registerUser.php" style="padding-top: 80px; margin-left: 25px; margin-right: 25px" enctype="multipart/form-data">
			       		<div class="form-group" style="text-align: center;">
			       			<img src="" onerror=this.src="img/person_alt.png" id="output_image" style="vertical-align: middle; width: 150px; height: 150px; border-radius: 50%;">
				       		<input type="file" onchange="preview_image(event)" name="uploadfile" required="">
 						</div>
			       		<div class="form-group">
	                    <label for="title">Title</label>
	                    <select class="form-control" id="title" name="title" required="">
	                        <option>Mr.</option>
	                        <option>Mrs.</option>
	                        <option>Miss.</option>
	                        <option>Other</option>
	                    </select>
	                    </div>
	                    <div class="form-group">
	                    	<label for="fname">First Name</label>
	                    	<input type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name" required="">
	                    </div>
	                    <div class="form-group">
	                    	<label for="lname">Last Name</label>
	                    	<input type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name" required="">
	                    </div>
	                    <div class="form-group">
	                    	<label for="dob">DOB</label>
	                   		<input type="date" class="form-control" id="dob" name="dob" placeholder="DOB" required="">
	                    </div>
	                    <div class="form-group">
	                    	<label for="nic">NIC</label>
	                   		<input type="text" class="form-control" id="nic" name="nic" placeholder="Enter NIC" required="">
	                    </div>
	                    <div class="form-group">
		                    <label for="Phone">Phone Number</label>
		                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required pattern="[0-9]{10}">
	                    </div>
	                    <div class="form-group">
	                    	<label for="email">Email</label>
	                   		<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="">
	                    </div>
	                    <div class="form-group">
	                    	<label for="password">Password</label>
	                   		<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required="">
	                    </div>
	                    <div class="form-group">
	                    	<label for="cpassword">Confirm Password</label>
	                   		<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Re-enter your password" required=""> 
	                    </div>
	                    <div class="form-group">
	                    	<label>Personality Description</label>
	                   		<input type="text" class="form-control" name="favouriteActivity" id="favouriteActivity" placeholder="Favourite Activity" required="">
	                   		</br>

		                    <select class="form-control" id="personalityType" name="personalityType" required="">
		                    	<option value="" disabled selected hidden>Select Personality Type</option>
		                        <option>Driver</option>
		                        <option>Analytical</option>
		                        <option>Amiable</option>
		                        <option>Expressive</option>
		                    </select>
		                	</br>
		                    <input type="text" name="hobies" id="hobies"  class="form-control" placeholder="Hobbies" required=""/>
	                    </div>
	                    <div>
	                   		<input type="checkbox" value="" required/> Agree, Terms and Conditions
	                    </div>
	                    <div align="center" style="margin-top: 10px; margin-bottom: 10px;">
	                    	<button type="submit" class="btn btn-primary">Sign UP</button>
	                    </div>
	               </form>
			    </div>
			</div>
		</div>
	</div>
</div>
<div class="col-sm-4"></div>
</div>
<?php
require_once 'footer.php';  
?> 
</div>

<script type="text/javascript">
$(document).ready(function(){
 $('#hobies').tokenfield({
  autocomplete:{
  	source: function (request, response) {
          jQuery.get('getHobies.php', {
              query: request.term
          }, function (data) {
              data = JSON.parse(data);
              response(data);
          });
      },
   	delay:100
  },
  showAutocompleteOnFocus: true
 });
});
</script>

<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>