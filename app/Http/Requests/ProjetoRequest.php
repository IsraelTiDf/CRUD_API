<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *      title="ProjetoRequest",
 *      description="Request schema for Project",
 *      type="object",
 *      required={"pronac", "ano_projeto", "nome", "segmento", "area", "uf", "municipio", "data_inicio", "data_termino", "situacao", "mecanismo", "enquadramento", "valor_captado", "valor_aprovado", "acessibilidade", "ficha_tecnica", "impacto_ambiental", "especificacao_tecnica", "democratizacao", "sinopse", "valor_projeto", "outras_fontes", "valor_proposta", "valor_solicitado", "objetivo", "estrategia_execucao", "link_incentivadores"}
 * )
 */
class ProjetoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @OA\Property(
     *      property="pronac",
     *      type="string",
     *      example="123456",
     *      description="Pronac do projeto"
     * )
     * @OA\Property(
     *      property="ano_projeto",
     *      type="string",
     *      example="2024",
     *      description="Ano do projeto"
     * )
     * @OA\Property(
     *      property="nome",
     *      type="string",
     *      example="Projeto X",
     *      description="Nome do projeto"
     * )
     * @OA\Property(
     *      property="segmento",
     *      type="string",
     *      example="Segmento X",
     *      description="Segmento do projeto"
     * )
     * @OA\Property(
     *      property="area",
     *      type="string",
     *      example="Área X",
     *      description="Área do projeto"
     * )
     * @OA\Property(
     *      property="uf",
     *      type="string",
     *      example="UF X",
     *      description="UF do projeto"
     * )
     * @OA\Property(
     *      property="municipio",
     *      type="string",
     *      example="Município X",
     *      description="Município do projeto"
     * )
     * @OA\Property(
     *      property="data_inicio",
     *      type="string",
     *      example="2024-01-01",
     *      description="Data de início do projeto"
     * )
     * @OA\Property(
     *      property="data_termino",
     *      type="string",
     *      example="2024-12-31",
     *      description="Data de término do projeto"
     * )
     * @OA\Property(
     *      property="situacao",
     *      type="string",
     *      example="Situação X",
     *      description="Situação do projeto"
     * )
     * @OA\Property(
     *      property="mecanismo",
     *      type="string",
     *      example="Mecanismo X",
     *      description="Mecanismo do projeto"
     * )
     * @OA\Property(
     *      property="enquadramento",
     *      type="string",
     *      example="Enquadramento X",
     *      description="Enquadramento do projeto"
     * )
     * @OA\Property(
     *      property="valor_captado",
     *      type="string",
     *      example="100000",
     *      description="Valor captado do projeto"
     * )
     * @OA\Property(
     *      property="valor_aprovado",
     *      type="string",
     *      example="100000",
     *      description="Valor aprovado do projeto"
     * )
     * @OA\Property(
     *      property="acessibilidade",
     *      type="string",
     *      example="Acessibilidade X",
     *      description="Acessibilidade do projeto"
     * )
     * @OA\Property(
     *      property="ficha_tecnica",
     *      type="string",
     *      example="Ficha Técnica X",
     *      description="Ficha Técnica do projeto"
     * )
     * @OA\Property(
     *      property="impacto_ambiental",
     *      type="string",
     *      example="Impacto Ambiental X",
     *      description="Impacto Ambiental do projeto"
     * )
     * @OA\Property(
     *      property="especificacao_tecnica",
     *      type="string",
     *      example="Especificação Técnica X",
     *      description="Especificação Técnica do projeto"
     * )
     * @OA\Property(
     *      property="democratizacao",
     *      type="string",
     *      example="Democratização X",
     *      description="Democratização do projeto"
     * )
     * @OA\Property(
     *      property="sinopse",
     *      type="string",
     *      example="Sinopse X",
     *      description="Sinopse do projeto"
     * )
     * @OA\Property(
     *      property="resumo",
     *      type="string",
     *      example="Resumo X",
     *      description="Resumo do projeto"
     * )
     * @OA\Property(
     *      property="valor_projeto",
     *      type="string",
     *      example="100000",
     *      description="Valor do projeto"
     * )
     * @OA\Property(
     *      property="outras_fontes",
     *      type="string",
     *      example="Outras Fontes X",
     *      description="Outras Fontes do projeto"
     * )
     * @OA\Property(
     *      property="valor_proposta",
     *      type="string",
     *      example="100000",
     *      description="Valor da proposta do projeto"
     * )
     * @OA\Property(
     *      property="valor_solicitado",
     *      type="string",
     *      example="100000",
     *      description="Valor solicitado do projeto"
     * )
     * @OA\Property(
     *      property="objetivo",
     *      type="string",
     *      example="Objetivo X",
     *      description="Objetivo do projeto"
     * )
     * @OA\Property(
     *      property="estrategia_execucao",
     *      type="string",
     *      example="Estratégia de Execução X",
     *      description="Estratégia de Execução do projeto"
     * )
     * @OA\Property(
     *      property="link_incentivadores",
     *      type="string",
     *      example="https://incentivadores.com/projeto-x",
     *      description="Link dos incentivadores do projeto"
     * )
     */
    public function rules(): array
    {
        return [
            'pronac' => 'required|string|max:191',
            'ano_projeto' => 'required|string|max:191',
            'nome' => 'required|string|max:191',
            'segmento' => 'required|string|max:191',
            'area' => 'required|string|max:191',
            'uf' => 'required|string|max:191',
            'municipio' => 'required|string|max:191',
            'data_inicio' => 'required|date_format:Y-m-d',
            'data_termino' => 'required|date_format:Y-m-d',
            'situacao' => 'required|string|max:191',
            'mecanismo' => 'required|string|max:191',
            'enquadramento' => 'required|string|max:191',
            'valor_captado' => 'required|string|max:191',
            'valor_aprovado' => 'required|string|max:191',
            'acessibilidade' => 'required|string',
            'ficha_tecnica' => 'required|string',
            'impacto_ambiental' => 'required|string',
            'especificacao_tecnica' => 'required|string',
            'democratizacao' => 'required|string',
            'sinopse' => 'required|string',
            'resumo' => 'nullable|string',
            'valor_projeto' => 'required|string|max:100',
            'outras_fontes' => 'required|string|max:100',
            'valor_proposta' => 'required|string|max:100',
            'valor_solicitado' => 'required|string|max:100',
            'objetivo' => 'required|string',
            'estrategia_execucao' => 'required|string',
            'link_incentivadores' => 'required|string|max:255|url',
        ];
    }
}
