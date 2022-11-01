<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
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
