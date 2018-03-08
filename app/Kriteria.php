<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'kd_kriteria', 'nama'
    ];
    protected $table = 'kriteria';
}
