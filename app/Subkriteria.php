<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkriteria extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'kd_subkriteria', 'nama'
    ];
    protected $table = 'subkriteria';
}
