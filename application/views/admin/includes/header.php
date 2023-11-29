<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="keywords" content="" />
      <meta name="author" content="DexignZone" />
      <meta name="robots" content="" />
      <meta name="description" content="Akshara Library"/>
      <meta property="og:title" content="Akshara Library"/>
      <meta property="og:description" content="Akshara Library"/>
      <meta name="format-detection" content="telephone=no">
      <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>public/images/favicon.png"/>
      <title>Akshara Library - Book Store</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- STYLESHEETS -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/icons/fontawesome/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/swiper-bundle.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/animate.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
   </head>
   <body>
      <div class="page-wraper">
         <header class="site-header mo-left header style-1">
            <!-- Main Header -->
            <div class="header-info-bar">
               <div class="container clearfix">
                  <!-- Website Logo -->
                  <div class="logo-header logo-dark">
                     <a href="index.html"><img src="<?php echo base_url(); ?>public/images/logo.jpeg" alt="logo"></a>
                  </div>
                  <!-- EXTRA NAV -->
                  <div class="extra-nav">
                     <div class="extra-cell">
                        <ul class="navbar-nav header-right">
                           <li class="nav-item">
                              <a class="TopAdd" href="#">
                              <i class="flaticon-phone"></i> +91 123456789 
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="TopAdd" href="#">
                              <i class="flaticon-email"></i> info@dmoain.com
                              </a>
                           </li>
                           <li class="nav-item">
                              <div class="dz-social-icon style-1">
                                 <ul>
                                    <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                 </ul>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Main Header End -->
            <!-- Main Header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
               <div class="main-bar clearfix">
                  <div class="container clearfix">
                     <!-- Website Logo -->
                     <div class="logo-header logo-dark">
                        <a href=""><img src="<?php echo base_url(); ?>public/images/logo.jpeg" alt="logo"></a>
                     </div>
                     <!-- Nav Toggle Button -->
                     <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span></span>
                     <span></span>
                     <span></span>
                     </button>
                     <!-- EXTRA NAV -->
                     <div class="extra-nav">
                        <div class="extra-cell">
                           <a href="" class="btn btn-primary btnhover btContact">Get In Touch</a>	
                        </div>
                     </div>
                     <!-- Main Nav -->
                     <div class="header-nav navbar-collapse collapse MenuFlextend" id="navbarNavDropdown">
                        <div class="logo-header logo-dark">
                           <a href="index.html"><img src="images/logo.jpeg" alt=""></a>
                        </div>
                        <ul class="nav navbar-nav">
                           <li class=""><a href="<?php echo base_url(); ?>home">Home</a></li>
                           <li class=""><a href="<?php echo base_url(); ?>about_us">About us</a></li>
                           <li class=""><a href="<?php echo base_url(); ?>book">Book store</a></li>
                           <li class="">
                              <a class="nav-link TopLink" href="<?php echo base_url(); ?>signup">
                              Sign up
                              </a>
                           </li>
                           <li class="">
                              <a class="nav-link TopLink" href="<?php if ($this->session->userdata('is_logged_in')) {

echo base_url().'admin/category';

//  redirect('admin/category');

}
else {
 echo base_url().'login';
}
?>">
                              Login
                              </a>
                           </li>
                        </ul>
                        <div class="dz-social-icon">
                           <ul>
                              <li><a class="fab fa-facebook-f" target="_blank" href="#"></a></li>
                              <li><a class="fab fa-twitter" target="_blank" href="#"></a></li>
                              <li><a class="fab fa-linkedin-in" target="_blank" href="#"></a></li>
                              <li><a class="fab fa-instagram" target="_blank" href="#"></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!-- Header End -->