<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // nama tabel
    protected $table = 'company_profile';

    // primary key custom
    protected $primaryKey = 'id_company';

    // auto increment
    public $incrementing = true;

    // tipe primary key
    protected $keyType = 'int';

    public $timestamps = false;

    // kolom yang boleh diisi
    protected $fillable = [
        'company_name',
        'company_description',
        'image_company',
        'image_peserta1',
        'image_peserta2',
        'image_peserta3',
        'image_peserta4',
    ];
}
