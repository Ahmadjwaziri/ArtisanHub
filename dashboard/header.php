<?php
session_start();
extract($_SESSION);
extract($_POST);
extract($_GET);
include('connection.php');




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ArtysanHub - Dashboard Portal </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ArtysanHub" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/ArtisanHub2.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- New Links -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  


    
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="dashboard.php" class="navbar-brand mx-4 mb-3">

                    <h5 class="text-primary"><i><img src="img/ArtisanHub2.png" alt="" width="50px" height="50px"></i>ArtisanHub</h5>

                </a>
                
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="ManageMessage.php" class="nav-item nav-link"><i class="fa fa-envelope me-lg-2"></i>Messages</a>
                   <?php   if(isset($admindata)){  ?>
                    <a href="ManageAdmins.php" class="nav-item nav-link"><i class="fa fa-user-edit me-2"></i>Manage-Admin</a>  
                    <a href="ManageStaffs.php" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Staffs</a>
                    <a href="Performance.php" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Performance</a>
                    <a href="ManageUsers.php" class="nav-item nav-link"><i class="fa fa-user-edit me-2"></i>Manage-Users</a>
                    
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-bullhorn me-2"></i>Post</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="NewPost.php" class="nav-item nav-link"><i class="fa fa-newspaper me-2"></i>New-Post</a>
                            <a href="ManagePost.php" class="nav-item nav-link"><i class="fa fa-edit me-2"></i>Manage-post</a>
                            
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Services</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="AllServices.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>All-Service</a>
                            <a href="AssignService.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Assign</a>
                            <a href="AcceptedService.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Accepted</a>
                            
                            <a href="RejectedService.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Rejected</a>
                            <a href="PendingService.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Pending</a>
                            <a href="CompletedService.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Completed</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-money-bill me-2"></i>Payments</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-download me-2"></i>Reports</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="nav-item nav-link"><i class="fa fa-print me-2"></i>Service-List</a>
                            <a href="#" class="nav-item nav-link"><i class="fa fa-print me-2"></i>Request-list</a>
                            <a href="#" class="nav-item nav-link"><i class="fa fa-print me-2"></i>Completed</a>
                            <a href="#" class="nav-item nav-link"><i class="fa fa-print me-2"></i>Payments</a>
                            <a href="#" class="nav-item nav-link"><i class="fa fa-print me-2"></i>Staffs-List</a>
                            <a href="#" class="nav-item nav-link"><i class="fa fa-print me-2"></i>Performance</a>
                        </div>
                    </div>   
                    <?php } ?>
                    <?php if(isset($userdata)){   ?>
                    <a href="ServiceRequest.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Request-Service</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-money-bill me-2"></i>Payments</a>
                    <?php } ?>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-user-cog me-2"></i>Settings</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="dashboard.php" class="navbar-brand d-flex d-lg-none me-4">
                <h5 class="text-primary"><i><img src="img/ArtisanHub2.png" alt="" width="50px" height="50px"></i>ArtysanHub</h5>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/ahmad.jpeg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">
                                
                                <?php 
                               
                                if(isset($admindata)){
                                echo $admindata['admin_fullname']; }
                                else{
                                 echo $userdata['user_fulname']; } ?>
                            
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->