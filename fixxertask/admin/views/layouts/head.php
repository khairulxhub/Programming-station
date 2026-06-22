<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD professional admin dashboard template">
  <title href="">FixxerTask | Dashboard</title>
  <link rel="icon" href="<?php echo BASE_URL_ADMIN; ?>assets/images/avatar/fixxerlogo.jpeg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL_ADMIN; ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL_ADMIN; ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo BASE_URL_ADMIN; ?>assets/css/style.css">

  <style>
    .brand-logo {
      width: 40px;
      height: 40px;
      object-fit: contain;
    }
  </style>
</head>

<body>
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

    <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
      <div class="sidebar-header">
        <a class="brand-mark" href="index.html" aria-label="FixxerTask dashboard">

          <span class="brand-icon">
            <img src="assets/images/avatar/fixxerlogo.jpeg" alt="FixxerTask Logo" class="brand-logo">
          </span>
          <span class="brand-copy">
            <span class="brand-title">FixxerTask</span>
            <span class="brand-subtitle">Admin Panel</span>
          </span>
        </a>
      </div>

      <nav class="sidebar-nav">
        <a class="nav-link active" href="dashboard" aria-current="page">
          <span class="nav-icon"><i class="bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">Dashboard</span>
        </a>
        <!-- <a class="nav-link active" href="form" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">Form</span>
        </a>
        <a class="nav-link active" href="table" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">Table</span>
        </a> -->
        <a class="nav-link active" href="pos" aria-current="page">
          <span class="nav-icon"><i class="bi-calendar-check"></i> </span>
          <span class="nav-text">Booking</span>
        </a>
        <a class="nav-link active" href="products" aria-current="page">
          <span class="nav-icon"><i class="bi-tools" aria-hidden="true"></i></span>
          <span class="nav-text">Service</span>
        </a>
        <a class="nav-link active" href="table" aria-current="page">
          <span class="nav-icon"><i class="bi-person-workspace" aria-hidden="true"></i></span>
          <span class="nav-text">Providers</span>
        </a>

        <a class="nav-link active" href="table" aria-current="page">
          <span class="nav-icon"><i class="bi-people" aria-hidden="true"></i></span>
          <span class="nav-text">Customers</span>
        </a>
        <a class="nav-link active" href="table" aria-current="page">
          <span class="nav-icon"><i class="bi-star" aria-hidden="true"></i></span>
          <span class="nav-text">Reviews</span>
        </a>
        <a class="nav-link active" href="table" aria-current="page">
          <span class="nav-icon"><i class="bi-credit-card" aria-hidden="true"></i></span>
          <span class="nav-text">Payment Methods</span>
        </a>
        <a class="nav-link active" href="users" aria-current="page">
          <span class="nav-icon"><i class="bi-person-circle"></i></span>
          <span class="nav-text">Users</span>
        </a>
        <a class="nav-link active" href="table" aria-current="page">
          <span class="nav-icon"><i class="bi-shield-lock" aria-hidden="true"></i></span>
          <span class="nav-text">Roles</span>
        </a>
        <a class="nav-link active" href="table" aria-current="page">
          <span class="nav-icon"><i class="bi-gear" aria-hidden="true"></i></span>
          <span class="nav-text">Setting</span>
        </a>



      </nav>

      <div class="sidebar-user">
        <img class="avatar-img avatar-md sidebar-user-avatar" src="<?php echo BASE_URL_ADMIN; ?>assets/images/avatar/kkk.jpg" alt="Admin Hasan">
        <h3>Sabbir Isalam</h3>
        <small>Active Workspace</small>
      </div>

      <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
      </div>
    </aside>