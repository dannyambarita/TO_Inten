<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question1Model extends Model
{
    protected $table = "question_attempt1";
    protected $primaryKey = 'id_question_attempt';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_question_attempt',
        'id_user',
        'id_pilihan_jawaban',
        'id_tryout',
        'waktu_pengerjaan'
    ];
}
