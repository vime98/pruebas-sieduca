
let login_actions = {
    attemptLogin(){
        $.ajax({
            url: 'api/v1/login',
            type: 'post',
            dataType: 'json',
            data: {
                username: $('#username').val(),
                password: $('#password').val()
            }
        }).done(function(data){
            localStorage.setItem('token', data.success.token);
            location.replace("/home");
        }).fail(function(data){
            toastr.error(data.responseJSON.error);
        });
    }
};
$(document).ready(function(){
    $('#btn-login').click(function(e){
        e.preventDefault();
        if($('#login-form').valid()){
            login_actions.attemptLogin();
        }   
    });

    utils.initValidation({
        form: 'login-form',
        rules: {
            username: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            username: {
                required: "Proporciona tu nombre de usuario",
            },
            password: {
                required: "Proporciona un password",
            }
        }
    });
});