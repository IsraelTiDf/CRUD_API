<?php
// app/Http/Controllers/ProjetoController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ProjetoServiceInterface;
use Illuminate\Http\JsonResponse;

class ProjetoController extends Controller
{
    protected $projetoService;

    public function __construct(ProjetoServiceInterface $projetoService)
    {
        $this->projetoService = $projetoService;
    }

    public function index() : JsonResponse
    {
        $projetos = $this->projetoService->listarProjetos();
        return $projetos;
        // return view('projetos.index', ['projetos' => $projetos]);

    }

    public function show($id)
    {
        $projeto = $this->projetoService->encontrarProjetoPorId($id);

        if (!$projeto) {
            return response()->json(['mensagem' => 'Projeto não encontrado'], 404);
        }

        return response()->json(['projeto' => $projeto]);
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        $projeto = $this->projetoService->criarProjeto($dados);

        return response()->json(['projeto' => $projeto], 201);
    }

    public function update(Request $request, $id)
    {
        $dados = $request->all();

        $projetoAtualizado = $this->projetoService->atualizarProjeto($dados, $id);

        if (!$projetoAtualizado) {
            return response()->json(['mensagem' => 'Projeto não encontrado'], 404);
        }

        return response()->json(['mensagem' => 'Projeto atualizado com sucesso']);
    }

    public function destroy($id)
    {
        $projetoExcluido = $this->projetoService->excluirProjeto($id);

        if (!$projetoExcluido) {
            return response()->json(['mensagem' => 'Projeto não encontrado'], 404);
        }

        return response()->json(['mensagem' => 'Projeto excluído com sucesso']);
    }
}
