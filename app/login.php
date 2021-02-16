<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
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
			    	
	                <form method="POST" action="#" style="padding-top: 80px; margin-left: 25px; margin-right: 25px">
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
			       <form method="POST" action="#" style="padding-top: 80px; margin-left: 25px; margin-right: 25px">
			       		<div class="form-group">
	                    <label for="title">Tittle</label>
	                    <select class="form-control" id="title" name="title">
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
	                    	<input type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name"  required="">
	                    </div>
	                    <div class="form-group">
	                    	<label for="dob">DOB</label>
	                   		<input type="date" class="form-control" id="dob" name="dob" placeholder="DOB" required="">
	                    </div>
	                    <div class="form-group">
	                    	<label for="occupation">Occupation</label>
	                   		<input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter Occupation" required="">
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
</div>
</body>
</html>
