<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable  = [
        'nama',
        'lokasi',
        'user_id'
    ];
}
