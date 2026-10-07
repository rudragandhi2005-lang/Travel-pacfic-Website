<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>Travel Pacifica Admin</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"content="Travel Pacifica Admin"/>
    <meta name="keywords" content="Travel Pacifica" />
    <meta name="author" content="CodedThemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="logo.png" type="image/x-icon" />
 <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" id="main-font-link" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="/assets/fonts/tabler-icons.min.css" />
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="/assets/fonts/material.css" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="/assets/css/style.css" id="main-style-link" />
<link rel="stylesheet" href="/assets/css/style-preset.css" id="preset-style-link" />

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body>
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="m-header">
    <a href="/admin" class="b-brand">
      <!-- ========   change your logo hear   ============ -->
      <img src="/logo.png" href="/ad" class="logo logo-lg"  height="100px"  width="150px"/>
    {{-- <a href="/admin" src=""> <p class="fs-2 mt-3">Admin Panel</p></a>--}}


        
    </a>
    <!-- ======= Menu collapse Icon ===== -->
    
  </div>
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <li class="pc-h-item header-mobile-collapse">
      <a href="#" class="pc-head-link head-link-secondary ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item d-inline-flex d-md-none">
      <a class="pc-head-link head-link-secondary dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#"
        role="button" aria-haspopup="false" aria-expanded="false">
        <i class="ti ti-search"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3">
          <div class="form-group mb-0 d-flex align-items-center">
            <i class="ti ti-search"></i>
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search here..." />
          </div>
        </form>
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">

    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
      <a class="pc-head-link head-link-secondary dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
        role="button" aria-haspopup="false" aria-expanded="false">
        <i class="ti ti-bell"></i>
      </a>
     
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a class="pc-head-link head-link-primary dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
        role="button" aria-haspopup="false" aria-expanded="false">
        <img src="/user" alt="user-image" class="user-avtar" />
        <span>
          <i class="ti ti-settings"></i>
        </span>
      </a>
 
    </li>
  </ul>
</div> </div>
</header>
<!-- [ Header ] end -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="index.html" class="b-brand">
        <!-- ========   Change your logo from here   ============ -->
        Admin Panel
        {{-- <img src="../assets/images/logo-dark.svg" alt="" class="logo logo-lg" /> --}}
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Dashboard</label>
          <i class="ti ti-dashboard"></i>
        </li>
        <li class="pc-item">
          <a href="/admin" class="pc-link"><span class="pc-micon"><i class="ti ti-dashboard"></i></span><span
              class="pc-mtext">Dashboard</span></a>
        </li>
        <li class="pc-item pc-caption">
          <label>Pages</label>
          <i class="ti ti-news"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="/category" class="pc-link"><span class="pc-micon"><i class="ti ti-calendar"></i></span><span
              class="pc-mtext">Destination</span>
              </a>
          
        </li>

        <li class="pc-item pc-hasmenu">
          <a href="/product" class="pc-link"><span class="pc-micon"><i class="ti ti-package"></i></span><span
              class="pc-mtext">Package</span>
              </a>
          
        </li>

        <li class="pc-item pc-hasmenu">
          <a href="/users" class="pc-link"><span class="pc-micon"><i class="ti ti-user"></i></span><span class="pc-mtext">Users</span>
              </a>
          
        </li>

        
          
        </li>

        <li class="pc-item pc-hasmenu">
          <a href="/login" class="pc-link"><span class="pc-micon"><i class="ti ti-arrow-back"></i></span><span
              class="pc-mtext">Logout</span>
              </a>
          
        </li>


       </ul>
      
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">