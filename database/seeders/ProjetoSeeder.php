<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_projeto_teste')->insert([
            [
                'id_projeto' => 57030,
                'pronac' => '181950',
                'ano_projeto' => '18',
                'nome' => 'Circuito da Alegria 3',
                'segmento' => 'Teatro',
                'area' => 'Artes Cênicas',
                'uf' => 'RS',
                'municipio' => 'Porto Alegre',
                'data_inicio' => '2018-09-14',
                'data_termino' => '2018-12-21',
                'situacao' => 'Autorizada a captação residual dos recursos',
                'mecanismo' => 'Mecenato',
                'enquadramento' => 'Artigo 18',
                'valor_captado' => '162000',
                'valor_aprovado' => '183237.6',
                'acessibilidade' => 'ACESSIBILIDADE FÍSICA: Os espaços escolhidos para realização das apresentações possuem fácil acesso por meio de rampas para pessoas com mobilidade reduzida, banheiros adaptados, assentos especiais e outras facilidades. ACESSIBILIDADE DE CONTEÚDO: Será realizada uma apresentação com audiodescrição e tradução em Libras e, sempre que tecnicamente viável, a divulgação terá a legenda “Para Cego Ver”.',
                'objetivos' => null,
                'justificativa' => null,
                'etapa' => null,
                'ficha_tecnica' => 'Coordenação Geral e Gestão Administrativo-financeira de Projeto: Artistaria Produtora de Humor',
                'impacto_ambiental' => 'Circula??o de espet?culo de artes c?nicas (por 3 cidades do RS: Porto Alegre, Pelotas e Novo Hamburgo) realizado por dois humoristas de diferentes regi?es do pa?s: Cris Pereira e Leandro Hassum Circuito da Alegria 3 - Stand Up Bagual do Gaud?ncio e #RindocomHassum Dura??o: 90min',
                'especificacao_tecnica' => 'Transfer?ncia de recursos entre conta capta??o e conta movimento no valor de R$12.000,00 em 11/12/2018.',
                'providencia' => null,
                'democratizacao' => 'ESPETÁCULO TEATRAL – PREÇOS POPULARES E DOAÇÕES A fim de viabilizar o acesso ao produto cultural ESPETÁCULO TEATRAL, o projeto adotou as seguintes medidas de democratização de acesso (conforme as normas aplicáveis a este mecanismo de financiamento pretendido): VENDA DE INGRESSOS A PREÇOS POPULARES: Todos os ingressos terão um valor cheio único abaixo do limite de valor do Vale Cultura, propiciando assim um maior alcance de todas as camadas da população, respeitando também as regras para meia entrada. Valor ingresso inteiro praticado: R$ 60,00 Expectativa de público atingido: 956 ingressos total correspondente à porcentagem de preços populares DOAÇÃO PARA CONTRAPARTIDA SOCIAL: Ingressos destinados: 483 ingressos Os ingressos doados serão destinados prioritariamente à instituições sem fins lucrativos que atendam pessoas em situação de vulnerabilidade social, em tratamento médico contra o câncer ou outras doenças, dando seguimento a ação semelhante realizada nos anos anteriores. Também serão oferecidos ingressos para estudantes de artes de instituições públicas de ensino. VALORES DE INGRESSOS O projeto prevê a comercialização de ingressos com valores abaixo do praticado normalmente pelas casas de espetáculo escolhidas para a realização do projeto, conforme informado detalhadamente no PLANO DE DISTRIBUIÇÃO. Valor ingresso inteiro praticado: R$ 60,00 Além disto, para garantir a AMPLIAÇÃO DE ACESSO, adotaremos a medida: VI - oferecer bolsas de estudo ou estágio a estudantes da rede pública ou privada de ensino em atividades educacionais, profissionais ou de gestão cultural e artes desenvolvidas na proposta cultural.',
                'sinopse' => 'Na terceira edição do projeto “Circuito da Alegria” o ator Cris Pereira leva novos quadros com seus consagrados personagens aos palcos de 3 cidades do Rio Grande do Sul e convida o ator Leandro Hassum para dividir o espetáculo com ele, promovendo assim um intercâmbio cultural de humor na circulação do espetáculo.',
                'resumo' => null,
                'created_at' => null,
                'updated_at' => null,
                'valor_projeto' => '183237.6',
                'outras_fontes' => '0',
                'valor_proposta' => '183237.6',
                'valor_solicitado' => '183237.6',
                'objetivo' => 'OBJETIVO GERAL Promover a circulação de espetáculo de comédia e artistas cômicos, populares em grandes centros urbanos, para 3 cidades do Rio Grande do Sul, fomentando a produção e intercâmbio de estilos de comédia que valorizam o trabalho autoral. OBJETIVOS ESPECÍFICOS Promover o acesso à cultura em 3 cidades do interior do RS. Realizar as apresentações previstas no cronograma do projeto. - Garantir a acessibilidade a pessoas com deficiência. Realizar as ações de democratização e ampliação de acesso conforme descritas no escopo do projeto. - Realizar intercâmbio de linguagens artísticas convidando um humorista de outro Estado a participar do espetáculo.',
                'estrategia_execucao' => 'O proponente será remunerado nas rubricas de coordenação geral, nas etapas de pré-produção e produção, e por Gestão Administrativo-financeira de Projeto, dentro dos Custos Administrativos, (ficando responsável pelo andamento geral do projeto e sua gestão administrativo-financeira) ficando dentro do percentual permitido pela Lei. Sobre as passagens aéreas, o ator convidado, Leandro Hassum recentemente passou a residir na cidade de Miami, nos Estados Unidos. Solicitamos o financiamento deste deslocamento em sua totalidade a fim de garantir a participação do mesmo no projeto.',
                'link_incentivadores' => 'http://api.salic.cultura.gov.br/v1/incentivadores/?PRONAC=181950'
            ]
        ]);
    }
}
