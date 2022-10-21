<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipments extends Model
{
    use HasFactory;
    protected $table='equipamento';
    protected $fillable=[
        'nomeEquipamento',
        'tipoEquipamento',
        'quantidadeEquipamento'
    ];
}
