<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Log in to Admin Panel | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo base_url() ?>Login_controller/check" method="post" >
              <h1>Login Form</h1>
              <?php if(isset($_SESSION)) {?>
                 <div class="alert alert-<?php echo $this->session->flashdata('type'); ?>" id="success-alert">
                  <?php echo $this->session->flashdata('flash_data'); ?>
                 </div>
        
                  <?php } ?>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required />
              </div>
              <div>
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                <input style=" margin-left: 0px;" type="submit" name="submit" value="Log in" class="btn btn-default submit">
                <input style="margin-right: 140px;" type="reset" value="Reset" class="btn btn-default submit">
                <a class="reset_pass" href="#"></a>
              </div>

              <div class="clearfix"></div>
              <div class="separator">
                

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Jobs Berendina!</h1>
                  <p>©2017 All Rights Reserved. Berendina Employment Sector. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
    <script src="<?php echo base_url() ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>

      $(document).ready(function() {
      $("#success-alert").fadeTo(4000, 500).slideUp(500, function(){
      $("#success-alert").slideUp(500);
      });
    });
    
    </script>
  </body>
</html>
