<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Library Management System</title>

      <!--<link rel="icon" type="image/png" href="<?= base_url('img/logo.png') ?>">-->
      <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">

      <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
      <link href='https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700' rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel="stylesheet">
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

          <a class="navbar-brand ps-3" href="#"><h5><img src="<?= base_url('img/logo.png') ?>" class="img-circle elevation-1 mx-auto " style="width: 40px; height: 40px; border-radius: 50%;"> <span class="mt-2" style="color:#171c62; font-size: 15px;">Library Management System</span></h5></a>
         <!-- Sidebar Toggle-->
         <button class="btn btn-link btn-lg order-1 order-lg-0 me-1 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars" style="color:#800000"></i></button>
         <!-- Navbar Search-->
         <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
         </form>
         <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown" style="color:#800000;">
               <a class="nav-link " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-alt" style="color:#800000; font-size: 20px;"></i> 
               <span class="d-none d-sm-inline-block ml-1 px-1" style="color:#800000;font-size: 20px;"><?= session()->get('firstname')?> <i class="fa fa-angle-down"></i></span></a>
               <ul class="dropdown-menu dropdown-menu-end" style="color:#800000; font-size: 20px;" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/profile"><i class='fas fa-user-alt px-2'></i>Profile</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="/changepass"><i class="fa fa-key px-2"></i>Change Password</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="/logout"><i class="fa fa-sign-out px-2"></i>Logout</a></li>
               </ul>
            </li>
         </ul>
      </nav>
      <!--End Header -->
      <div id="layoutSidenav">
         <!--Sidebar -->
         <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color:#800000;">
               <div class="sb-sidenav-menu">
                  <div class="user-panel d-block ">
                     <div class="image center">
                           &nbsp&nbsp<img src="<?= base_url('img/logo.png') ?>" class="img-circle elevation-1 mx-auto d-block" style="width: 80px; height: 80px; border-radius: 50%;" >
                           <h6 style="font-size: 20px; padding-top: 15px; text-align: center;">Library Management </h6>
                           <h6 style="font-size: 20px; text-align: center;">System</h6>
                     </div>
                  </div>
                  <div class="nav">
                     <div class="sb-sidenav-menu-heading mt-3">Menu</div>
                     <a class="nav-link" href="/dashboard">
                       <i class="fas fa-tachometer-alt px-2"></i>
                        Dashboard
                     </a>
                     <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <i class='fas fa-user-cog px-2'></i>
                           Users
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                           <a class="nav-link" href="/administrator"><i class='fas fa-user-alt px-2'></i>Admin</a>
                           <a class="nav-link" href="/member"><i class='fas fa-user-alt px-2'></i>Members</a>
                        </nav>
                     </div>
                     <a class="nav-link" href="/inventory">
                        <i class='fas fa-warehouse px-2'></i>
                        Inventory
                     </a>
                     <a class="nav-link" href="/borrowed_inventory">
                        <i class='fas fa-warehouse px-2'></i>
                        Borrowed Equipment
                     </a>
                  </div>
               </nav>
            </div> 
         
         <!--End Sidebar-->
         <div id="layoutSidenav_content" style="background-color: #f6f7f8;">
         <main>
            <div class="container-fluid px-4 py-3">
               <!-- start page title -->
               <div class="row" style="margin-top:40px;">   
                  <div class="col-sm-12 col-md-8 col-lg-8" style="font-weight: lighter;">
                     <div class="page-title px-3">
                        <h5><ol class="breadcrumb" style="font-weight: 400; ">
                           <?= $this->renderSection("breadcrumb"); ?>
                        </ol></h5>
                     </div>
                  </div>
               </div>
               <div class="row shadow mx-1 my-auto px-3 pt-2" style="background-color:#ffffff; border-radius: 10px; border-left: 5px solid maroon; height:60px;">
                  <div class="col-sm-6 col-md-6 col-lg-6" style="color:#2251a8; font-weight:bold;">
                     <div class="page-title-box d-flex pt-2">
                        <?= $this->renderSection("page-title"); ?>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6" style="color:#2251a8;">
                     <div class="page-title-box d-flex float-end">
                     <br><?= $this->renderSection("generateButton"); ?>
                     </div>
                  </div>
               </div>
               <!-- end page title -->

               <!-- MAIN CONTENT -->
                  <section class="content">
                     <?= $this->renderSection("content"); ?>
                  </section>
               <!-- /.MAIN CONTENT -->
           </div>
         </main>

         <!--Footer -->
         <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
               <div class="d-flex align-items-center justify-content-between small">
                  <div class="text-muted">Library Management System</div>
               </div>
            </div>
         </footer>
         <!--End Footer-->
      </div>
   </div>
   <style>
      .card-header{
         background-color: #fff;
      }
      table thead tr th,
      table thead tr td{
         font-weight:bold;
         background-color:#1b8eec2e;
         color: #170303;
      }

      table tbody tr td{
         font-weight: 400;
         
      }
      
      .required-field::after {
         content: "*";
         color: red;
         margin-left:5px
      }

      .breadcrumb{
         margin-bottom: 0;
         font-size:20px;
      }

      .page-title-box{
         margin-bottom: 0;
         font-size:20px;
      }

      @media (max-width: 600px){
         .breadcrumb{
            font-size: 16px;
         }

         .page-title-box{
         font-size:18px;
      }
      }
   </style>

   <script src="<?= base_url('js/jquery-3.1.1.js') ?>"></script>
   <script src="../plugins/jquery-mask/jquery.mask.min.js"></script>
   <script src="<?= base_url('js/scripts.js') ?>"></script>
   <script src="<?= base_url('js/sweetalert2.all.min.js') ?>"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha512-DUC8yqWf7ez3JD1jszxCWSVB0DMP78eOyBpMa5aJki1bIRARykviOuImIczkxlj1KhVSyS16w2FSQetkD4UU2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   
   <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' type='text/javascript'></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
   <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
   <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



