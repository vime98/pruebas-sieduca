<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

use App\Traits\GenerateUuid;

class Role extends Model
{
    use GenerateUuid;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['name'];

    // protected $hidden = ['webapp_id', 'pivot', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];
}
