
<!-- register user -->
<?php
  // start session
  session_start();

  // data form for registration
  $email = '';
  $password = '';
  $errors = array();

  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'cloudinovasi');

  // connect to dbms
  $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    if($db === false){
  }

  //register user
  if(isset($_POST['reg_submit'])){
    // get id of element
    $email = mysqli_real_escape_string($db, $_POST['reg_email']);
    $password_init = mysqli_real_escape_string($db, $_POST['reg_password']);
    $password_confirm = mysqli_real_escape_string($db, $_POST['reg_password2']);

    if(empty($email)){
      array_push($errors, 'Email is required');
      // echo "<script>alert('Password is required');</script>";
    }
    if(empty($password_init)){
      array_push($errors, 'Password is required');
      // echo "<script>alert('Password is required');</script>";
    }

    if($password_init != $password_confirm){
      array_push($errors, 'The two password does not match');
      // echo "<script>alert('password tidak sama');</script>";
    }
    // form validation
    $user_check = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($db, $user_check);
    $user = mysqli_fetch_assoc($result);

    if($user){
      if($user['email'] === $email){
       array_push($errors, 'email already exits !');
        echo "<script>alert('email already exists !');</script>";
      }
    }

    if(count($errors) == 0){
      $password = md5($password_init);
      $query = "INSERT INTO user (email, password) VALUES('$email', '$password')";
      mysqli_query($db, $query);
      $_SESSION['email'] = $email;
      $_SESSION['success'] = 'Youre now logged in';
      echo "<script>alert('Register success')</script>";
      echo "<script>setTimeOut(function(){}, 1000)</script>";
      header("location: login.php");
    }
  }
?>

<!-- login a-->
<?php 
  if(isset($_POST['login_submit'])){
    $login_email = mysqli_real_escape_string($db, $_POST['login_email']);
    $login_password = mysqli_real_escape_string($db, $_POST['login_password']);

    if(empty($login_email)){
      array_push($errors, "Username is required");
      // echo "<script>alert('Email is required');</script>";
    }
    if(empty($login_password)){
      array_push($errors, "Password is required");
      // echo "<script>alert('Password is required');</script>";
    }

    if(count($errors) == 0){
      $password_for_login = md5($login_password);
      $query_for_login = "SELECT * FROM user where email = '$login_email' AND password = '$password_for_login' ";
      // echo "'$login_email' + '$password_for_login'";
      $result_for_login = mysqli_query($db, $query_for_login);
      if(mysqli_num_rows($result_for_login) == 1){
        $_SESSION['email'] = $login_email;
        $_SESSION['success'] = 'Youre now logged in';
        header("location: views/admin/index.php"); // direct after login
      }else{
        array_push($errors, "Wrong username/password combination");
        // echo "<script>alert('Wrong username/ password combination')</script>"; 
      }
    }


  }
?>  