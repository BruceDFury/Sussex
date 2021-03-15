<?php
require_once 'header.php'; 
?>

<div class="row bg-dark">
    <div class="col-sm-12">
    	<a class="navbar-brand" href="dashboard.php" style="color: white; font-size: 18pt;">Dashboard</a>
    </div>
</div>

<div class="container">
	<div class="row">
	<!-- Find match -->
  <div class="col-md-4">
        <form action="#" method="POST">
	        <div class="card mt-2 mb-2" style="border:solid; border-width: 2px;  border-radius: 25px;">
		        <div class="card-body text-center">
		        	<svg xmlns="http://www.w3.org/2000/svg" width="170" height="170" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
					  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
					  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
					</svg>
					<br/>
		    		<a href="#" class="btn btn-secondary">Find Match</a>
		    	</div>
		    </div>
		</form>
	</div>
	<!-- Find Event -->
	<div class="col-md-4">
        <div class="card mt-2 mb-2" style="border:solid; border-width: 2px;  border-radius: 25px;">
	        <div class="card-body text-center">
	        	<svg xmlns="http://www.w3.org/2000/svg" width="170" height="145" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16">
				  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
				  <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
				</svg>
				<br/><br/>
	    		<a href="events.php" class="btn btn-secondary">Find Event</a>
	    	</div>
	    </div>
	</div>
	<div class="col-md-4">
        <form action="#" method="POST">
	        <div class="card mt-2 mb-2" style="border:solid; border-width: 2px;  border-radius: 25px;">
		        <div class="card-body text-center">
		        	<svg xmlns="http://www.w3.org/2000/svg" width="150" height="145" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
					  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
					  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg>
					<br/><br/>
		    		<a href="#" class="btn btn-secondary">Friends</a>
		    	</div>
		    </div>
		</form>
	</div>
	<div class="col-md-4">
        <form action="#" method="POST">
	        <div class="card mt-2 mb-2" style="border:solid; border-width: 2px;  border-radius: 25px;">
		        <div class="card-body text-center">
		        	<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
					  <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
					</svg>
					<br/><br/>
		    		<a href="#" class="btn btn-secondary">Calendar</a>
		    	</div>
		    </div>
		</form>
	</div>
</div>
</div>

<?php
require_once 'footer.php';  
?>