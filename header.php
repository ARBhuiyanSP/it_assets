<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebbok https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */
require_once("config.php");

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: logout.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Saif Power Group</title>
		
        <!-- Custom box css -->
        <link href="plugins/custombox/css/custombox.min.css" rel="stylesheet">


        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <!--<a href="index.php" class="logo"><span>BLUELINE<span>-AMS</span></span><i class="mdi mdi-layers"></i></a>-->
                    <!-- Image logo -->
                    <a href="index.html" class="logo">
                        <span>
                           <img src="images/logoMenu.png" alt="" height="40">
                        </span>
                        <i>
                            <img src="images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <a href="#" class="menu-item"><?php echo date('m-d-y'); ?></a>
                            </li>
                        </ul>
                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <i class="mdi mdi-account-circle"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi, <?php echo $_SESSION["username"]; ?></h5>
                                    </li>
                                    <li><a href="profile.php"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul> <!-- end navbar-right -->
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title" style="color:#ffffff;">Navigation</li>
							
							
							<?php if($_SESSION["role"] == 'admin'){ ?>
							<li class="menu-title" style="background-color:#AF4940;color:#ffffff;">Settings</li>
							<li style="background-color:#049458;">
								<a href="javascript: void(0);" class="waves-effect waves-light">
									<i class="mdi mdi-settings"></i>
									<span>  Master Setup </span>
									<span class="menu-arrow"></span>
								</a>
								<ul class="nav-second-level" aria-expanded="false">
									<li><a href="vendors.php" class="waves-effect"><i class="mdi mdi-panorama-fisheye"></i><span>Vendors </span></a></li>
									<li><a href="clients.php" class="waves-effect"><i class="mdi mdi-panorama-fisheye"></i><span>Clients </span></a></li>
									<li><a href="company.php" class="waves-effect"><i class="mdi mdi-panorama-fisheye"></i><span>Company </span></a></li>
									<li><a href="division.php" class="waves-effect"><i class="mdi mdi-panorama-fisheye"></i><span>Division </span></a></li>
									<li><a href="department.php" class="waves-effect"><i class="mdi mdi-panorama-fisheye"></i><span>Department </span></a></li>
									<li><a href="designation.php" class="waves-effect"><i class="mdi mdi-panorama-fisheye"></i><span>Designation </span></a></li>
									<li><a href="assets_category.php" class="waves-effect"><i class="mdi mdi-panorama-fisheye"></i><span>Assets Category </span></a></li>
									<li><a href="employee_entry.php" class="waves-effect"><i class="mdi mdi-panorama-fisheye"></i><span>Employee Entry</span></a></li>
								</ul>
							</li>
							<?php } ?>
							
							<li class="menu-title" style="background-color:#AF4940;color:#ffffff;">User Area</li>
							<li style="background-color:#049458;">
                                <a href="dashboard.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span></a>
                            </li>
							<li style="background-color:#049458;">
                                <a href="products_entry.php" class="waves-effect"><i class="mdi mdi-library"></i><span> Assets Entry </span></a>
                            </li>
							<li style="background-color:#049458;">
                                <a href="products_list.php" class="waves-effect"><i class="mdi mdi-wrap"></i><span> Assets List </span></a>
                            </li>
							
							<li style="background-color:#049458;">
                                <a href="assign-entry.php" class="waves-effect"><i class="mdi mdi-account-circle"></i><span> Assign</span></a>
                            </li>
							<li style="background-color:#049458;">
                                <a href="assign-list.php" class="waves-effect"><i class="mdi mdi-account-circle"></i><span> Assign List </span></a>
                            </li>
							<li class="menu-title" style="background-color:#AF4940;color:#ffffff;">Reports</li>
							<li style="background-color:#049458;">
                                <a href="assets-history.php" class="waves-effect"><i class="mdi mdi-account-network"></i><span> Assets History</span></a>
                            </li>
							<li style="background-color:#049458;">
                                <a href="employee-history.php" class="waves-effect"><i class="mdi mdi-account-network"></i><span> Employee History</span></a>
                            </li>
							<li style="background-color:#049458;">
                                <a href="gate_pass.php" class="waves-effect"><i class="mdi mdi-car"></i><span> Gate Pass </span></a>
                            </li>
							<li style="background-color:#049458;">
                                <a href="gate_pass_list.php" class="waves-effect"><i class="mdi mdi-wrap"></i><span> Gate Pass List</span></a>
                            </li>
							<li style="background-color:#049458;">
                                <a href="assets-return.php" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Assets Return</span></a>
                            </li>
							<li style="background-color:#049458;">
                                <a href="disposal-entry.php" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Disposal </span></a>
                            </li>
							<li style="background-color:#049458;">
                                <a href="disposal-list.php" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Disposal List </span></a>
                            </li>
							<li style="background-color:#049458;">
                                <a href="disposal-check.php" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Disposal Check </span></a>
                            </li>
							<li style="background-color:#049458;">
                                <a href="users.php" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Users </span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
                        <p class=""><span class="text-custom">Email:</span> <br/>info@saifpowertecltd.com</p>
                    </div>

                </div>
                <!-- Sidebar -left -->

            </div>