<?= $this->extend("layout/admin_register_layout"); ?>
<?= $this->section("content");?>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container mt-5"><br><br>
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card-register shadow-lg mt-4 bg-light"  >
                                <div class="card-header">
                                    <center><img src="img/logo.png" class="img-fluid w-25 my-3"> </center>
                                    <h4 class="text-center" style="font-weight: bold;">Library Management System</h4>
                                </div>
                                <div class="card-body">
                                    <form action="/register" method="post">
                                    <label class="input-label">First Name</label><br>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="form-icon"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="form-input" placeholder="e.g. Joe" name="firstname" value="<?= set_value('firstname') ?>">
                                        </div>
                                        <span class="text-danger">
                                            <?= (isset($validation) && $validation->hasError('firstname')) ? $validation->getError('firstname'): ''?>
                                        </span><br>
                                        <label class="input-label">Last Name</label><br>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="form-icon"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="form-input" placeholder="e.g. Mendoza" name="lastname" value="<?= set_value('lastname') ?>">
                                        </div>
                                        <span class="text-danger">
                                            <?= (isset($validation) && $validation->hasError('lastname')) ? $validation->getError('lastname'): ''?>
                                        </span><br>
                                        <label class="input-label">Email Address</label><br>
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
                                        <div class="small">Already have an Account?<a href="/"> Sign In!</a></div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Libary Management System</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
<?= $this->endSection();?>