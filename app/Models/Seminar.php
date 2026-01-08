<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $table = 'sm';
    protected $primaryKey = 'id_sm';

    public $timestamps = false;

    protected $fillable = [
        'product_name',
        'subheadline_description',
        'image_product',

        'judul_poin',
        'subheadline_poin',
        'poin',

        'judul_poin2',
        'subheadline_poin2',
        'poin_2',

        'image_lokasi',
        'nama_lokasi',
        'image_waktu',
        'tanggal_waktu',

        'materi',

        'penawaran',
        'harga_per_orang',
        'harga_dua_orang',
        'harga_di_tempat',
    ];

    /**
     * Cast JSON ke array otomatis
     */
    protected $casts = [
        'poin' => 'array',
        'poin_2' => 'array',
        'materi' => 'array',
    ];
}
