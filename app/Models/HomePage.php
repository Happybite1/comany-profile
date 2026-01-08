<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $fillable = [
    'hero_title',
    'hero_subtitle',
    'hero_image',
    'youtube_title_1',
    'youtube_link_1',
    'youtube_title_2',
    'youtube_link_2',
    'participant_image_1',
    'participant_image_2',
    'participant_image_3',
    'participant_image_4',
    'participant_image_5',
    'participant_image_6',
    'participant_image_7',
    'logo_image',
    'nama_logo',
];
    protected $table = 'home_pages';
    protected $primaryKey = 'id_home';
    public $timestamps = false;
}
