<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class constructions extends Model
{
    protected $guarded = [];

    protected $table = 'constructions';
    protected $fillable = [
        'nome', 
        'data_de_finalizacao',
        'andamento_da_obra', 
        'solicitacao_de_materiais', 
        'relatorio_da_obra'
    ];
}