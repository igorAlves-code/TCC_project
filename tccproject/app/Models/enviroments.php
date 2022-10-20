<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enviroments extends Model
{
    use HasFactory;
    protected $table='ambiente';
    protected $fillable=[
        'nomeAmbiente', 
        'tipoAmbiente', 
        'quantidadeAmbiente'
    ];
}
