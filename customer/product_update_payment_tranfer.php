<?php
	session_start();
    include('../connect/db.php');
    $Log_Id=$_SESSION['SESS_USER_ID'];	
    
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
                                            <div class="col-sm-12">
                                            <!-- Basic Form Inputs card start -->
                                                <div class="card">                                                    
                                                     	<label class="alert alert-danger">Payment Transfered Successfully</label>
                                                  </div>
                                                <!-- Basic Form Inputs carde end -->      
                                            </div>        
                                        </div>
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
