<?php

namespace App\Traits;

use Ramsey\Uuid\Uuid;

trait GenerateUuid {
    public static function boot(){
        parent::boot();

        static::creating(function($model){
            $model->{ $model->getKeyName() } = Uuid::uuid1();
        });
    }
}