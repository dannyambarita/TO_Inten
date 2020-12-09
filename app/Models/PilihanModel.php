<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PilihanModel extends Model
{
    protected $table = "pilihan_jawaban";
    protected $primaryKey = 'id_pilihan_jawaban';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_pilihan_jawaban',
        'id_soal',
        'isi_pilihan_jawaban',
        'nilai'
    ];
}
