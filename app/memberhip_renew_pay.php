<?php
require_once 'header.php';

if(isset($_POST['btn_proceed']))
{
	$email = $_POST['email'];
	$pw = md5($_POST['password']);
	$_SESSION['payID'] = $_POST['payID'];

	//select qurey
	$selectQuery = "SELECT * FROM member WHERE email = '$email' AND password = '$pw'";
	$result = mysqli_query($conn,$selectQuery);
	$recCount = mysqli_num_rows($result);

	if ($recCount != null) {
		$res=mysqli_fetch_row($result);
		
		$_SESSION['title'] = $res[1];			
		$_SESSION['fname'] = $res[2];
		$_SESSION['lname'] = $res[3];
		$_SESSION['dob'] = $res[4];
		$_SESSION['nic'] = $res[5];
		$_SESSION['phone'] = $res[6];
		$_SESSION['email'] = $res[7];
		$_SESSION['personality_type'] = $res[9];
		$_SESSION['hobbies'] = $res[10];
		$_SESSION['games'] = $res[11];
		$_SESSION['join_date'] = $res[12];
		$_SESSION['end_date'] = $res[13];
	}
	else{
		$_SESSION['error'] = "Incorrect email or password";
	    header("Location: /Sussex/app/loginMR.php");
	}
}

$payID = $_SESSION['payID'];
$title = $_SESSION['title'];
$firstName = $_SESSION['fname'];
$lastName = $_SESSION['lname'];
$nic = $_SESSION['nic'];
$phone = $_SESSION['phone'];
$email = $_SESSION['email'];
$joinDate = $_SESSION['join_date'];
$endDate = $_SESSION['end_date'];


//Pay pal URL
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; 
$paypal_email = 'janzclinston2-facilitator@gmai.com';

//Currency conversion
$apound = 1.39;
$amountGBP = 5;
$amountUSD = $amountGBP*$apound;
$_SESSION['amount'] = $amountGBP;

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
 		<h4>Ammount to pay &#8356 <?php echo number_format($amountGBP,2);?> (<?php echo number_format($amountUSD,2);?> USD)</h4>		            
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
        <input type="hidden" name="amount" value="<?php echo $amountUSD;?>">
        <input type="hidden" name="currency_code" value="USD">           
        <!-- URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost:8080/sussex/app/membership_renew_pay_confirm.php?payID=<?php echo $payID;?>&status=0'>
        <input type='hidden' name='return' value='http://localhost:8080/sussex/app/membership_renew_pay_confirm.php?payID=<?php echo $payID;?>&status=1'>                     
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