<!DOCTYPE html>
<html lang="en" >
  <head>

  <?php session_start();
  
 ?>
    <title>TrioEX | HOME PAGE
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="TrioEX | Home Page">
    <meta name="author" content="TrioEX">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Page loading styles-->
    <style>
	  .rowcounter{
		margin-left: 10%;
    margin-top: 2%;
	  }
	  .rowcounter2{
		margin-left: 12%;
	  }
	  .rowcounter3{
		width: 200px;
		height: 250px;
	  }
	 
      .classOP{
		text-align: center;
		color: white;
	  }
	  .logostartup{
		height: 70px;
		width: 70px;
		border-radius: 200px;
		border: 1px solid black;
	  }
    </style>
      
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="/asset//vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="/asset//vendor/tiny-slider/dist/tiny-slider.css"/>
	<link rel="stylesheet" media="screen" href="/asset//vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
	<link rel="stylesheet" media="screen" href="/asset//vendor/flatpickr/dist/flatpickr.min.css"/>
	<link rel="stylesheet" media="screen" href="/asset//css/sweet-alert.css"/>
	<link rel="stylesheet" media="screen" href="/asset//vendor/toastr/toastr.min.css"/>
    <link rel="stylesheet" media="screen" href="/asset//css/theme.min.css">
	<link rel="stylesheet" media="screen" href="/asset//css/css/icons/fontawesome-free-5.15.3-web/css/all.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/bac6ecf02c.js" crossorigin="anonymous"></script>
  </head>
  <!-- Body-->
  <body style="background-image:url(/image/bullseye-gradient.svg);">
    <main class="cs-page-wrapper">
	        <header class="cs-header" style="background-color:#fff;">
        <div class="topbar" style="padding:0px;">
          <div class="container d-md-flex align-items-center px-0 px-xl-3">
            <div class="d-none d-md-block text-nowrap mr-3"><img width="63" src="/image/logo.jpg" alt="COER TECH WARRIORS" class="mr-3"/><a href="#"><img width="122" src="https://www.pngitem.com/pimgs/m/609-6094516_transparent-startup-india-logo-hd-png-download.png" alt="Startup Uttarakhand"/></a></div>
            <div class="d-flex text-md-center ml-md-auto"><a class="topbar-link pr-1 ml-4" href="#"><i class="fa fa-phone font-size-lg text-primary mr-1"></i><span class='d-sm-inline'> +91 8279272606</span><small class="d-block text-muted">(10:00 AM to 05:30 PM)</small></a>|<a class="topbar-link pr-1 ml-1" href="#"><i class="fa fa-mail font-size-lg text-primary"></i> <span class='d-sm-inline'>ujjawalpant04@gmail.com</span></a>
            
            </div>
          </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light bg-light navbar-box-shadow navbar-sticky" data-scroll-header>
			<button class="navbar-toggler ml-n2 mr-2" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span class="navbar-toggler-icon"></span></button><img class="d-lg-none" width="118" src="/image/logo.jpg" alt="COER TECH WARRIERS"/></a>

          <div class="container px-0 px-xl-3">
			
			<div class="d-flex align-items-center order-lg-3 ml-lg-auto">
               <?php if(isset($_SESSION["id"])){
                ?>
                			  			  <a class="nav-link-style font-size-sm text-nowrap ml-2" href="/logout"><i class="fa fa-user font-size-xl mr-2"></i>Logout</a>

                <?php
               }else{
                ?>
			  			  <a class="nav-link-style font-size-sm text-nowrap ml-2" href="/login"><i class="fa fa-user font-size-xl mr-2"></i>Sign in</a>
			  <a class="btn btn-dark ml-grid-gutter d-none d-lg-inline-block" href="/signup">Sign up</a>
			          <?php
                      }
                      ?>   
            </div>
			
            
            <div class="cs-offcanvas-collapse order-lg-2" id="primaryMenu">
              <div class="cs-offcanvas-cap navbar-box-shadow">
                <h5 class="mt-1 mb-0">Menu</h5>
                <button class="close lead" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span aria-hidden="true"></span></button>
              </div>
              <div class="cs-offcanvas-body">
                <!-- Menu-->
                <ul class="navbar-nav">
				  <li class="nav-item active"><a class="nav-link" href="/" class="fas fa-home">Home</a></li>

				  <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
				  <li class="nav-item"><a class="nav-link" href="/startup" >Startup</a>
				  <li class="nav-item "><a class="nav-link" href="/investor">Investors</a></li>
				  <li class="nav-item"><a class="nav-link" href="/iic" >incubation Centers</a>
                  </li>
                  
                  <li class="nav-item"><a class="nav-link" href="/success_stories">Success Stories</a></li>
				  
				  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="problem_statement" data-toggle="dropdown">More</a>
                    <ul class="dropdown-menu">
						<li><a class="dropdown-item" href="/problem_statement">Problem Statements</a></li>
                        <?php
                        if(isset($_SESSION['Role'])){
                        if($_SESSION['Role']=="Government Agency"||$_SESSION['Role']=="Admin"){
                        ?>
                      <li><a class="dropdown-item" href="/Register_Problem_Statement">Add Problem Statement</a></li>
                      <?php
                        }
                    }
                    
?>
  <?php
                        if(isset($_SESSION['Role'])){
                        if($_SESSION['Role']=="Admin"){
                        ?>
                      <li><a class="dropdown-item" href="/Manage">Manage User</a></li>
                      <?php
                        }
                    }
?>

                      <li><a class="dropdown-item" href="/contact">Contact Us</a></li>
                      <li><a class="dropdown-item" href="/mentor">Mentors</a></li>
                    </ul>
                  </li>                  
                </ul>
              </div>
              <div class="cs-offcanvas-cap border-top"><a class="btn btn-primary btn-block" href="/signup" ><i class="fa fa-user font-size-lg mr-2"></i>Sign in</a><br/>
            </div>
          </div>
        </div>
      </header>