<?php
	$Log_Id=$_SESSION['SESS_USER_ID'];
	$result = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$uname=$row["name"];		
	}
?>
<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" style="text-transform:capitalize;">
            Welcome <?php echo $uname;?>
        </div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="index.php">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Profile</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="profile.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Profile</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                        
                </ul>
            </li>                                                                
                                    
             <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Product</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="product_search.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Search</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>    
                     <li class=" ">
                        <a href="product_location.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Location</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>   
                     <li class=" ">
                        <a href="product_request.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Request</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                        
                    <li class=" ">
                        <a href="product_report.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Report</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                     
                </ul>
            </li> 
            
            
             <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Order</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">                       
                     <li class=" ">
                        <a href="product_request.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Order</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                        
                    <li class=" ">
                        <a href="product_report.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Report</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                     
                </ul>
            </li> 
            
             <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Offers</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="offers_search.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Search</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>    
                     <li class=" ">
                        <a href="offers_location.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Location</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                                            
                </ul>
            </li> 
            
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Package</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="package_search.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Search</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>    
                     <li class=" ">
                        <a href="package_location.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Location</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                                            
                </ul>
            </li> 
            
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Points</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="points_report.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Search</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>    
                    <li class=" ">
                        <a href="points_recomnd.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Recomendation</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                                                                  
                </ul>
            </li> 
            
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Notification</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">                                      
                    <li class=" ">
                        <a href="notification_search.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Search</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                                   
                </ul>
            </li> 
             
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Complaints</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">                                      
                    <li class=" ">
                        <a href="complaint_send.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Send</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="complaint_view.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">View</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>  
                     <li class=" ">
                        <a href="complaint_reply.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Reply</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                    
                </ul>
            </li> 
            
             <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Logout</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">                  
                     <li class=" ">
                        <a href="../index.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Logout</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                                  
                </ul>
            </li> 
            
        </ul>
    </div>
</nav>