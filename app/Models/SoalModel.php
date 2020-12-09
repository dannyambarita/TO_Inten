<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoalModel extends Model
{
    protected $table = "soal";
    protected $primaryKey = 'id_soal';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_soal',
        'id_section',
        'urutan_soal',
        'isi_soal',
        'bobot'
    ];
}
