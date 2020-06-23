let user_locals = {
    selected: '',
    table: 'table-users'
};

let user_actions = {
    getUsers: function(){
        core.api({
            url: 'api/v1/users',
            dataType: 'json',
            type: 'get',
            done: function(data){
                utils.initTable(user_locals.table, data.success, [
                    { data: 'name' },
                    { data: 'username' },
                    { data: 'email' },
                    { data: 'concatRol'},
                    { data: null, 
                        render: function(data, type, row){
                            return `<a href="user/roles/${row.id}" title="gestionar roles" class="btn btn-success m-1"><i class="fa fa-users" style="color: white;"></i></a><a href="user/edit/${row.id}" title="editar usuario" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white;"></i></a><a href="#" title="eliminar usuario" onclick="user_actions.confirmDelete('${row.id}')" class="btn btn-danger m-1"><i class="fa fa-trash" style="color: white;"></i></a>`
                        }
                    }
                ]);
            }
        });
    },
    confirmDelete: function(id){
        user_locals.selected = id;
        $('#modal-user-delete').modal('show');
    },
    deleteUser: function(){
        core.api({
            url: `api/v1/user/${user_locals.selected}`,
            dataType: 'json',
            type: 'delete',
            done: function(data){
                $('#modal-user-delete').modal('hide');
                user_actions.getUsers();
                user_locals.selected = '';
            }
        });
    }
};

$(document).ready(function(){
    user_actions.getUsers();
    $('#user-confirm-delete').click(function(){
        if(user_locals.selected){
            user_actions.deleteUser();
        }
    });
});