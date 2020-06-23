let role_locals = {
    form: 'role-form'
};

let role_actions = {
    submitRole: function(){
       let data = $(`#${role_locals.form}`).serializeObject();
        core.api({
            url: data.id ? `/api/v1/role/${data.id}` : `/api/v1/role`,
            type: data.id ? 'put' : 'post',
            data: data,
            done: function(data){
                if(data.success){
                    toastr.success(data.success);
                    location.replace('/role');
                }
            }
        });
    }
};

$(document).ready(function(){
    utils.initValidation({
        form: role_locals.form,
        rules: {
            name: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Proporcione el nombre"
            }
        }
    });

    $("#btn-submit-role").on('click', function(e) {
        e.preventDefault();
        if ($("#role-form").valid()) {
            role_actions.submitRole();
        }
    });
});