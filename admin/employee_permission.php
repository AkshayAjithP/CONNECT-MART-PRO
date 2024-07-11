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
											$result = $db->prepare("SELECT * FROM user where utype='Employee'");
											$result->execute();
											$row_count =  $result->rowcount();
											for($i=0; $rows = $result->fetch(); $i++)
											{
												$user_id=$rows["user_id"];
										  ?>  
                                            <!-- users visite and profile start -->
                                            <div class="col-md-4">
                                            	
                                                <div class="card user-card">
                                                	
                                                    <div class="card-header">
                                                    	<h2>Account Access</h2>
                                                        <hr>
                                                      <h5>Name  <?php echo $rows['name'];?></h5>
                                                    </div>
                                                    <div class="card-block">
                                      				 <img src="../photo/<?php echo $rows['photo'];?>" alt="img" class="img-fluid" width="100%">
                                                     <hr>
                                                    <h5 style="text-align:left">Age : <?php echo $rows['age'];?></h5>
                                                    <hr>
                                                    <h5 style="text-align:left;">Contact : <?php echo $rows['contact_no'];?></h5>
                                                    <hr>
                                                     <h5 style="text-align:left;">Address : <?php echo $rows['location'];?></h5>
                                                    <hr>
                                                     <h5 style="text-align:left;">Branch : <?php echo $rows['liceno'];?></h5>
                                                    <hr>
                                                    <?php
														if($rows['stat']=="Active")
														{
														?>
                                                         <a href="action/emp_block.php<?php echo '?user_id='.$user_id; ?>" class="btn btn-danger btn-out-dashed btn-block">Block</a>
                                                        <?php
														}
														else
														{
													?>
                                                    <a href="action/emp_active.php<?php echo '?user_id='.$user_id; ?>" class="btn btn-info btn-out-dashed btn-block">Aloow</a>
                                                    <?php
														}
													?>
                                                    </div>                                                                                                   
                                                </div>
                                            </div>
                                             <?php
													}
													?>  
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

</html>
