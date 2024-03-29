<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="<?php echo base_url('assets/dist')?>/img/icon.ico" type="image/x-icon"/>

  <!-- Fonts and icons -->
  <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {"families":["Open+Sans:300,400,600,700"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['<?php echo base_url('assets/dist')?>/css/fonts.css']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>
  
  <!-- CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/azzara.min.css">
</head>
<body class="login">
  <div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn">
      <div class="text-center">
      <img src="<?php echo base_url('assets/dist')?>/img/zb.jpeg" width=75 height=75>
       <h3 class="text-center">PT Zein Baheera</h3>
      <h3 class="text-center">Sign In To Admin</h3>
    </div>
      <div class="login-form">
        <div class="form-group form-floating-label">
          <form action="<?php echo base_url('Login/validasi_admin'); ?>" method="post">
          <input id="nama" name="nama" type="text" class="form-control input-border-bottom" required>
          <label for="nama" class="placeholder">Username</label>
        </div>
        <div class="form-group form-floating-label">
          <input id="password" name="password" type="password" class="form-control input-border-bottom" required>
          <label for="password" class="placeholder">Password</label>
          <div class="show-password">
            <i class="flaticon-interface"></i>
          </div>
        </div>

        <div class="form-action mb-3">
          <button type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button>
        </form>
        </div>

      </div>
    </div>

  </div>
  <script src="<?php echo base_url('assets/dist')?>/js/core/jquery.3.2.1.min.js"></script>
  <script src="<?php echo base_url('assets/dist')?>/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="<?php echo base_url('assets/dist')?>/js/core/popper.min.js"></script>
  <script src="<?php echo base_url('assets/dist')?>/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/dist')?>/js/ready.js"></script>
</body>
</html>