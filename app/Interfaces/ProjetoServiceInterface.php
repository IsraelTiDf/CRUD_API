<?php

// app/Interfaces/ProdutoServiceInterface.php

namespace App\Interfaces;

interface ProjetoServiceInterface
{
    public function listarProjetos();

    public function encontrarProjetoPorId($id);

    public function criarProjeto(array $dados);

    public function atualizarProjeto(array $dados, $id);

    public function excluirProjeto($id);
}
