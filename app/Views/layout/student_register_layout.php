<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Registration - LMS</title>
      <!--<link rel="icon" type="image/png" href="<?= base_url('img/bwc.png') ?>">-->
      <link href="css/styles.css" rel="stylesheet" />
      <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

      <style type="text/css">
         body{
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-weight: bold;
            background: url('img/book.jpg') top center;
            background-repeat: cover;
            backdrop-filter: blur(10px);
         }
         .card-register{
            border-radius: 20px;
            opacity: 0.9;

         }
         .login-body-slide{
            margin-top: 50px;
            width: 100%;
            border-radius: 15px;
         }

         .login-body-form{
            margin-top: 100px;
         }

         #login-card-body, #login-card-copyright, #login-slide-main{
            border-radius: 15px;
         }

         #navbar-opacity{
            opacity: 0.8;
         }

         #form-input{
         border-top-right-radius: 10px;
         border-bottom-right-radius: 10px;
         }

         #showPass {
         background-color: #fff;
         border-left: none;
         border-top-right-radius: 10px;
         border-bottom-right-radius: 10px;
         height: 40px;
         }

         #frmPassword{
         border-right: none;
         }

         #form-icon{
         background-color: #ffffff;
         border-top-left-radius: 10px;
         border-bottom-left-radius: 10px;
         height: 40px;
         }

         #btnSignIn{
         border-top-right-radius: 10px;
         border-bottom-right-radius: 10px;
         border-top-left-radius: 10px;
         border-bottom-left-radius: 10px;
         }

         #btnGuest{
         border-top-right-radius: 10px;
         border-bottom-right-radius: 10px;
         border-top-left-radius: 10px;
         border-bottom-left-radius: 10px;
         }

         .required-field::after {
         content: "*";
         color: red;
         margin-left:5px
         }

      </style>
   </head>
   <body>

      <!-- MAIN CONTENT -->
      <section class="content">
         <?= $this->renderSection("content"); ?>
      </section>
      <!-- /.MAIN CONTENT -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="js/scripts.js"></script>
   </body>
   <!---- Numbers Only ---->
<script>
   function validateNumber(e) {
      const pattern = /^[0-9]$/;

      return pattern.test(e.key )
   }
</script>
   <script>
      function showPassword(){
         var frm = document.getElementById('frmPassword');
         var txtHolder = document.getElementById('showPassIcon');

         if(frm.type === "password"){
            frm.type = "text";
            txtHolder.className = "fas fa-eye-slash";
         }else{
            frm.type = "password";
            txtHolder.className = "fas fa-eye";
         }
      }
      $('.your-checkbox').prop('indeterminate', true)
   </script>

<script>
      function showConfirmPassword(){
         var frm = document.getElementById('formPassword');
         var txtHolder = document.getElementById('showPassIcon');

         if(frm.type === "password"){
            frm.type = "text";
            txtHolder.className = "fas fa-eye-slash";
         }else{
            frm.type = "password";
            txtHolder.className = "fas fa-eye";
         }
      }
      $('.your-checkbox').prop('indeterminate', true)
   </script>
</html>
