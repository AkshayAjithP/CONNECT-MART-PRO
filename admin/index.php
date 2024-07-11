<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_ADMIN_ID'];
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
	<!-- Navigator -->
    <div class="fixed-button">
        <a href="#home" class="btn btn-md btn-primary">
            <i class="fa fa-toggle-up" aria-hidden="true"></i> Top
        </a>
    </div>
    <!-- navigator end -->
    
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
                                            <!-- order-card start -->
                                            <!-- <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-blue order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Shops</h6>
                                                        <h2 class="text-right"><i class="ti-user f-left"></i><span>
                                                       	    <?php
																$result = $db->prepare("select count(*) from user where utype='user'");
																$result->execute();
																for($i=0; $row = $result->fetch(); $i++)
																{
																	echo"".$row['count(*)']."";
																}
															?>
                                                        </span></h2>                                                    
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-green order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Employees</h6>
                                                        <h2 class="text-right"><i class=" ti-user f-left"></i><span>
                                                       		<?php
																$result = $db->prepare("select count(*) from shops");
																$result->execute();
																for($i=0; $row = $result->fetch(); $i++)
																{
																	echo"".$row['count(*)']."";
																}
															?>
                                                        </span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-yellow order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Customers</h6>
                                                        <h2 class="text-right"><i class="ti-user f-left"></i><span>
                                                        	<?php
																$result = $db->prepare("select count(*) from user where utype='Individual'");
																$result->execute();
																for($i=0; $row = $result->fetch(); $i++)
																{
																	echo"".$row['count(*)']."";
																}
															?>
                                                        </span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-pink order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Products</h6>
                                                        <h2 class="text-right"><i class="ti-shopping-cart f-left"></i><span>
                                                       <?php
																$result = $db->prepare("select count(*) from product");
																$result->execute();
																for($i=0; $row = $result->fetch(); $i++)
																{
																	echo"".$row['count(*)']."";
																}
															?>
                                                        </span></h2>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- order-card end -->
                                           <!-- users visite and profile start -->
                                           < <?php
											$result = $db->prepare("SELECT * FROM productorder where  stat='Pending'");
											$result->execute();										
											for($i=0; $rows = $result->fetch(); $i++)
											{
												$ord_id=$rows["ord_id"];
										  ?>  
                                            <!-- users visite and profile start -->
                                            <div class="col-md-4">
                                                <div class="card user-card">
                                                    <div class="card-header">
                                                        <h5>Order <?php echo $rows['stat'];?></h5>
                                                    </div>
                                                    <div class="card-block">
                                       <img src="../product_ph/<?php echo $rows['photo'];?>" alt="img" class="img-fluid" width="100%">
                                                    <h6 class="f-w-600 m-t-25 m-b-10"><?php echo $rows['pname'];?></h6>
                                                    <p class="text-muted">Qty | <?php echo $rows['qty'];?> | <?php echo $rows['dat'];?></p>
                                                    <hr>
                                                    <p class="text-muted">Price | <?php echo $rows['price'];?> | Total <?php echo $rows['tot'];?></p>
                                                    <p class="text-muted"><b>Branch </b>| <?php echo $rows['branch'];?> </p>
                                                    <hr>
                                                    <p class="text-muted">Customer <br> <?php echo $rows['cname'];?></p>
                                                    <p class="text-muted">Contact <br> <?php echo $rows['ccontact_no'];?></p>
                                                    <p class="text-muted">Location <br> <?php echo $rows['clocation'];?></p>                                                       
                                                    </div>                                                                                                   
                                                </div>
                                            </div>
                                             <?php
													}
													?>  
                                            <!-- users visite and profile end -->
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

</html>