<?php
	session_start();
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_USER_ID'];
	$result = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$cname = $row['name'];
		$ccontact_no = $row['contact_no'];
		$clocation = $row['location'];		
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
                                            <div class="col-sm-8">
                                            <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="m-b-10">Product Details</h5>
                                                        
                                                     </div>
                                                     <div class="card-block">
                                                       <?php
						$prd_id=$_GET["prd_id"];
						$result = $db->prepare("select * from product where prd_id='$prd_id'");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++)
						{
							$prd_id = $row['prd_id'];
							$SLog_Id = $row['Log_Id'];
							$name = $row['name'];											
							$price= $row['price'];
							$qty = $row['qty'];
							$desp = $row['desp'];
							$tax = $row['tax'];
							$photo = $row['photo'];	
							$branch = $row['branch'];																					
						}
					?>	
                    <form method="post" action="action/ordernowsave.php" class="forms" autocomplete="off" enctype="multipart/form-data"> 
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <img src="../product_ph/<?php echo $photo;?>" width="100%" class="img-responsive img-rounded">
                        </div>                   
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label>Product Name</label>
                                 <input type="hidden"  name="prd_id"  value="<?php echo $prd_id?>">
                                 <input type="hidden"  name="SLog_Id"  value="<?php echo $SLog_Id?>">
                                  <input type="hidden"  name="cname"  value="<?php echo $cname?>">
                                 <input type="hidden"  name="ccontact_no"  value="<?php echo $ccontact_no?>">
                                 <input type="hidden"  name="clocation"  value="<?php echo $clocation?>">
                                 <input type="hidden"  name="photo"  value="<?php echo $photo?>">
                                  <input type="hidden"  name="branch"  value="<?php echo $branch?>">
                                 <input type="text"  name="pname"  class="form-control"  value="<?php echo $name?>" readonly>
                            <label>Stock</label>
                                <input type="text"  name="buyqty"  class="form-control"  value="<?php echo $qty?>" readonly>
                            <label>Price</label>
                                <input type="text"  name="price"  class="form-control"  value="<?php echo $price?>" readonly id="price">
                        </div>           
                    </div>     
                    <div class="row">                                                     
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label>Buy Quantity</label>
                                <input type="number"  name="qty"  class="form-control" id="bqty" min="1" max="<?php echo $qty;?>" onKeyUp="Give_Balance();" required>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label>Tax %</label>
                                <input type="text"  name="tax"  class="form-control"  value="<?php echo $tax?>" readonly id="tax">
                        </div>
                         <div class="col-md-6 col-sm-12 col-xs-12">
                            <label>Tax Amount</label>
                                <input type="text"  name="taxa"  class="form-control" readonly id="taxa">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label>Total</label>
                                <input type="number"  name="tot"  class="form-control" id="tot" readonly>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label>Description</label>
                                <input type="text"  name="desp"  class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label>Date</label>
                                <input type="text"  name="dat"  class="form-control" value="<?php echo date("Y-m-d");?>" readonly>
                        </div>
                    </div>
                        <div class="col-md-6 col-sm-12 col-xs-12" style="float:right">
                         <div class="col-xs-6 pull-right">
                            <br>
                            <button type="submit" class="btn btn-primary btn-danger btn-flat">Cart</button>
                        </div>                   
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <br>
                               <a type="button" class="btn btn-primary pull-right m_t_1"  href="index.php">
                               <i class="fa fa-backward"></i> Back
                            </a>
                            </div>
                        </div>
                    </form>
                                                     </div>
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
	
	var tax = document.getElementById('tax').value;
	var taxa = document.getElementById('taxa').value;
	

	var gtot = (parseFloat(bqty)*parseFloat(price));
	
	var tamt=(parseFloat(gtot)*parseFloat(tax))/100;
	
	if(bqty == ''){
		document.getElementById('tot').value = "";
		document.getElementById('taxa').value = "";
	}
	else if (!isNaN(gtot)){
		document.getElementById('tot').value = gtot+tamt;
		document.getElementById('taxa').value = tamt;	
	}
}

</script>
</html>
