<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <title>Dashboard- LSM</title>
   <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
   <link href="css/styles.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
   <link rel="icon" type="image/png" href="<?= base_url('img/logo.png') ?>">
   


   <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>




   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
      <script src="<?= base_url('js/jquery-3.1.1.js') ?>"></script>
      <script src="../plugins/jquery-mask/jquery.mask.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   
   
</head>
<body>
   <?php 
      $uri= service('uri');
   ?>
   
   



    <?php if(session()->get('isLoggedIn')): ?>
      <nav class="sb-topnav navbar navbar-expand navbar-dark shadow-lg" >

      <a class="navbar-brand ps-3" href="#">
            <h5>
               <img src="<?= base_url('img/logo.png') ?>" class="img-circle elevation-1 mx-auto " style="width: 40px; height: 40px; border-radius: 50%;"> 
               <span class="mt-2" style="color:#800000; font-size: 15px;">Library Management System</span>
            </h5>
         </a>
         <!-- Sidebar Toggle-->
         <button class="btn btn-link btn-lg order-1 order-lg-0 me-1 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars" style="color:#800000; background-color: #fff;"></i></button>
         
         <!-- Navbar Search-->
         <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            
            
         </form>
         <!-- Navbar-->
         
         <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-alt"></i> 
               <span class="d-none d-sm-inline-block ml-1 px-1 fs-4"><?= session()->get('firstname')?></span></a>
               <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/profile"><i class='fas fa-user-alt px-2'></i>Profile</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="/changepass"><i class="fa fa-key px-2"></i>Change Password</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="/logout"><i class="fa fa-sign-out px-2"></i>Logout</a></li>
               </ul>
            </li>
         </ul>
      </nav>
    
    <?php else: ?>
 
    <?php endif; ?>

</nav>


