<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_ADMIN_ID'];
	$name=$_POST['name'];
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
                                            <!-- users visite and profile start -->
                                            <?php
												  	$result = $db->prepare("SELECT * FROM product where name='$name' and Log_Id='$Log_Id'");
													$result->execute();
													$row_count =  $result->rowcount();
													for($i=0; $rows = $result->fetch(); $i++)
													{
														$prd_id=$rows["prd_id"];
												  ?>  
                                            <div class="col-md-4">
                                                <div class="card user-card">
                                                    <div class="card-header">
                                                        <h5 style="color:red;">Item Name : <?php echo $rows['name'];?> Stock : <?php echo $rows['qty'];?></h5>
                                                    </div>
                                                    
                                                  <div class="card-block">
                                                   <img src="../product_ph/<?php echo $rows['photo'];?>" alt="img" class="img-fluid" width="100%">                                                   
                                                    <hr/> 
                                                    <h6 style="text-align:left">Price : <?php echo $rows['price'];?></h6>
                                                    <hr/>
                                                    <h6 style="text-align:left">G S T % : <?php echo $rows['tax'];?></h6>
                                                    <hr/>
                                                    <h6 style="text-align:left">Brnach : <?php echo $rows['branch'];?></h6>
                                                    <hr/>
                                                    <h6 style="text-align:left">Location : <?php echo $rows['location'];?></h6>
                                                    <hr/>
                                                    <a href="stock_search.php" class="btn btn-info btn-out-dashed btn-block">Back</a>
                                                     <hr/>                                                      
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
