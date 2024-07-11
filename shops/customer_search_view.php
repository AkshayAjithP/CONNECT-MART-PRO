<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_SHOPS_ID'];
	$contact_no=$_POST['contact_no'];
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
												$result = $db->prepare("SELECT * FROM user where  contact_no ='$contact_no' and utype='User'");
												$result->execute();
												$row_count =  $result->rowcount();
												for($i=0; $rows = $result->fetch(); $i++)
												{
													$user_id=$rows["user_id"];
											  ?>  
                                            <div class="col-md-4">
                                                <div class="card user-card">
                                                    <div class="card-header">
                                                        <h5>Customer Details</h5>
                                                    </div>
                                                    
                                                    <div class="card-block">
                                                       <img src="../photo/<?php echo $rows['photo'];?>" alt="img" class="img-fluid" width="100%">
                                                       <hr>
                                                    <h5 style="text-align:left">Name : <?php echo $rows['name'];?></h5>
                                                    <hr>
                                                    <h5 style="text-align:left">Age : <?php echo $rows['age'];?></h5>
                                                    <hr>
                                                    <h5 style="text-align:left">Gender : <?php echo $rows['sex'];?></h5>
                                                    <hr>
                                                    <h5 style="text-align:left;">Contact : <?php echo $rows['contact_no'];?></h5>
                                                    <hr>
                                                     <h5 style="text-align:left;">Address : <?php echo $rows['location'];?></h5>
                                                    <hr>                                                     
                                                         <a href="customer_search.php" class="btn btn-info btn-out-dashed btn-block">Back</a>
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
