<?php include('model/server.php'); ?>
<?php include('model/error.php'); ?>

<!DOCTYPE html>
<html>
</head>
  <title>Login | Cloud Inovasi</title>
</head>
<body>
<div class="login-wrapper">
  <form method="post" action="login.php">
    <div class="login_form_container">
    <img src="views/img/logo_gray.png" class="login" width="120">
    <p class="login_data_info">Sign In</p>
      <form class="form_ogin">
        <input type="text" name="login_email" id="login_input_email" class="login_input" placeholder="Email Address"><br/>
        <input type="password" name="login_password" id="login_input_pass" class="login_input" placeholder="Password"><br/>
        <input type="submit" name="login_submit" class="login_submit button_green" value="Login"><br/>
      </form>
      <p id="forgot_pass">Forgot Password ? </p>
      <p class="login_direct_register">Don't have an account ? <span id="go_register" class="link" title="Register now">Register</span> now</p>
    </div>
  </form>
</div>
  <?php include 'module_async.php' ?>
</body>