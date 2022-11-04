<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class teachers extends Authenticatable
{
    use HasFactory;
    protected $table='professor';
    protected $fillable=[
        'nome',
        'sobrenome',
        'email',
        'password',
        'disciplina',
        'acesso'
    ];
}
