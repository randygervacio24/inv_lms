<?= $this->extend("layout/student_register_layout"); ?>
<?= $this->section("content");?>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card-register shadow-lg mt-4 bg-light"  >
                                <div class="card-header">
                                    <center><img src="img/logo.png" class="img-fluid w-25 my-3"> </center>
                                    <h4 class="text-center my-0" style="font-weight:bold;">Library Management System</h4>
                                </div>
                                <div class="card-body">
                                <?php if(session()->get('error')): ?>
                                    <div class="alert alert-danger text-center" role="alert">
                                        <?= session()->get('error') ?>
                                    </div>
                                <?php endif; ?>
                                    <form action="/studentRegister" method="post">
                                        <label class="input-label">Student Number<span class="required-field"></span> </label><br>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="form-icon"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="form-input" placeholder="2023-0001-LSM" name="studentId" value="<?= set_value('studentId') ?>">
                                        </div>
                                        <span class="text-danger">
                                            <?= (isset($validation) && $validation->hasError('studentId')) ? $validation->getError('studentId'): ''?>
                                        </span><br>
                                        <label class="input-label">First Name<span class="required-field"></span> </label><br>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="form-icon"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="form-input" placeholder="e.g. Joe" name="firstname" value="<?= set_value('firstname') ?>">
                                        </div>
                                        <span class="text-danger">
                                            <?= (isset($validation) && $validation->hasError('firstname')) ? $validation->getError('firstname'): ''?>
                                        </span><br>
                                        <label class="input-label">Last Name<span class="required-field"></span> </label><br>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="form-icon"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="form-input" placeholder="e.g. Mendoza" name="lastname" value="<?= set_value('lastname') ?>">
                                        </div>
                                        <span class="text-danger">
                                            <?= (isset($validation) && $validation->hasError('lastname')) ? $validation->getError('lastname'): ''?>
                                        </span><br>
                                        <label class="input-label">Suffix Name</label><br>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="form-icon"><i class="fas fa-user"></i></span>
                                            </div>
                                            <select class="form-control" name = "suffixName" id="form-input" value="<?= set_value('suffixName')?>">
                                              <option selected disabled value="">Choose Suffix Name</option>
                                              <option value="Jr.">Jr.</option>
                                              <option value="Sr.">Sr.</option>
                                              <option value="II">II</option>
                                              <option value="III">III</option>
                                              <option value="IV">IV</option>
                                              <option value="None">None</option>
                                          </select>
                                        <span class="text-danger">
                                            <?= (isset($validation) && $validation->hasError('suffixName')) ? $validation->getError('suffixName'): ''?>
                                        </span><br>
                                        </div>
                                        <label class="input-label">Email Address<span class="required-field"></span> </label><br>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="form-icon"><i class="fa-solid fa-at"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="form-input" placeholder="e.g. sample@gmail.com" name="email" value="<?= set_value('email') ?>">
                                        </div>
                                        <span class="text-danger">
                                            <?= (isset($validation) && $validation->hasError('email')) ? $validation->getError('email'): ''?>
                                        </span><br>
                                        <button type="submit" id="btnSignIn" class="btn btn-primary w-100 font-weight-bold"><i class="fas fa-sign-in-alt"></i> Register</button>
                                    </form>
                                    </div>
                                        <div class="card-footer text-center py-3">
                                        <div class="small">Already have an Account?<a href="/studentLogin"> Sign In!</a></div>
                                    </div>
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

<script>
// Get the contact input element
const contactInput = document.getElementById('form-input-no');

// Add an event listener to the input to validate the user input
contactInput.addEventListener('input', function() {
  // Remove any non-numeric characters from the input
  const numericValue = this.value.replace(/\D/g, '');
  
  // Check if the input is longer than 11 digits, and if so, truncate it to 11 digits
  if (numericValue.length > 11) {
    this.value = numericValue.slice(0, 11);
  }
});

// Add a keypress event listener to the input to limit the input to numeric characters only
function validateNumber(event) {
  const keyCode = event.keyCode || event.which;
  const keyValue = String.fromCharCode(keyCode);
  const isNumeric = /^[0-9]*$/.test(keyValue);
  if (!isNumeric) {
    event.preventDefault();
  }
}
    </script>
<?= $this->endSection();?>
