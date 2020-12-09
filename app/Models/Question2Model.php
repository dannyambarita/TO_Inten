<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question2Model extends Model
{
    protected $table = "question_attempt2";
    protected $primaryKey = 'id_question_attempt2';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_question_attempt2',
        'id_user',
        'id_tryout',
        'id_section',
        'nilai'
    ];
}
