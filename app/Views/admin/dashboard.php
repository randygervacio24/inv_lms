
<!--<link rel="icon" type="image/png" href="<?= base_url('images/logo-light.png') ?>">-->
<link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
<body class="sb-nav-fixed" >
<div id="layoutSidenav">
	<div id="layoutSidenav_content">
		<main>
		  <style>
           .sb-topnav {
              background-color: white;
              color: white;
            }
            
            #sidebarToggle{
                color:#800000;
                background-color: #fff;
            }
            
            .navbar-brand{
                color:#800000;
            }
            
            #navbarDropdown{
                 color:#800000;
                background-color: #fff;
            }
            
            .dropdown-menu{
                color:#800000;
                background-color: #fff;
            }

           </style>
			<div class="container-fluid px-4">
				<div class="row shadow h-100 mx-1 py-1 px-3" style="background-color:#ffffff; border-radius: 10px; border-left: 5px solid maroon;margin-top:50px;">
                  <div class="col-sm-10 col-md-10 col-lg-12" style="color:#2251a8;">
                     <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-3 font-size-18">Dashboard</h4>
                     </div>
                  </div>
               </div><br>
				<div class="row">
                    <div class="col-xl-3 col-md-6 mb-4"><br>
                        <div class="card bg-danger text-white shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="h5 font-weight-bold text-white text-uppercase mb-1">
                                            Registered Students</div>
                                        <div class="h1 mb-0 font-weight-bold text-gray-800">
                                            <!--Income total + Perplay total-->
                                        0
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="h1 fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="h6 text-white stretched-link" href="/member">View Details</a>
                                <div class="h6 text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
			    </div>
            </div>
		</main>
    </div>

		
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>

<script>
if(<?= session()->has('success');?>)Swal.fire({
   icon: 'success',
   title: 'Login Success!',
   text: 'Successfully logged in!'
 })
</script>

</body>
</html>