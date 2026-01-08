<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ws extends Model
{
    protected $table = 'ws';
    protected $primaryKey = 'id_ws';

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

        'total_benefit',
        'harga_normal',
        'harga_spesial',
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
