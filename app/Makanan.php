<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'kd_makanan', 'nama'
    ];
    protected $table = 'makanan';
}
