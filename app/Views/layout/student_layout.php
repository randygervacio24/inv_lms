<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Library Management System</title>

      <link rel="icon" type="image/png" href="<?= base_url('assets/logo.png') ?>">
      <link rel="icon" type="image/png" href="<?= base_url('img/logo.png') ?>">
      <link rel="stylesheet" href="<?= base_url('css/styles.css')?>">
    

      
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
      
      
   </head>
   <body class="sb-nav-fixed">
               <style>
           .sb-topnav {
              background-color: white;
              color: white;
            }
       </style>
      <!--Header -->
      <nav class="sb-topnav navbar navbar-expand navbar-dark shadow-lg">
         <!-- Navbar Brand-->
         <a class="navbar-brand ps-3" href="#">
            <h5>
               <img src="<?= base_url('img/logo.png') ?>" class="img-circle elevation-1 mx-auto " style="width: 40px; height: 40px; border-radius: 50%;"> 
               <span class="mt-2" style="color:#800000; font-size: 15px;">Library Management System</span>
            </h5>
         </a>
         <!-- Sidebar Toggle-->
          <button class="btn btn-link btn-lg order-1 order-lg-0 me-1 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars" style="color:#800000;"></i></button>
         <!-- Navbar Search-->
         <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
         </form>
         <!-- Navbar-->
         <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
            <a class="nav-link " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-alt" style="color:#800000; font-size: 20px;"></i> 
               <span class="d-none d-sm-inline-block ml-1 px-1" style="color:#800000; font-size: 20px;"><?= session()->get('firstname')?> <i class="fa fa-angle-down"></i></span></a>
               <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/studentProfile"><i class='fas fa-user-alt px-2'></i>Profile</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="/studentChangepass"><i class="fa fa-key px-2"></i>Change Password</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="/studentLogout"><i class="fa fa-sign-out px-2"></i>Logout</a></li>
               </ul>
            </li>
         </ul>
      </nav>
      <!--End Header -->
      <div id="layoutSidenav">
         <!--Sidebar -->
         <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion"  style="background-color:#800000;">
               <div class="sb-sidenav-menu">
                  <div class="user-panel d-block ">
                     <div class="image center">
                           &nbsp&nbsp<img src="<?= base_url('img/logo.png') ?>" class="img-circle elevation-1 mx-auto d-block" style="width: 80px; height: 80px; border-radius: 50%;" >
                           <h6 style="font-size: 20px; padding-top: 15px; text-align: center;">LIBRARY MANAGEMENT </h6>
                           <h6 style="font-size: 20px; text-align: center;">SYSTEM</h6>
                     </div>
                  </div>
                  <div class="nav">
                     <div class="sb-sidenav-menu-heading mt-3">Menu</div>
                     <a class="nav-link" href="/studentDashboard">
                        <i class="fa fa-home px-2"></i>
                        Dashboard
                     </a>
                     <a class="nav-link" href="/userBorrowedEquipment">
                        <i class="fas fa-warehouse px-2" aria-hidden="true"></i>
                        Borrowing Equipments
                     </a>
                  </div>
               </nav>
            </div> 
         
         <!--End Sidebar-->
         <div id="layoutSidenav_content">
         <main>
            <div class="container-fluid px-4">
               <!-- start page title -->
               <div class="row" style="margin-top:50px;">
                  <div class="col-sm-12 col-md-8 col-lg-8" style="font-weight: lighter; font-family: fangsong;">
                     <div class="page-title px-3">
                        <h5><ol class="breadcrumb" style="font-weight: 400; font-family: Georgia, serif;">
                           <?= $this->renderSection("breadcrumb"); ?>
                        </ol></h5>
                     </div>
                  </div>
               </div>
               <div class="row shadow h-100 mx-1 py-1 px-3" style="background-color:#ffffff; border-radius: 10px; border-left: 5px solid maroon;">
                  <div class="col-sm-10 col-md-10 col-lg-12" style="color:#2251a8;">
                     <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-3 font-size-18"><?= $this->renderSection("page-title"); ?></h4>
                     </div>
                  </div>
               </div><br>
               <!-- end page title -->

               <!-- MAIN CONTENT -->
            <section class="content">
                    <?= $this->renderSection("content"); ?>
            </section>
            <!-- /.MAIN CONTENT -->
           </div>
         </main>
         <!--Footer -->
       
         <!--End Footer-->
      </div>
   </div>

   <style>
      .breadcrumb{
         margin-bottom: 0;
         font-size:20px;
      }

      .content-name{
         margin-bottom: 0;
         font-size:28px;
         color: color:#800000;
      }

      .card-body-announcement{
         margin-bottom: 0;
         font-size:20px;
      }

      @media (max-width: 600px){
         .breadcrumb{
            font-size: 16px;
         }

         .content-name{
            font-size:18px;
         }

         .card-body-announcement{
            font-size:18px;
         }
      }
   </style>
   <script src="<?= base_url('js/scripts.js') ?>"></script>
   <script src="<?= base_url('js/sweetalert2.all.min.js') ?>"></script>
   <script src="<?= base_url('js/jquery-3.1.1.js') ?>"></script>

   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
   <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

