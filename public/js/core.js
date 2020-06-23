
let core = {
    api: function(set){
        let token = localStorage.getItem('token');
        $.ajax({
            url: set.url,
            type: set.type,
            dataType: set.dataType,
            headers: { 'Authorization' : `Bearer ${token}` },
            data: set.data
        }).done(set.done).fail(function(data){
            if(data.responseJSON.error){
                toastr.error(data.responseJSON.error);
            } else {
                toastr.error(data.responseJSON.message);
                location.replace("/");  
            }
        });
    }
};