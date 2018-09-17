<?php require('model/server.php'); ?>
<?php require('model/error.php'); ?>
<?php
  echo '
    <section>
      <div class="wrapper-flex-landing-container">
        <div class="main-info flex-container-list1" >
          <h1 class="main-info-captionbig">Manage UCC as Administrator</h1>
          <h3 class="main-info-caption1">Manage, view report, and do anything with CUB webadmin
          </h3>
        </div>  
        <div class="main-info-two flex-container-list1">
          <form method="post" action="index.php">
              <div class="reg_form_container">
                <p class="reg_data_info">Sign Up to CUB webadmin.</p>
                <form>  
                <input type="text" name="reg_email" class="reg_input" id="reg_email_address" placeholder="Email Address"><br/>
                <input type="password" name="reg_password" class="reg_input" id="reg_user_pass" placeholder="Password">
                <input type="password" name="reg_password2" class="reg_input" id="reg_user_pass2" placeholder="Confirm Password">
                <input type="submit" class="reg_submit button_green" value="Create Account" name="reg_submit">
                </form>
                <p class="reg_data_info_bottom">By signing up you agree to the <span class="link">Terms of Service.</span>
              </div>
            </form>
        </div>
        <div>
          <input type="button" value="Learn More" class="main-learnmore" id="main-learnmoreid">
        </div>
      </div>
    </section>';
?>