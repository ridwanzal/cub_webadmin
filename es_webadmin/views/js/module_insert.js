$('#input_user').on('click', function(){
    alert('test');
    var name = $('#name').val();
    var username = $('#username').val();
    var password = $('#password').val();
    var tlpn = $('#tlpn').val();
    var email = $('#email').val();
    var alamat = $('#alamat').val();
    var status  = $('#status').val();
    alert(name)
    var data = 'name=' + name + '&username=' + username + '&password=' + password + '&tlpn=' + tlpn + '&email=' + email + '&alamat=' + alamat + '&status=' + status;
    
    $.ajax({
        type : 'POST',
        url : '../../model/module_insert.php',
        data : data,
        success : function(){

        }
    })
})