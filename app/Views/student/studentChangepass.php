<?= $this->extend("layout/student_layout"); ?>

<?= $this->section("page-title"); ?>
   Student Change Password
<?= $this->endSection(); ?>

<?= $this->section("breadcrumb"); ?>
   <li class="breadcrumb-item"><a href="/studentDashboard"><i class="fa fa-home"></i>Home</a></li>
   <li class="breadcrumb-item active"> Student Password</li>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>
   <div class="card border-left-info mb-3 shadow-lg mt-3" style="border-radius: 15px;">
      <div class="card-body">
         <div class="d-flex justify-content-center">
            <div class="container mx-auto">
               <form class="" action="/studentChangepass" method="post" id="passwordForm">
                  <div class="row mt-3 ps-5">
                     <div class="col-md-4 col-lg-3 col-sm-12 mb-2">
                        <label for="password">New Password</label>
                     </div>
                     <div class="col-md-6 col-lg-7 col-sm-12">
                        <input type="password" class="form-control"  name="password" id="password1" placeholder="New Password" autocomplete="off" required>
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
                     <div class="col-md-4 col-lg-3 col-sm-12 mb-2">
                        <label for="password_confirm">Confirm Password</label>
                     </div>
                     <div class="col-md-6 col-lg-7 col-sm-12">
                        <input type="password" class="form-control" name="password_confirm" id="password2" placeholder="Repeat Password" autocomplete="off" required>
                        <span class="text-danger">
                           <?= (isset($validation) && $validation->hasError('password_confirm')) ? $validation->getError('password_confirm'): ''?>
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
               </form>
            </div>
         </div>
      </div>
   </div>
 <script src="<?= base_url('js/sweetalert2.all.min.js') ?>"></script>
<script>
    if(<?= session()->has('success');?>)Swal.fire({
  icon: 'success',
  title: 'Update Success!',
  text: 'Password Successfully Updated!'
})
</script>
<?= $this->endSection(); ?>