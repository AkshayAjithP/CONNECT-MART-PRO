<?php
	include("auth.php");
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
                                            <div class="col-sm-6">
                                            <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="m-b-10">Product Search</h5>
                                                     </div>
                                                     <div class="card-block">
                                					<form method="post" action="product_search_view.php" autocomplete="off"> 
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Name</label>
                                                                <div class="col-sm-10">
                                                 				<input list="name" required class="form-control form-control-primary" name="name" placeholder="Search Name">
                                                                    <datalist id="name">
                                                                        <option value="">Select</option> 
                                                                         <?php
                                                                           $result = $db->prepare("select distinct(name) from product");
                                                                            $result->execute();
                                                                            $row_count =  $result->rowcount();
                                                                            for($i=0; $rows = $result->fetch(); $i++)
                                                                            {
                                                                            echo '<option>'.$rows['name'].'</option>';
                                                                            }
                                                                        ?>	                                         					
                                                                    </datalist>
                                                                </div>
                                                            </div>                                                           
                                                            <div class="form-group row pull-right">
                                                               <div class="col-sm-10">
                                                                 <input type="submit" class="btn btn-primary btn-out btn-bg " value="Search">
                                                                </div>
                                                            </div>
                                                        </form>
                                                     </div>
                                                  </div>
                                                <!-- Basic Form Inputs card end -->    
                                            </div>        
                                        </div>
                                        <!-- users visite and profile start -->
                                        <div class="row">
                                        <?php
											$result = $db->prepare("SELECT * FROM product ");
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
                                                    <p class="text-muted">Branch: <?php echo $rows['branch'];?></p>
                                                    <a href="product_update_view.php<?php echo '?prd_id='.$prd_id; ?>" class="btn btn-primary btn-out-dashed btn-block">Add To Cart</a>
                                                     <hr>
                                                                                                       
                                                    </div>
                                                  
                                                </div>
                                                 
                                            </div>
                                        <?php
											}
										?> 
                                        </div>
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
    <!-- Pre-loader end -->          
</body>
<?php include("include/js.php");?>

</html>
