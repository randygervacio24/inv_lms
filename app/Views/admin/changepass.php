<?= $this->extend("layout/user_account_layout"); ?>

<?= $this->section("page-title"); ?>
  Update Password
<?= $this->endSection(); ?>

<?= $this->section("breadcrumb"); ?>
   <li class="breadcrumb-item"><a href="/dashboard"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
   <li class="breadcrumb-item active">Update Password</li>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>
   <div class="card border-left-info mb-3 shadow-lg mt-3" style="border-radius: 15px;">
      <div class="card-body">
         <div class="d-flex justify-content-center">
            <div class="container mx-auto">
               <form class="row needs-validation" novalidate action="/changepass" id="passwordForm" method="post">
               <div class="row mt-3 ps-5">
                  <div class="col-md-4 col-lg-3 col-sm-12 mb-2">
                     <label for="validationCustom02" class="form-label required" style="font-weight:bold">New Password</label>
                  </div>
                  <div class="col-md-6 col-lg-7 col-sm-12">
                     <input type="password" class="form-control" name="password" id="password1"  onkeyup="validatePassword(this.value);" autocomplete="off" required>
                     <div class="invalid-feedback">
                        Please provide a Password.
                     </div>
                        <span class="text-danger">
                           <?= (isset($validation) && $validation->hasError('password')) ? $validation->getError('password'): ''?>
                        </span><br>
                     <div class="row">
                        <div class="col-md-6 col-lg-7 col-sm-12 my-auto">
                           <span id="8char" class="fa fa-remove" style="color:#FF0004;"></span> Min. 8 Characters Long<br>
                           <span id="ucase" class="fa fa-remove" style="color:#FF0004;"></span> One Uppercase Letter<br>
                           <span id="lcase" class="fa fa-remove" style="color:#FF0004;"></span> One Lowercase Letter<br>
                           <span id="num" class="fa fa-remove" style="color:#FF0004;"></span> One Number
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row mt-3 ps-5">
                  <div class="col-md-4 col-lg-3 col-sm-12 my-auto">
                     <label for="validationCustom02" class="form-label required" style="font-weight:bold">Confirm Password</label>
                  </div>
                  <div class="col-md-6 col-lg-7 col-sm-12">
                     <input type="password" class="form-control" name="confirm_password" id="password2" placeholder="Repeat Password" autocomplete="off" required>
                     <div class="invalid-feedback">
                        Please provide a Password Confirmation.
                     </div>
                        <span class="text-danger">
                           <?= (isset($validation) && $validation->hasError('confirm_password')) ? $validation->getError('confirm_password'): ''?>
                        </span><br>
                     <div class="col-sm-12">
                        <span id="pwmatch" class="fa fa-remove" style="color:#FF0004;"></span> Passwords Match
                     </div>
                  </div>
               </div>
               <div class="col-md-10 col-lg-10 col-sm-10 float-end pe-5">
               <br>
                  <button class="btn btn-primary float-end px-4 py-2" name = "save_password" type="submit" style="font-weight:500; border-radius: 18px; font-size: 1rem;">
                     <span class="fa fa-edit" aria-hidden="true"></span>
                     Update Password
                  </button>
               </div>
            </form><br>
            </div>
         </div>
      </div>
   </div>
    
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
   <script>
      if(<?= session()->has('success');?>)Swal.fire({
         icon: 'success',
         title: 'Your password updated successfully!',
         showConfirmButton: false,
         timer: 2000
      })
   </script> 
<?= $this->endSection(); ?>



