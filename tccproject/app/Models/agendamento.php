<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agendamento extends Model
{
    use HasFactory;

   static $rules=[
    'title',
    'recurso',
    'ambiente',
    'data',
    'retirada',
    'devolução',
    'start',
    'end'
   ];

    protected $fillable=[
        'title',
        'recurso',
        'ambiente',
        'data',
        'retirada',
        'devolução',
        'start',
        'end'
    ];
}
