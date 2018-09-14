$(document).ready(function(){
  let menu_home = $('#menu_list_home');
  let menu_plans = $('#menu_list_plans');
  let menu_blog = $('#menu_list_blog');
  let menu_faq = $('#menu_list_faq');
  let menu_partners = $('#menu_list_partner');
  let login = $('#login');
  let register = $('#go_register');
  let docs = $('#docs');

  menu_home.on('click', function(){
    window.location.href= "index.php"
  });

  menu_faq.on('click', function(){
    window.location.href = "faq.php";
  });

  menu_blog.on('click', function(){
    window.location.href = "blog.php";
  });

  menu_plans.on('click', function(){
    window.location.href = "plans.php"
  });
  
  menu_partners.on('click', function(){
    window.location.href = "partners.php";
  });

  login.on('click', function(){
    window.location.href = "login.php";
  });

  register.on('click', function(e){
      console.log('login here : ' + e.data);
      window.location.href = "index.php";
  });

  docs.on('click', function(){
      console.log('docs here');
      window.location.href = "docs.php";
  });

});


function validateEmail(p_email){
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(p_email).toLowerCase());
}

function validatePassword(p_password){
  typeof p_password !== String ? p_password = p_password.toString() : p_password;
  if(p_password.length < 7){
    return;
  }
}
