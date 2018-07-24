<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GiveMeJobs - O Projeto</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php require ("header.php"); ?>

    <div class="container">
      <div class="page-header">
        <h1>O Projeto <small>GiveMeJobs</small></h1>
      </div>

      <div class="container">
        <div class="contProj">
        <p>
          O projeto se baseia em um sistema online de registro e compartilhamentos de dados relativos a vagas de emprego/estágio, editais e oportunidades profissionais/acadêmicas para alunos da Universidade Federal de Alagoas, de início, no Campus Arapiraca.
        </p>
        <p>
          A ideia do sistema "Give Me Jobs", surgiu na necessidade de algo que organiza-se, direciona-se e determina-se o status das vagas que surgiam nos grupos de email dos cursos.
        </p>
        <p>
          O sistema consiste, inicialmente, em um espaço de compartilhamento de informações referentes as vagas de emprego/estágio. Cada usuário pode cadastrar novas vagas, assim como cada pessoa pode também ver as vagas disponíveis, pesquisar por alguma palavra chave, e se candidatar a vaga em questão.
        </p>
        <p>
          Assim que cada pessoa entra na página inicial do sistema, você tem informações organizadas sobre as oportunidades. No espaço de login, o usuário pode se cadastrar ou entrar no sistema, e assim, ter acesso a possibilidade de se candidatar para alguma vaga, ou publicar uma nova vaga.
        </p>
        <p>
          Para publicar uma nova vaga, é necessário especificar todas as informações, e ter um email específico que receba todos os currículos enviados para aquela vaga (se recomenda que seja algum email relativo ao RH da empresa que divulgou a oportunidade).
        </p>
        <p>
          Para se cadastrar numa vaga, é necessário preencher o campo de informações básicas, e submeter o currículo em formato de PDF, que será redirecionado para o email específico da empresa que cadastrou a vaga.
        </p>
        <p>
          Em versões futuras, o sistema oferecerá também um espaço para acompanhamento das etapas da oportunidade em formato de linha do tempo, separadas em (Recrutamento, Seleção, Entrevista, Exames, Resultado), mas em certos casos pode haver mais ou menos etapas. Novidades, chamados, reposições, e informações sobre vagas que um usuário está concorrendo, são enviadas pelo email para alertar.
        </p>
        <p>
          Para publicação de editais, o sistema permite o upload dos documentos, porém exige descrição do que está sendo enviado.
        </p>
        <p>
          O sistema é inicialmente web, funciona no navegador, de forma responsiva (se adequando a qualquer dispositivo ou tela).
        </p>
        </div>

        <!-- <div class="page-header">
          <h1>Equipe</h1>
          
        </div>

        <div class="row">
            <div class="col-xs-6 col-md-3">
              <div class="thumbnail">
                <img src="img/dawid.jpg" alt="Dawid" width="253">
                <div class="caption">
                  <h3>Dáwid Oliveira</h3>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3">
              <div class="thumbnail">
                <img src="img/pedro.jpg" alt="Dawid"  width="253">
                <div class="caption">
                  <h3>Pedro Afonso</h3>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3">
              <div class="thumbnail">
                <img src="img/danillo.jpg" alt="Dawid"  width="253"  height="253">
                <div class="caption">
                  <h3>Danillo Rodrigues</h3>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3">
              <div class="thumbnail">
                <img src="img/fernando.jpg" alt="Dawid"  width="253" height="253">
                <div class="caption">
                  <h3>Fernando da Silva</h3>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3">
              <div class="thumbnail">
                <img src="img/joao.jpg" alt="Dawid"  width="253">
                <div class="caption">
                  <h3>João Oliveira</h3>
                </div>
              </div>
            </div>
              

            
          </div> -->

      </div>

    </div>


    <?php require ("footer.php"); ?>
  </body>
 </html>