<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table = 'speakers';
    protected $primaryKey = 'id_speakers';

    protected $fillable = [
        'name',
        'position',
        'biography',
        'image'
    ];

    public $timestamps = false;
}
