<?php
//membershipPayment.php

require_once 'header.php';

if(isset($_POST['btn_signUp'])){

	$_SESSION['title'] = $_POST['title'];
	$_SESSION['fname'] = $_POST['fname'];
	$_SESSION['lname'] = $_POST['lname'];
	$_SESSION['dob'] = $_POST['dob'];
	$_SESSION['nic'] = $_POST['nic'];
	$_SESSION['phone'] = $_POST['phone'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['password'] = md5($_POST['password']);
	$_SESSION['cPassword'] = md5($_POST['cpassword']);
	$_SESSION['personalityType'] = $_POST['personalityType'];
	$_SESSION['hobies'] = $_POST['hobies'];
	$_SESSION['games'] = $_POST['games'];
	$_SESSION['payID'] = $_POST['payID'];

	$email = $_SESSION['email'];
	$password = $_SESSION['password'];
	$cPassword = $_SESSION['cPassword'];

	//select qurey
	$selectQuery = "select * from member where email = '$email'";
	$sresult = mysqli_query($conn,$selectQuery);

	if(mysqli_num_rows($sresult) != null)
	{
		$_SESSION['error'] = "Given email is already exists!";
	    header("Location:/Sussex/app/login.php");
	}
	else
	{
		if($password===$cPassword)
		{
			$filename = $_FILES["uploadfile"]["name"];
			$_SESSION['filename'] = $filename;
			$tempname = $_FILES["uploadfile"]["tmp_name"];
			$folder = "img/users/".$filename;

			// Now let's move the uploaded image into the folder: image 
			move_uploaded_file($tempname,$folder);
		}
		else
		{
			$_SESSION['error'] = "Password and Confirm Password must be same!";
			header("Location:/Sussex/app/login.php");
		}
	}
}

$payID = $_SESSION['payID'];
$title = $_SESSION['title'];
$firstName = $_SESSION['fname'];
$lastName = $_SESSION['lname'];
$dob = $_SESSION['dob'];
$nic = $_SESSION['nic'];
$phone = $_SESSION['phone'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$cPassword = $_SESSION['cPassword'];
$personalityType = $_SESSION['personalityType'];
$hobies = $_SESSION['hobies'];
$games = $_SESSION['games'];

//Pay pal URL
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; 
$paypal_email = 'janzclinston2-facilitator@gmai.com';

/*//Currency conversion
$apound = 1.39;
$amountGBP = 5;
$amountUSD = $amountGBP*$apound;
$_SESSION['amount'] = $amountGBP;*/

?>
<main role="main">

<div class="container">
<div class="row">
<div class="col-sm-6 mt-5 mb-3">
	<h1>Payment Details</h1>
	</br>
    <?php
    	echo '<h4>Payment ID: <b>#'.$payID.'</b></h5>';
        echo '<p style="font-size: 12pt;"> Name: '.$title.' '.$firstName.' '.$lastName.'</br>';
        echo 'Purpose: Membership Payment</br>';
        echo 'NIC: '.$nic.'</br>';
        echo 'Email: '.$email.'</br>';
        echo 'Phone: '.$phone.'</p>';
    ?>
    	</br>
 		<h4>Amount to pay &#8356 5.00</h4>		            
    </div>

    <div class="col-sm-10 mt-5 mb-3">
        <form action="<?php echo $paypal_url;?>" method="post">            
        <!-- Paypal business test account email id so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_email;?>">          
        <!-- Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">            
        <!-- Details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="Membership Payment">
        <input type="hidden" name="item_number" value="<?php echo $email;?>">
        <input type="hidden" name="amount" value="5">
        <input type="hidden" name="currency_code" value="GBP">           
        <!-- URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost:8080/sussex/app/registerUser.php?payID=<?php echo $payID;?>&status=0'>
        <input type='hidden' name='return' value='http://localhost:8080/sussex/app/registerUser.php?payID=<?php echo $payID;?>&status=1'>                     
        <!-- payment button. -->
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">    
        </form>
    </div>
</div>
</div>

<?php
require_once 'footer.php';
?>   
