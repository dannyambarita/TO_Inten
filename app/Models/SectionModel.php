<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionModel extends Model
{
    protected $table = "section";
    protected $primaryKey = 'id_section';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_section',
        'nama_section',
        'batas_waktu',
        'urutan_section',
        'id_tryout'
    ];
}
