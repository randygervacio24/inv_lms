<!--Sidebar -->
<div id="layoutSidenav_nav">
   <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color:#800000;">
      <div class="sb-sidenav-menu" style="background-color:#800000;">
         <div class="user-panel d-block ">
            <div class="image center">
               &nbsp&nbsp<img src="<?= base_url('img/logo.png') ?>" class="img-circle elevation-1 mx-auto d-block" style="width: 80px; height: 80px; border-radius: 50%;" >
               <h6 style="font-size: 20px; padding-top: 15px; text-align: center;">LIBRARY MANAGEMENT </h6>
               <h6 style="font-size: 20px; text-align: center;">SYSTEM</h6>
            </div>
         </div>
         <div class="nav">
            <div class="sb-sidenav-menu-heading" >Menu</div>
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
                  <a class="nav-link" href="/member"><i class='fas fa-user-alt px-2'></i>Students</a>
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
         </div>
      </nav>
   </div> 

<!--End Sidebar-->