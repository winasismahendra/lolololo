<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'berita';
    public $timestamps = false;
    protected $primaryKey = 'id_berita';
}
