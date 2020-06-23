let user_locals = {
    form: 'user-form'
};

let user_actions = {
    submitUser: function(){
       let data = $(`#${user_locals.form}`).serializeObject();
        core.api({
            url: data.id ? `/api/v1/user/${data.id}` : `/api/v1/user`,
            type: data.id ? 'put' : 'post',
            data: data,
            done: function(data){
                if(data.success){
                    toastr.success(data.success);
                    location.replace('/user');
                }
            }
        });
    }
};

$(document).ready(function(){
    utils.initValidation({
        form: user_locals.form,
        rules: {
            name: {
                required: true
            },
            username: {
                required: true
            },
            password: {
                required: true
            },
            email:  {
                required: true,
                email: true
            },
            cpassword: {
                equalTo: "#password"
            }
        },
        messages: {
            name: {
                required: "Proporciona tu nombre"
            },
            username: {
                required: "Proporciona tu nombre de usuario",
            },
            password: {
                required: "Proporciona un password",
            },
            cpassword: {
                equalTo: "El password debe coincidir"
            },
            email: {
                required: "Por favor introduzca un e-mail",
                email: "Por favor introduzca un é-mail válido"
            }
        }
    });

    $("#btn-submit-user").on('click', function(e) {
        e.preventDefault();
        if ($("#user-form").valid()) {
            user_actions.submitUser();
        }
    });
});