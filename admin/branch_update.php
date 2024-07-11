<?php
	include("auth.php");
	include('../connect/db.php');
	$user_id=$_GET['user_id'];
	$result = $db->prepare("SELECT * FROM user where user_id='$user_id'");
	$result->execute();
	$row_count =  $result->rowcount();
	for($i=0; $rows = $result->fetch(); $i++)
	{
		$name=$rows["name"];
		$cntno=$rows["contact_no"];
		$email=$rows["email"];
		$location=$rows["location"];
		$srvce=$rows["adharno"];
		
		$password=$rows["password"];
		$manager=$rows["liceno"];
		
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
                                            <div class="col-sm-12">
                                            <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="m-b-10">Branch Update</h5>
                                                        
                                                     </div>
                                                     <div class="card-block">
                                                        <form method="post" action="action/branch_update.php" enctype="multipart/form-data">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="name" class="form-control form-control-primary" value="<?php echo $name;?>" required>
                                                                    <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Contact No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="cntno" class="form-control form-control-primary" value="<?php echo $cntno;?>" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                                                                </div>
                                                            </div>                                                  
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Email</label>
                                                                <div class="col-sm-10">
                                                                    <input type="email" name="email" class="form-control form-control-primary" value="<?php echo $email;?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Manager</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="manager" class="form-control form-control-primary" value="<?php echo $manager;?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Password</label>
                                                                <div class="col-sm-10">
                                                                    <input type="password" name="password" class="form-control form-control-primary" value="<?php echo $password;?>" required>
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Location</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="location" class="form-control form-control-primary" value="<?php echo $location;?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Photo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="file" name="photo" class="form-control form-control-primary" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Description</label>
                                                                <div class="col-sm-10">
                                     <textarea name="bdesc" rows="5" cols="5" class="form-control form-control-primary" required><?php echo $srvce;?></textarea>
                                                                </div>
                                                            </div>                                                                                                                        
                                                            <div class="form-group row pull-right">
                                                               <div class="col-sm-10">
                                                                 <input type="submit" class="btn btn-danger btn-round btn-bg " value="Submit">
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

</html>
