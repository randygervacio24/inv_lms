<?= $this->extend("layout/admin_login_layout"); ?>
<?= $this->section("content"); ?>
   <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
         <main>
            <div class="container mt-5 "><br><br>
               <div class="row justify-content-center">
                  <div class="col-lg-5">
                     <div class="card-login shadow-lg border-0 rounded-lg mt-5 bg-light">
                        <div class="card-header">
                           <center><img src="img/logo.png" class="img-fluid w-25 my-4"></center>
                           <h4 class="text-center my-0" style="font-weight:bold;">Library Management System</h4>
                        </div>
                        <div class="card-body">
                           <?php if(session()->get('success')): ?>
                              <div class="alert alert-success text-center" role="alert">
                                 <?= session()->get('success') ?>
                              </div>
                           <?php endif; ?>
                           <?php if(session()->get('error')): ?>
                              <div class="alert alert-danger text-center" role="alert">
                                 <?= session()->get('error') ?>
                              </div>
                           <?php endif; ?>
                           <form action="<?= base_url('/check')?>" method="post">
                           <label class="input-label">Email Address</label>
                              <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="frm-icon-login"><i class="fas fa-user"></i></span>
                                 </div>
                                 <input type="text" class="form-control" id="formMember" placeholder="e.g. sample@gmail.com" name="email" aria-label="email" value="<?= set_value('email') ?>" aria-describedby="basic-addon1">
                              </div>
                              <span class="text-danger">
                                 <?= (isset($validation) && $validation->hasError('email')) ? $validation->getError('email'): ''?>
                              </span><br>
                              <label class="input-label">Password</label>
                              <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="frm-icon-login"><i class="fas fa-unlock-alt"></i></span>
                                 </div>
                                 <input type="password" class="form-control" id="frmPassword" placeholder="********" name="password" value="<?= set_value('password') ?>" aria-label="password" aria-describedby="basic-addon1">
                                 <div class="input-group-prepend" id="showPassHolder">
                                    <span class="input-group-text" id="showPass"><a onclick="showPassword()"><i class="fas fa-eye" id="showPassIcon"></i></a></span>
                                 </div>
                              </div>
                              <span class="text-danger">
                                 <?= (isset($validation) && $validation->hasError('password')) ? $validation->getError('password'): ''?>
                              </span><br>
                              <div class="form-row">
                              </div>
                              <button type="submit" id="btnSignIn" class="btn btn-primary w-100 font-weight-bold"><i class="fas fa-sign-in-alt"></i> Log In</button>
                           </form>
                        </div>
                        <div class="card-footer text-center py-3">
                           <div class="small">Need an account?<a href="/studentRegister"> Sign up!</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
   </div>
<style>
   .btn-primary {
  color: #fff;
  background-color: maroon;
  border-color: maroon;
}

</style>
<?= $this->endSection(); ?> 



