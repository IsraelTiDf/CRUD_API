<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class  Projeto extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tb_projeto_teste';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_projeto';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    // public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pronac',
        'ano_projeto',
        'nome',
        'segmento',
        'area',
        'uf',
        'municipio',
        'data_inicio',
        'data_termino',
        'situacao',
        'mecanismo',
        'enquadramento',
        'valor_captado',
        'valor_aprovado',
        'acessibilidade',
        'objetivos',
        'justificativa',
        'etapa',
        'ficha_tecnica',
        'impacto_ambiental',
        'especificacao_tecnica',
        'providencia',
        'democratizacao',
        'sinopse',
        'resumo',
        'valor_projeto',
        'outras_fontes',
        'valor_proposta',
        'valor_solicitado',
        'objetivo',
        'estrategia_execucao',
        'link_incentivadores',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s',
    ];

    protected $dates = ['deleted_at'];

}




