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
<div class="container" style="padding-top: 20px; text-align: center;">
     
    <div class="row" style="justify-content: center; "> 
    <h1>Membership Payment</h1>
        </br></br></br> 
        <div class="card" style="width: 400px; border-radius: 10px; border:solid; border-width: 1px;">
            <div class="card-body">
                <form method="POST" action="memberhip_renew_pay.php" style="padding-top: 10px; margin-left: 25px; margin-right: 25px">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required="">
                    </div>
                    <div align="center" style="margin-bottom: 10px;">
                        <button type="submit" class="btn btn-primary" name="btn_proceed">Proceed</button>
                    </div>
                    <input type="hidden" name="payID" value="<?php echo time();?>"/>
                </form>      
            </div>
        </div>
    </div>
</div>