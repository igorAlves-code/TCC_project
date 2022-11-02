<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agendamento extends Model
{
    use HasFactory;

   static $rules=[
    'title',
    'userId',
    'data',
    'recurso',
    'ambiente',
    'retirada',
    'devolucao',
    'start',
    'end'
   ];

    protected $fillable=[
        'title',
        'userId',
        'data',
        'recurso',
        'ambiente',
        'retirada',
        'devolucao',
        'start',
        'end'
    ];
}