<!---- Numbers Only ---->
<script>
   function validateNumber(e) {
      const pattern = /^[0-9]$/;

      return pattern.test(e.key )
   }
</script>

<!-------Alphabet Only ----->
<script>
   $(document).ready(function(){
    $("#inputTextBox").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
        $('#input').html(inputValue);
    });
});
</script>

<script>
   $(document).ready(function(){
    $("#inputText").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
        $('#input').html(inputValue);
    });
});
</script>

<script>
   $(document).ready(function(){
    $("#inputText1").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
        $('#input').html(inputValue);
    });
});
</script>

<!--Validate Password Strength -->
<script>
   function validatePassword(password) {
         
         // Do not show anything when the length of password is zero.
         if (password.length === 0) {
            document.getElementById("msg").innerHTML = "";
            return;
         }
         // Create an array and push all possible values that you want in password
         var matchedCase = new Array();
         matchedCase.push("[$@$!%*#?&]"); // Special Charector
         matchedCase.push("[A-Z]");      // Uppercase Alpabates
         matchedCase.push("[0-9]");      // Numbers
         matchedCase.push("[a-z]");     // Lowercase Alphabates

         // Check the conditions
         var ctr = 0;
         for (var i = 0; i < matchedCase.length; i++) {
            if (new RegExp(matchedCase[i]).test(password)) {
               ctr++;
            }
         }
         // Display it
         var color = "";
         var strength = "";
         switch (ctr) {
            case 0:
            case 1:
            case 2:
               strength = '<b style="color:red"> Password strength: Weak...</b>'; 
               break;
            case 3:
               strength = '<b style="color:orange"> Password strength: Medium...</b>'; 
               break;
            case 4:
               strength = '<b style="color:green"> Password strength: Strong...</b>';
               break;
         }
         document.getElementById("msg").innerHTML = strength;
         document.getElementById("msg").style.color = color;
   }
</script>

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
      $(document).ready(function() {
         var table = $('#example2').DataTable( {
               responsive: true
         } );
      } );
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

   <script>
      $('.btn-danger').on('click', function(e){
         e.preventDefault();
         const href= $(this).attr('href')

         Swal.fire({
            title: 'Confirm Delete',
            text: 'Are you sure you want to delete this record??',
            type: 'Warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete Record',
         }).then((result)=>{
            if(result.value){
               document.location.href=href;
            }
         })
      })
   </script>
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
   <script>
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
      const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
   </script>
   </body>
</html>
