<?php
// app/Services/ProjetoService.php

namespace App\Services;

use App\Interfaces\ProjetoServiceInterface;
use App\Models\Projeto;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;

class ProjetoService implements ProjetoServiceInterface
{

    public function listarProjetos(): JsonResponse
    {
        try {
            $projetos = Projeto::all();
            return response()->json(['projetos' => $projetos]);
        } catch (QueryException $e) {
            return response()->json(['mensagem' => 'Erro ao listar projetos: ' . $e->getMessage()], 500);
        }
    }

    public function encontrarProjetoPorId($id): JsonResponse
    {
        try {
            $projeto = Projeto::find($id);
            if (!$projeto) {
                return response()->json(['mensagem' => 'Projeto não encontrado'], 404);
            }
            return response()->json(['projeto' => $projeto]);
        } catch (QueryException $e) {
            return response()->json(['mensagem' => 'Erro ao encontrar projeto: ' . $e->getMessage()], 500);
        }
    }

    public function criarProjeto(array $dados): JsonResponse
    {
        try {
            $projeto = Projeto::create($dados);
            return response()->json(['projeto' => $projeto], 201); // 201 Created
        } catch (QueryException $e) {
            return response()->json(['mensagem' => 'Erro ao criar projeto: ' . $e->getMessage()], 500);
        }
    }

    public function atualizarProjeto(array $dados, $id): JsonResponse
    {
        try {
            $projeto = Projeto::find($id);
            if (!$projeto) {
                return response()->json(['mensagem' => 'Projeto não encontrado'], 404);
            }
            $projeto->update($dados);
            return response()->json(['projeto' => $projeto]);
        } catch (QueryException $e) {
            return response()->json(['mensagem' => 'Erro ao atualizar projeto: ' . $e->getMessage()], 500);
        }
    }

    public function excluirProjeto($id): JsonResponse
    {
        try {
            $projeto = Projeto::find($id);
            if (!$projeto) {
                return response()->json(['mensagem' => 'Projeto não encontrado'], 404);
            }
            $projeto->delete();
            return response()->json(['mensagem' => 'Projeto excluído com sucesso']);
        } catch (QueryException $e) {
            return response()->json(['mensagem' => 'Erro ao excluir projeto: ' . $e->getMessage()], 500);
        }
    }
}
