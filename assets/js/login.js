$('#btn_reg').click(function(){
    $.ajax({
        url: 'router/router.php?ind=register',
        data: $('#form_register').serialize(),
        type: 'POST',
        success:function(result){
            if (result == 'error') {
                $('#alert-register').html('<div class="alert alert-danger text-center">EMAIL is already exist.</div>');
                $('name_register').val('');
                $('email_register').val('');
                $('password_register').val('');
            } else {
                $('#alert-register').html('<div class="alert alert-success text-center">REGISTER SUCCESSFULLY.</div>');
                $('name_register').val('');
                $('email_register').val('');
                $('password_register').val('');
            }
        }
    })
})
$('#btn_log').click(function(){
    $.ajax({
        url: 'router/router.php?ind=login',
        data: $('#form_login').serialize(),
        type: 'POST',
        success:function(result){
            if (result == 'error') {
                $('#alert-login').html('<div class="alert alert-danger text-center">Incorrect EMAIL or PASSWORD.</div>');
                $('email_login').val('');
                $('password_login').val('');
            } else {
                window.location.href= "chatroom.php";
            }
        }
    })
})