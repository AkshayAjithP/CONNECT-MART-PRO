<?php
	session_start();
    include('../connect/db.php');
    $Log_Id=$_SESSION['SESS_USER_ID'];	
	$total=0;
    $result = $db->prepare("select * from productorder where BLog_Id='$Log_Id' and pstatus='pending' order by dat asc");
    $result->execute();
    for($i=1; $row = $result->fetch(); $i++)
    {
        $total=$total+$row["tot"]+$row["taxa"];	
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>MartConnect Pro</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />     
        <meta name="author" content="codedthemes">
        <?php include("include/css.php");?>     
	</head>
<body>
    
    <!-- Pre-loader start -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                           <i class="ti-menu"></i>
                       </a>                      
                       <a href="index.php">
                          MartConnect Pro
                       </a>                      
                   </div>
               </div>
           </nav>
           
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include("include/leftmenu.php");?>
                    <div class="pcoded-content" id="home">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                      <div class="row">
                                        <?php 
                                            if ($total==0)
                                            {

                                            }
                                            else
                                            {
                                        ?>
                                            <div class="col-sm-6">
                                            <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="m-b-10">Online Payment</h5>
                                                        
                                                     </div>
                                                     <div class="card-block">                                                       
                                                    	<form method="post" action="action/payment_update.php" class="forms" autocomplete="off">                                                                            	                                                     
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <label>Amount</label>
                                                                <input type="number"  name="tot"  class="form-control" value="<?php echo $total?>" readonly>
                                                        </div>
                                                       <div class="col-md-12 col-sm-12 col-xs-12">
                                                       			 <label>Card Type</label>
                                                                <select required class="form-control">
                                                                    <option value="" disabled selected>Select</option>
                                                                    <option value="1">Master Card</option>
                                                                    <option value="2">Visa</option>
                                                                    <option value="3">American Express</option>
                                                                    <option value="2">Laser</option>
                                                                    <option value="2">Discover</option>
                                                                </select>
                                                        </div>
                                                       <div class="col-md-12 col-sm-12 col-xs-12">
                                                       		 <label>Card Number</label>
                                                            <input type="text" class="form-control" required pattern="[0-9]{6,6}" maxlength="6" minlength="6">                                                           
                                                        </div>
                                                        <div class="input-field col s12 m6">
                                                        	 <label>Expairy Date (DD/MM)</label>
                                                            <input type="date" class="form-control" required min="<?php echo date("Y-m-d");?>">
                                                           
                                                        </div>
                                                        <div class="input-field col s12 m6">
                                                        	 <label>cvv</label>
                                                            <input type="text" class="form-control" maxlength="3" minlength="3">
                                                        </div>
                                                       <div class="col-md-12 col-sm-12 col-xs-12">
                                                       		<label for="pay-ca">Full name on a Card</label>
                                                            <input id="pay-ca" type="text" class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
                                                            
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <label>Date</label>
                                                                <input type="text"  name="dat"  class="form-control" value="<?php echo date("Y-m-d");?>" readonly>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12" style="float:right">
                                                         <div class="col-xs-4 pull-right">
                                                            <br>
                                                            <button type="submit" class="btn btn-primary btn-danger btn-flat">Pay</button>
                                                        </div>                                                                               
                                                        </div>
                                                    </form>
                                                     </div>
                                                  </div>
                                                <!-- Basic Form Inputs carde end -->      
                                            </div>        
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>  
    <!-- Pre-loader end -->          
</body>
<?php include("include/js.php");?>
<script>
function Give_Balance() {
	
	var price = document.getElementById('price').value;
	var bqty = document.getElementById('bqty').value;
	var tot = document.getElementById('tot').value;	
	

	var gtot = (parseFloat(bqty)*parseFloat(price));
	
	
	if(bqty == ''){
		document.getElementById('tot').value = "";
	}
	else if (!isNaN(gtot)){
		document.getElementById('tot').value = gtot;	
	}
}

</script>
</html>
