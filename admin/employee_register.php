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
                                            <div class="col-sm-8">
                                            <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="m-b-10">Employee Register</h5>
                                                        
                                                     </div>
                                                     <div class="card-block">
                                                        <form method="post" enctype="multipart/form-data" autocomplete="off" action="action/employee_save.php">
                                                           <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="name" class="form-control form-control-primary" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Age</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="age" class="form-control form-control-primary" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Gender</label>
                                                                <div class="col-sm-10">
                                                                    <select class="form-control form-control-primary" name="sex" required>
                                                                    	<option>Select</option>
                                                                        <option>Male</option>
                                                                        <option>Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Branch</label>
                                                                <div class="col-sm-10">
                                                                    <input list="bname" required class="form-control form-control-primary" name="bname" placeholder="Search Branch">
                                                                    <datalist id="bname">
                                                                        <option value="">Select</option> 
                                                                         <?php
                                                                           $result = $db->prepare("select * from user where utype='Manager'");
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
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Contact No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="contact_no" class="form-control form-control-primary" required  pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Email</label>
                                                                <div class="col-sm-10">
                                                                    <input type="email" name="email" class="form-control form-control-primary" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Address</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="location" class="form-control form-control-primary" required>
                                                                </div>
                                                            </div>       
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Qualification</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="qual" class="form-control form-control-primary" required>
                                                                </div>
                                                            </div>      
                                                              <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Experience</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="expr" class="form-control form-control-primary" required>
                                                                </div>
                                                            </div>                                                  
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Password</label>
                                                                <div class="col-sm-10">
                                                                    <input type="password" name="password" class="form-control form-control-primary" required maxlength="15" minlength="4" >
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Photo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="file" name="photo" class="form-control form-control-primary" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row pull-right">
                                                               <div class="col-sm-10">
                                                                 <input type="submit" class="btn btn-danger btn-round btn-bg " value="Update">
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
