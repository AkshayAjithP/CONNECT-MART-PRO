<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_USER_ID'];
	$totc=0;
	$result = $db->prepare("select * from productorder where BLog_Id='$Log_Id' and pstatus='Pending'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$totc=$totc+$row['tot'];
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
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>  
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
                   <a href="cart_list.php" style="position:relative;top:15px;left:1400px;font-size:20px;">
                         <i class="ti-shopping-cart"><span style="color:white;position:relation:left:1px;font-size:25px;"> Rs <?php echo $totc;?></span></i>
                   </a> 
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
                                         <!-- Start -->
                                            <!-- <div id="demo" class="carousel slide" data-ride="carousel">
                                                <ul class="carousel-indicators">
                                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                                    <li data-target="#demo" data-slide-to="1"></li>
                                                    <li data-target="#demo" data-slide-to="2"></li>
                                                </ul>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                    <img src="../images/1.jpg"  style="width:1620px; height:400px;">
                                                    <div class="carousel-caption">
                                                        <h3>Shop Easy</h3>
                                                        <p>We had such a great time in LA!</p>
                                                    </div>   
                                                    </div>
                                                    <div class="carousel-item">
                                                    <img src="../images/4.jpg"  style="width:1620px; height:400px;">
                                                    <div class="carousel-caption">
                                                        <h3>Hurry Up</h3>
                                                        <p>Thank you!</p>
                                                    </div>   
                                                    </div>
                                                    <div class="carousel-item">
                                                    <img src="../images/bg.jpg"  style="width:1620px; height:400px;">
                                                    <div class="carousel-caption">
                                                        <h3>Shop It</h3>
                                                        <p>Love It the Big Apple!</p>
                                                    </div>   
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                                    <span class="carousel-control-prev-icon"></span>
                                                </a>
                                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                                    <span class="carousel-control-next-icon"></span>
                                                </a>
                                            </div> -->
                                         <!-- End -->
                                        
                                         <div class="row" style="margin-top:10px;">
                                        
                                            <!-- users visite and profile start -->
                                            <?php
												$result = $db->prepare("SELECT * FROM product limit 6");
												$result->execute();
												$row_count =  $result->rowcount();
												for($i=0; $rows = $result->fetch(); $i++)
												{
													$prd_id=$rows["prd_id"];
											  ?>  
                                            <div class="col-md-4">
                                                <div class="card user-card">
                                                    <div class="card-header">
                                                    <h5>Product <?php echo $rows['name'];?></h5>
                                                    </div>
                                                    
                                                  <div class="card-block">
                                                   <img src="../product_ph/<?php echo $rows['photo'];?>"  style="width:100%; height:200px;" class="img-fluid" >
                                                    <h6 class="f-w-600 m-t-25 m-b-10"><?php echo $rows['name'];?></h6>
                                                    <p class="text-muted">Qty <?php echo $rows['qty'];?> | Price <?php echo $rows['price'];?></p>
                                                    <p class="text-muted">Branch: <?php echo $rows['branch'];?> 
                                                    <a href="product_update_view.php<?php echo '?prd_id='.$prd_id; ?>" class="btn btn-primary btn-out-dashed btn-block">Add To Cart</a>
                                                     <hr>
                                                                                                       
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
	</div>  
    <!-- Pre-loader end -->          
</body>
<?php include("include/js.php");?>

</html>
