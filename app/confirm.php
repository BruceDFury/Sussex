<?php
require_once 'header.php';

$_SESSION['orderno'] = $_GET['orderno'];
$_SESSION['status'] = $_GET['status'];

$orderno = $_SESSION['orderno'];
$status = $_SESSION['status'];

?>

<main role="main">

<div class="container">
  <div class="row">
    <div class="col-sm-12 mt-5 mb-3">
        <?php
            if($status == '1'){

                $query = "UPDATE payments SET status = 'valid' WHERE orderno = '$orderno'";
                mysqli_query($conn,$query);

                echo '<h2 align="center">Payment Successful !!!</h2>';
                echo '<h3 align="center">Order No : <?php echo $orderno; ?></h3></br>';
                ?>
                <div style="text-align: center;">      
                   <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="green" class="bi bi-check2-circle" viewBox="0 0 16 16">
                      <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                      <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                    </svg>
                </div>  
                </br>
                <?php
                echo '<h3 align="center">Thank You!, '.$_SESSION['title']." ".$_SESSION['first_name'].'</h3>';

            } else{
                echo '<h2 align="center">Payment Cancelled !!!</h2>';
                echo '<h3 align="center">Your order is not been confirmed. Please try again.</h3>';
                echo '<h3 align="center">Thank You!, '.$_SESSION['title']." ".$_SESSION['first_name'].'</h3></br>';
                ?>
                <div style="text-align: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="red" class="bi bi-x-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </div>
                <?php
            }
        ?>
        </br>
        <div style="text-align: center;">
            <a href="index.php" class="btn btn-primary primary-bg mt-4">Back to home page</a>
        </div>
    </div>
  </div>
</div>

<?php

require_once 'footer.php'

?>