<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

use App\Traits\GenerateUUid;

class RoleUser extends Model
{
    use GenerateUuid;

    public $table = 'role_user';

    public $incrementing = 'false';

    protected $keyType = 'string';

    protected $fillable = ['role_id', 'user_id'];

    protected $hidden = ['role_id', 'user_id', 'created_at', 'updated_at'];


    public function role(){
        return $this->belongsTo('App\Models\Core\Role', 'role_id', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