<script>
$(document).ready(function() {
   var table = $('#example').DataTable( {
         responsive: true
   } );
} );
</script>
<script>
$(document).ready(function() {
   var table = $('#example1').DataTable( {
         responsive: true
   } );
} );
</script>
   
<script>
      $("input[type=password]").keyup(function(){
      var ucase = new RegExp("[A-Z]+");
      var lcase = new RegExp("[a-z]+");
      var num = new RegExp("[0-9]+");
      
      if($("#password1").val().length >= 8){
         $("#8char").removeClass("fa fa-remove");
         $("#8char").addClass("fa fa-check");
         $("#8char").css("color","#00A41E");
      }else{
         $("#8char").removeClass("fa fa-check");
         $("#8char").addClass("fa fa-remove");
         $("#8char").css("color","#FF0004");
      }
      
      if(ucase.test($("#password1").val())){
         $("#ucase").removeClass("fa fa-remove");
         $("#ucase").addClass("fa fa-check");
         $("#ucase").css("color","#00A41E");
      }else{
         $("#ucase").removeClass("fa fa-check");
         $("#ucase").addClass("fa fa-remove");
         $("#ucase").css("color","#FF0004");
      }
      
      if(lcase.test($("#password1").val())){
         $("#lcase").removeClass("fa fa-remove");
         $("#lcase").addClass("fa fa-check");
         $("#lcase").css("color","#00A41E");
      }else{
         $("#lcase").removeClass("fa fa-check");
         $("#lcase").addClass("fa fa-removee");
         $("#lcase").css("color","#FF0004");
      }
      
      if(num.test($("#password1").val())){
         $("#num").removeClass("fa fa-remove");
         $("#num").addClass("fa fa-check");
         $("#num").css("color","#00A41E");
      }else{
         $("#num").removeClass("fa fa-check");
         $("#num").addClass("fa fa-remove");
         $("#num").css("color","#FF0004");
      }
      
      if($("#password1").val() == $("#password2").val()){
         $("#pwmatch").removeClass("fa fa-remove");
         $("#pwmatch").addClass("fa fa-check");
         $("#pwmatch").css("color","#00A41E");
      }else{
         $("#pwmatch").removeClass("fa fa-check");
         $("#pwmatch").addClass("fa fa-remove");
         $("#pwmatch").css("color","#FF0004");
      }
   });
   </script>

   <script type="text/javascript">
      function readURL(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function (e) {
                  $('#pic')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200)
                        .css('display', 'block');
                  $('.pic_hide').hide();
               };
               reader.readAsDataURL(input.files[0]);
            }
      }
   </script>
   
   <script type="text/javascript">
      (() => {
   'use strict'

   // Fetch all the forms we want to apply custom Bootstrap validation styles to
   const forms = document.querySelectorAll('.needs-validation')

   // Loop over them and prevent submission
   Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
         if (!form.checkValidity()) {
         event.preventDefault()
         event.stopPropagation()
         }

         form.classList.add('was-validated')
      }, false)
   })
   })()
   </script>
   <script type="text/javascript">
   $(document).ready(function(){
      $('.sub-btn').click(function(){
         $(this).next('.sub-menu-list').slideToggle();
         $(this).find('.dropdown').toggleClass('rotate');
      });
   });
   </script>
   <script type="text/javascript">
      function readURL(input) {
         if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
               $('#pic')
                     .attr('src', e.target.result)
                     .width(200)
                     .height(200)
                     .css('display', 'block');
               $('.pic_hide').hide();
            };
            reader.readAsDataURL(input.files[0]);
         }
      }
   </script>
   </body>
   <script type="text/javascript">
      window.addEventListener('DOMContentLoaded', event => {
         const sidebarToggle = document.body.querySelector('.sidebarToggle');
         if (sidebarToggle) {
            sidebarToggle.addEventListener('click', event => {
               event.preventDefault();
               document.body.classList.toggle('sb-sidenav-toggled');
               localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
            });
         }

         });
   </script>
   
</html>
