<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productions extends Model
{
    protected $table = "production";
    protected $fillable =   ["name","id_type","description","total","weight","image"];

    public function tipe()
    {
        return $this->belongsTo(Type::class, 'id_type');
    }
}


