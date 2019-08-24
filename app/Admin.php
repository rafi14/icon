<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin";
    protected $guarded = [];

    public function myrole()
    {
        return $this->belongsTo(Type::class, 'id_role');
    }
}
