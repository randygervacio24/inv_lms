<?= $this->extend("layout/student_layout"); ?>

<?= $this->section("page-title"); ?>
   Student Profile
<?= $this->endSection(); ?>

<?= $this->section("breadcrumb"); ?>
   <li class="breadcrumb-item"><a href="/STUDENTDashboard"><i class="fa fa-home"></i>Home</a></li>
   <li class="breadcrumb-item active"> Student Profile</li>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>
   <div class="card mb-4">
      <div class="card-header ">
         <div class="row">
            <div class="card-header-name col-10">
               <h5 style="font-weight:bold; color: #1a4483;">Student's Information</h5>
            </div>
         </div>
      </div>
      <div class="card-body">
         <form class="row"   method = "POST" action="/studentProfile">
            <h4 style="color: #0000d5;">Personal Information</h4>
            <div class="row mt-3">
               <div class="col-md-4 col-lg-4 col-sm-12">
                  <label for="validationCustom02" class="form-label required" style="font-weight:bold">First Name<span class="required-field"></span> </label>
                  <input type="text" class="form-control" id="validationCustom02"  name = "firstname" placeholder="Juan" value="<?= $user['firstname'] ?>" required>
                  <div class="invalid-feedback">
                  Please provide an Name
                  </div>
                  <span class="text-danger">
                     <?= (isset($validation) && $validation->hasError('firstname')) ? $validation->getError('firstname'): ''?>
                  </span>
               </div>
               <div class="col-md-4 col-lg-4 col-sm-12">
                  <label for="validationCustom02" class="form-label required" style="font-weight:bold">Last Name<span class="required-field"></span></label>
                  <input type="text" class="form-control" id="validationCustom02"  name = "lastname" value="<?= $user['lastname'] ?>" placeholder="Dela Cruz" required>
                  <div class="invalid-feedback">
                     Please provide a Surname.
                  </div>
                  <span class="text-danger">
                     <?= (isset($validation) && $validation->hasError('lastname')) ? $validation->getError('lastname'): ''?>
                  </span>
               </div>
               <div class="col-md-4 col-lg-4 col-sm-12">
                  <label for="validationCustom02" class="form-label required" style="font-weight:bold">Suffix Name</label>
                  <select class="form-control" name = "suffixName" value="<?= $user['suffixName'] ?>" id="form-input">
                     <option selected disabled value="">Choose Suffix Name</option>
                     <option value="Jr.">Jr.</option>
                     <option value="Sr.">Sr.</option>
                     <option value="II">II</option>
                     <option value="III">III</option>
                     <option value="IV">IV</option>
                     <option value="None">None</option>
                  </select>
                  <div class="invalid-feedback">
                     Please provide a Suffix Name.
                  </div>
               </div>
            </div><br>
            <h4 style="color: #0000d5;">Account Information</h4>
            <div class="row mt-3">
               <div class="col-md-6 col-lg-6 col-sm-12">
                  <label for="validationCustom02" class="form-label required" style="font-weight:bold">Email Address<span class="required-field"></span></label>
                  <input type="text" class="form-control" id="validationCustom02"  name = "email" value="<?= $user['email'] ?>" placeholder="sample@gmail.com" required>
                  <div class="invalid-feedback">
                     Please provide a Email address.
                  </div>
                  <span class="text-danger">
                     <?= (isset($validation) && $validation->hasError('email')) ? $validation->getError('email'): ''?>
                  </span>
               </div>
               <div class="col-md-6 col-lg-6 col-sm-12">
                  <label for="validationCustom02" class="form-label required" style="font-weight:bold">Student ID<span class="required-field"></span></label>
                  <input type="text" class="form-control" id="validationCustom02"  name = "studentId" value="<?= $user['studentId'] ?>" readonly required>
               <div class="invalid-feedback">
                  Please provide a Email address.
               </div>
            </div>
            <div class="row">
               <div class="col-12 col-sm-4"><br>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
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


