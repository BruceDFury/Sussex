<?php
require_once 'header.php';

if(isset($_POST['checkout']))
{

	$_SESSION['eid'] = $_POST['event_id'];
	$_SESSION['event'] = $_POST['event'];
	$_SESSION['evt_date'] = $_POST['evt_date'];
	$_SESSION['orderno'] = $_POST['orderno'];
	$_SESSION['total'] = $_POST['total'];

	$email = $_SESSION['email'];
	$evt_date = $_SESSION['evt_date'];
	$event = $_SESSION['event'];

	$query= "SELECT * FROM payments WHERE email='$email' AND event='$event' AND edate='$evt_date' AND status='valid'";
	$result = mysqli_query($conn,$query);

	if (mysqli_num_rows($result) > 0)
	{
			
	    $_SESSION['error'] = "You alredy have been booked this event!";
	    header("Location: /Sussex/app/events.php");  
	}
	else{
		
		$orderno = $_SESSION['orderno'];
		$nic = $_SESSION['nic'];
		$phone = $_SESSION['phone'];
		$email = $_SESSION['email'];
		$total = $_SESSION['total'];
		$event = $_SESSION['event'];
		$evt_date = $_SESSION['evt_date'];
		
		$queryInsert = "INSERT INTO payments (nic,orderno,email,phone,amount,event,edate) VALUES ('$nic','$orderno','$email','$phone','$total','$event','$evt_date')";
        mysqli_query($conn,$queryInsert);
	}
}

//againg storig to normal variable
$eid = $_SESSION['eid'];
$event = $_SESSION['event'];
$evt_date = $_SESSION['evt_date'];
$orderno = $_SESSION['orderno'];
$total = $_SESSION['total'];

$title = $_SESSION['title'];
$fn = $_SESSION['first_name'];
$ln = $_SESSION['last_name'];
$nic = $_SESSION['nic'];
$phone = $_SESSION['phone'];
$email = $_SESSION['email'];

$apound = 1.39;
$amountUSD = $total*$apound;
$_SESSION['amount'] = $total;

//Pay pal URL
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; 
$paypal_email = 'janzclinston2-facilitator@gmai.com';

?>

<main role="main">

<div class="container">
<div class="row">
<div class="col-sm-6 mt-5 mb-3">
	<h1>Payment Details</h1>
	</br>
    <?php
    	echo '<h4>Payment ID: <b>#'.$orderno.'</b></h5>';
        echo '<p style="font-size: 12pt;"> Name: '.$title.' '.$fn.' '.$ln.'</br>';
        echo 'Event: '.$event.'</br>';
        echo 'NIC: '.$nic.'</br>';
        echo 'Email: '.$email.'</br>';
        echo 'Phone: '.$phone.'</p>';
    ?>
    	</br>
 		<h4>Ammount to pay &#8356 <?php echo number_format($total,2);?> (<?php echo number_format($amountUSD,2);?> USD)</h4>

        <!-- <h3>Ammount to pay &#8356;. <?php //echo number_format($total,2);?></h3> -->
        
    </div>

    <div class="col-sm-10 mt-5 mb-3">
        <form action="<?php echo $paypal_url;?>" method="post">            
        <!-- Paypal business test account email id so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_email;?>">          
        <!-- Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">            
        <!-- Details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $event;?>">
        <input type="hidden" name="item_number" value="<?php echo $eid;?>">
        <input type="hidden" name="amount" value="<?php echo $amountUSD;?>">
        <input type="hidden" name="currency_code" value="USD">           
        <!-- URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost:8080/sussex/app/confirm.php?orderno=<?php echo $orderno;?>&status=0'>
        <input type='hidden' name='return' value='http://localhost:8080/sussex/app/confirm.php?orderno=<?php echo $orderno;?>&status=1'>                     
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