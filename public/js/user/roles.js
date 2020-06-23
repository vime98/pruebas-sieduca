let roles_user_locals = {
    selected: '',
    table: 'assigned-roles-table'
};

let roles_user_actions = {
    getAssignedRoles: function(){
        let user_at_roles = $('#user-at-roles').val();
        core.api({
            url: `/api/v1/assigned-roles/${user_at_roles}`,
            dataType: 'json',
            type: 'get',
            done: function(data){
                utils.initTable(roles_user_locals.table, data.success, [
                    { data: 'role.name' },
                    { data: null, 
                        render: function(data, type, row){
                            return `<a href="#" title="remover rol" onclick="roles_user_actions.removeRoleUser('${row.id}')" class="btn btn-danger m-1"><i class="fa fa-trash" style="color: white;"></i></a>`
                        }
                    }
                ]);
            }
        });
    },
    getRoles: function(){
        core.api({
            url: '/api/v1/roles',
            dataType: 'json',
            type: 'get',
            done: function(data){
                $('#slct-roles').append(new Option("Seleccione un rol", ""));
                $.each(data.success, function(i, obj){
                    $('#slct-roles').append(new Option(obj.name, obj.id));
                });
            }
        });
    },
    assignRole: function(user_id, role_id){
        if($('#slct-roles').val()){
            let role = {
                user_id: $('#user-at-roles').val(),
                role_id: $('#slct-roles').val()
            };
            core.api({
                url: `/api/v1/assign-role`,
                type: 'post',
                data: role,
                done: function(data){
                    toastr.success("El rol se ha asignado con éxito");
                    roles_user_actions.getAssignedRoles();
                    $('#slct-roles').val("");
                }
            });
        } else {
            toastr.error("Seleccione un rol para asignar");
        }
    },
    removeRoleUser: function(id){
        core.api({
            url: `/api/v1/remove-role/${id}`,
            type: 'delete',
            done: function(data){
                toastr.success("El rol se ha removido con éxito");
                roles_user_actions.getAssignedRoles();
            }
        })
    }
};

$(document).ready(function(){
    roles_user_actions.getAssignedRoles();
    roles_user_actions.getRoles();
    $('#assign-role-btn').click(function(){
        roles_user_actions.assignRole();
    });
});