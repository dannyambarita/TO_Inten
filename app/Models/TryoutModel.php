<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TryoutModel extends Model
{
    protected $table = "tryout";
    protected $primaryKey = 'id_tryout';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_tryout',
        'nama_tryout',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_akhir'
    ];
}
