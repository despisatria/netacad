<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected $table = "files";
    protected $fillable  = [
        'nama',
        'lokasi',
        'user_id'
    ];
}
