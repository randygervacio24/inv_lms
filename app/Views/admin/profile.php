<?= $this->extend("layout/user_account_layout"); ?>

<div class="col-lg-10">
<?= $this->section("page-title"); ?>
  	Update Profile
  
<?= $this->endSection(); ?></div>

<?= $this->section("breadcrumb"); ?>
   <li class="breadcrumb-item"><a href="/dashboard"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
   <li class="breadcrumb-item active">Update Profile</li>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>
	<div class="card mb-4 border-left-info shadow-lg card-lg mt-3" style="border-radius: 17px;">
		<div class="card-header" style="border-radius: 15px;">
			<div class="row">
				<div class="card-header-name col-12" style = "margin-left:2%;">
					<h5 style="font-weight:600; color: #1a4483;">My Profile</h5>
				</div>
			</div>
		</div>
		<div class="card-body">
			<!--<div class="d-flex justify-content-center">-->
				<div class="container-fluid mx-auto">
		<center><form class="row needs-validation" novalidate action="/profile" method="post">
						<div class="row mt-3 ps-5">
							<div class="col-md-4 col-lg-3 col-sm-12 my-auto">
								<label for="validationCustom02" class="form-label required" style="font-weight:bold">First Name</label>
							</div>
							<div class="col-md-6 col-lg-7 col-sm-12">	
								<input type="text" class="form-control" id="validationCustom02"  name = "firstname" value="<?= $admin['firstname'] ?>" required>
								<div class="invalid-feedback">
									Please provide a Name.
								</div>
							</div>
								<span class="text-danger text-center">
						<?= (isset($validation) && $validation->hasError('firstname')) ? $validation->getError('firstname'): ''?>
					</span>
						</div>
						<div class="row mt-3 ps-5">
							<div class="col-md-4 col-lg-3 col-sm-12 my-auto">
								<label for="validationCustom02" class="form-label required" style="font-weight:bold">Last Name</label>
							</div>
							<div class="col-md-6 col-lg-7 col-sm-12">
								<input type="text" class="form-control" id="validationCustom02"  name = "lastname" value="<?= $admin['lastname'] ?>" required>
								<div class="invalid-feedback">
									Please provide a Surname.
								</div>
							</div>
								<span class="text-danger text-center">
						<?= (isset($validation) && $validation->hasError('lastname')) ? $validation->getError('lastname'): ''?>
					</span>
						</div>
						<div class="row mt-3 ps-5">
							<div class="col-md-4 col-lg-3 col-sm-12 my-auto">
								<label for="validationCustom02" class="form-label required" style="font-weight:bold">Email/Username</label>
							</div>
							<div class="col-md-6 col-lg-7 col-sm-12">
								<input type="text" class="form-control" id="validationCustom02"  name = "email" value="<?= $admin['email'] ?>" required>
								<div class="invalid-feedback">
									Please provide an Email.
								</div>
							</div>
							<span class="text-danger text-center">
								<?= (isset($validation) && $validation->hasError('email')) ? $validation->getError('email'): ''?>
							</span><br>
						</div>
						<div class="col-md-10 col-lg-10 col-sm-10 float-end pe-5">
							<button class="btn btn-primary float-end px-4 py-2" name = "save_administrator" type="submit" style="font-weight:500; border-radius: 18px; font-size: 1rem;">
								<span class="fa fa-edit" aria-hidden="true"></span>
								Update Profile
							</button>
						</div>
					</form></center><br>
				</div>
			<!--</div>-->
		</div>
	</div>
		
	<script>
		if(<?= session()->has('success');?>)Swal.fire({
		icon: 'success',
		title: 'Your inputted data has been save!',
		showConfirmButton: false,
		timer: 2000
		})
	</script>
<?= $this->endSection(); ?>



