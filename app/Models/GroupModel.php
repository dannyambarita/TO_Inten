<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupModel extends Model
{
    protected $table = "group";
    protected $primaryKey = 'id_group';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_group',
        'nama_group'
    ];
}
