<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    protected $table = "role";
    protected $primaryKey = 'id_role';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_role',
        'nama_role'
    ];
}
