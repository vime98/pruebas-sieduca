let role_locals = {
    selected: '',
    table: 'table-roles'
};

let role_actions = {
    getRoles: function(){
        core.api({
            url: 'api/v1/roles',
            dataType: 'json',
            type: 'get',
            done: function(data){
                utils.initTable(role_locals.table, data.success, [
                    { data: 'name' },
                    { data: null, 
                        render: function(data, type, row){
                            return `<a href="role/edit/${row.id}" title="editar rol" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white;"></i></a><a href="#" title="eliminar usuario" onclick="role_actions.confirmDelete('${row.id}')" class="btn btn-danger m-1"><i class="fa fa-trash" style="color: white;"></i></a>`
                        }
                    }
                ]);
            }
        });
    },
    confirmDelete: function(id){
        role_locals.selected = id;
        $('#modal-role-delete').modal('show');
    },
    deleteRole: function(){
        core.api({
            url: `api/v1/role/${role_locals.selected}`,
            dataType: 'json',
            type: 'delete',
            done: function(data){
                $('#modal-role-delete').modal('hide');
                role_actions.getRoles();
                role_locals.selected = '';
            }
        });
    }
};

$(document).ready(function(){
    role_actions.getRoles();
    $('#role-confirm-delete').click(function(){
        role_actions.deleteRole();
    });
});