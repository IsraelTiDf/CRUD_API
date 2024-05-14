<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjetoRequest;
use App\Models\Projeto;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Documentação da API de Projetos",
 *      description="Esta é a documentação da API de Projetos.",
 *      @OA\Contact(
 *          email="example@example.com"
 *      ),
 *      @OA\License(
 *          name="MIT",
 *          url="https://opensource.org/licenses/MIT"
 *      )
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="API Server"
 * )
 */
class ProjetoController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/projetos",
     *      operationId="listarProjetos",
     *      tags={"Projetos"},
     *      summary="Listar projetos",
     *      description="Retorna uma lista de todos os projetos.",
     *      @OA\Response(
     *          response=200,
     *          description="Operação bem-sucedida"
     *      )
     * )
     */
    public function index()
    {
        try {
            $projetos = Projeto::all();
            return response_api($projetos, true, 'Lista de projetos recuperada com sucesso.', 200);
        } catch (\Exception $e) {
            return response_api([], false, 'Erro ao recuperar lista de projetos.', 500);
        }
    }

    /**
     * @OA\Post(
     *      path="/api/projetos",
     *      operationId="criarProjeto",
     *      tags={"Projetos"},
     *      summary="Criar projeto",
     *      description="Cria um novo projeto.",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Dados do projeto a serem armazenados",
     *          @OA\JsonContent(ref="#/components/schemas/ProjetoRequest")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Projeto criado com sucesso"
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Erro de validação ou requisição inválida"
     *      )
     * )
     */
    public function store(ProjetoRequest $request)
    {
        try {
            // $request->merge(['id_projeto' => random_int(10000, 99999)]);
            // dd($request->all());
            $projeto = Projeto::create($request->all());
            return response_api($projeto, true, 'Projeto criado com sucesso.', 201);
        } catch (\Exception $e) {
            return response_api([], false, 'Erro ao criar projeto.', 400);
        }
    }

    /**
     * @OA\Get(
     *      path="/api/projetos/{id}",
     *      operationId="mostrarProjeto",
     *      tags={"Projetos"},
     *      summary="Exibir projeto",
     *      description="Exibe um projeto específico com base no ID fornecido.",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          description="ID do projeto a ser exibido",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Operação bem-sucedida. Retorna os detalhes do projeto.",
     *          @OA\JsonContent(ref="#/components/schemas/Projeto")
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Projeto não encontrado."
     *      )
     * )
     */
    public function show($id)
    {
        try {
            $projeto = Projeto::findOrFail($id);
            return response_api($projeto, true, 'Detalhes do projeto recuperados com sucesso.', 200);
        } catch (\Exception $e) {
            return response_api([], false, 'Projeto não encontrado.', 404);
        }
    }

    /**
     * @OA\Put(
     *      path="/api/projetos/{id}",
     *      operationId="atualizarProjeto",
     *      tags={"Projetos"},
     *      summary="Atualizar projeto",
     *      description="Atualiza as informações de um projeto com base no ID fornecido.",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          description="ID do projeto a ser atualizado",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          description="Dados atualizados do projeto",
     *          @OA\JsonContent(ref="#/components/schemas/ProjetoRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Projeto atualizado com sucesso",
     *          @OA\JsonContent(ref="#/components/schemas/Projeto")
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Projeto não encontrado."
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Erro de validação ou requisição inválida"
     *      )
     * )
     */
    public function update(ProjetoRequest $request, $id)
    {
        try {
            $projeto = Projeto::findOrFail($id);
            $projeto->update($request->all());
            return response_api($projeto, true, 'Projeto atualizado com sucesso.', 200);
        } catch (\Exception $e) {
            return response_api([], false, 'Erro ao atualizar projeto.', 400);
        }
    }

    /**
     * @OA\Delete(
     *      path="/api/projetos/{id}",
     *      operationId="deletarProjeto",
     *      tags={"Projetos"},
     *      summary="Deletar projeto",
     *      description="Deleta um projeto com base no ID fornecido.",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          description="ID do projeto a ser deletado",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=204,
     *          description="Projeto deletado com sucesso"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Projeto não encontrado."
     *      )
     * )
     */
    public function destroy($id)
    {
        try {
            $projeto = Projeto::findOrFail($id);
            $projeto->delete();
            return response_api([], true, 'Projeto deletado com sucesso.', 204);
        } catch (\Exception $e) {
            return response_api([], false, 'Erro ao deletar projeto.', 400);
        }
    }
}
