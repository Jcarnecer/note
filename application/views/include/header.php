<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <link rel="shortcut icon" href="payakapps.com/assets/images/favicon.png" type="image/x-icon">
               
        <title>Bulletin Board</title>


        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Slabo+27px">
        
        <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/flavored-reset-and-normalize.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.min.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/task.css'); ?>" />     
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/cork.css'); ?>" />
        
    </head>
    <body>

        <div id="sidebar" style="overflow-y: auto;">

            <!-- sidebar menu start-->
            <div id="nav-icon-back">
                <a href="<?= ENVIRONMENT === 'development' ? 'http://localhost/main' : 'http://payakapps.com' ?>">
                    <i style="color:#fff;height: 25px;position: relative;width:30px;" class="fa fa-arrow-left"></i>
                </a>
            </div>
            <div id="nav-icon-close" class="custom-toggle">
                <span></span>
                <span></span>
            </div>

            <ul class="sidebar-menu">		

                <li class="">
                    <a class="task-create" href="#searchTaskModal" data-toggle="modal">
                        <i class="fa fa-search" aria-hidden="true"></i>
                            <span>Search</span>
                    </a>
                </li>

                <li class="">
                    <a class="font-weight-bold text-warning" href="#tutorialModal" data-toggle="modal">
                        <i class="fa fa-star" aria-hidden="true"></i>
                            <span>Guide with Bulletin</span>
                    </a>
                </li>
                
                <li class="">
                    <a class="" href="<?= LOGOUT_URL ?>">
                        <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>

        <div class="main-content h-100">

            <div class="topbar">
                <nav class="navbar navbar-custom navbar-expand-lg">
                    <div id="nav-icon-open" class="custom-toggle hidden-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                     <a class="navbar-brand" href="<?= base_url(); ?>">Bulletin Board</a>
                    
                    <ul class="navbar-nav flex-row ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                <img class="img-avatar mr-2" src="<?= $avatar_url ?>"><?= $user_name ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?= ENVIRONMENT === "development" ? 'http://localhost/main/users/profile' : 'http://payakapps.com/users/profile' ?>">My Profile</a>
                                <a class="dropdown-item" href="<?= ENVIRONMENT === "development" ? 'http://localhost/main/users/profile/change-password' : 'http://payakapps.com/users/profile/change-password' ?>">My Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= LOGOUT_URL ?>">Logout</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="inner-content h-100">
            