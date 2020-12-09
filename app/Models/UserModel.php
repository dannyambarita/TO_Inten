<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = 'id_user';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'nama_lengkap',
        'nomor_telepon',
        'email',
        'password'
    ];
}
