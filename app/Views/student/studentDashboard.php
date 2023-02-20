<?= $this->extend("layout/student_layout"); ?>

<?= $this->section("page-title"); ?>
  Dashboard
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>  
         
    <h1>Supp Bitches!</h1>


<script src="<?= base_url('js/sweetalert2.all.min.js') ?>"></script>
<script>
if(<?= session()->has('success');?>)Swal.fire({
   icon: 'success',
   title: 'Login Success!',
   text: 'Successfully logged in!'
 })
</script>
<?= $this->endSection(); ?>
