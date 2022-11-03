<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class managements extends Authenticatable
{
    use HasFactory;
    protected $table='coordenador';
    protected $fillable=[
        'nome',
        'sobrenome',
        'email',
        'senha'
    ];
}
