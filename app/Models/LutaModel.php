<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LutaModel extends Model
{
    protected $table = 'lutas';

    protected $fillable = [
        'nome_lutador',
        'nome_oponente',
        'modalidade',
        'categoria',
        'rounds',
        'bolsa',
        'data_luta',
        'local_evento',
        'resultado_previsto',
        'sobre_luta',
        'img',
    ];
}

