<?php include ("connection/conexao.php"); session_start(); if (!isset($_SESSION['logado_adm']) || !$_SESSION['logado_adm']) {
  header("Location: login");
} ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GiveMeJobs - Painel de Controle</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
    <link rel="icon" href="../img/favicon.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="corpoAdm">
    <nav class="navbar navbar-default navbar-font" style="background-color: #337ab7;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao"><span class="sr-only">Alternar Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a href="index" class="navbar-brand"><span class="img-logo">GiveMeJobs</span></a>
        </div>

        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index">Home</a></li>
            <li><a href="index?func=adcvagas">Adicionar Vagas</a></li>
            <li><a href="index?func=adcproc">Adicionar Processos Seletivos</a></li>
            <li><a href="index?func=adcedi">Adicionar Editais</a></li>
            <li><a href="index?func=vagas">Vagas adicionadas</a></li>
            <li><a href="index?func=logout">Sair (<?php echo $_SESSION['user_adm']; ?>)</a></li>
          </ul>
        </div>



      </div>
    </nav>
    
      
        
          <?php if (isset($_GET['func'])) {
            $pag = $_GET['func'].".php";
            ?>
            <div class="container">
            <div class="row">
              <div class="col-sm-8">
            <?php
            include ($pag);
            ?>
               </div>
               </div>
                </div>
            <?php
          }else{
            ?>

              <div class="princ">
                <div class="texto_princ">
                  <h1><img src="../img/logo2.png" width="120"><br>Painel de Controle<br>GiveMeJobs</h1>
                </div>
              </div>
            <?php
          } ?>
       
      
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>