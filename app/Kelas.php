<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = "kelas";
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Type::class, 'id_production');
    }
}
