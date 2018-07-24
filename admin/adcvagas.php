<h3>Adicionar Vagas</h3>
  <form enctype="multipart/form-data" action="" method="POST">
    <div class="form-group">
      <label for="titulo">Título</label>
      <input type="text" name="titulo" class="form-control" id="titulo" required>
    </div>
    <div class="form-group">
      <label for="vagas">Quantidade de vagas</label>
      <input type="text" name="vagas" class="form-control" id="vagas" required>
    </div>
    <div class="form-group">
        <label for="rem">Remuneração</label>
        <input type="text" name="rem" class="form-control" id="rem" placeholder="Caso não tenha, digite: Sem remuneração." required>
    </div>
    <div class="form-group">
        <label for="descVaga">Descrição da vaga</label>
        <textarea class="form-control" rows="8" name="descVaga" id="descVaga" required></textarea>
    </div>
    <div class="form-group">
        <label for="edital">Edital</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="50000">
        <input type="file" name="edital" class="form-control" id="edital">
    </div>
    <!-- <div class="form-group">
        <label for="email">E-mail para receber os candidatos às vagas</label>
        <input type="email" name="email" class="form-control" id="email" required>
    </div> -->
 
    <button type="submit" name="cadastrar" class="btn btn-default">Cadastrar</button>

  </form>

  <br><br><br><br>


<?php 
  
 ?>


  <?php 
    if (isset($_POST['cadastrar'])) {
      $titulo = $_POST['titulo'];
      $qntdVagas = $_POST['vagas'];
      $remuneracao = $_POST['rem'];
      $descVaga = $_POST['descVaga'];
      $caminhoEdital = "editais/".$_FILES['edital']['name'];
      /*$email = $_POST['email'];*/
      $nomepag = strtolower(str_replace(" ", "", $titulo).".php");

      if (file("../vag/".$nomepag)) {
        echo "<script>alert('Desculpe, já existe um arquivo com esse nome! (escolha um titulo diferente!)');</script>";
      }else{
        $q = $mysqli->query("INSERT into vagas (titulo,qntdVagas,remuneracao,nomepag,descVaga,caminhoEdital) values ('$titulo','$qntdVagas','$remuneracao','$nomepag','$descVaga','$caminhoEdital');");

        $modelo = "<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GiveMeJobs - Vagas</title>

    <!-- Bootstrap -->
    <link href='../bootstrap/css/bootstrap.min.css' rel='stylesheet'>
    <link href='../style.css' rel='stylesheet'>
    <link href='../img/favicon.png' rel='icon'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'></script>
      <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->
  </head>
  <body>
    <?php require ('../vag/header.php'); ?>

    <div class='container'>
      <div class='page-header'>
        <h1>$titulo</h1>
      </div>

      <div class='container'>
        <p>Quantidade de vagas: $qntdVagas</p>
        <p>Remuneração: R$ $remuneracao</p>
        <p>$descVaga</p>
      <br><br><br>
      <a href='$caminhoEdital' class='btn btn-primary'>Link para edital</a>
      <br><br><br>
      <a href='#' class='btn btn-primary'>Link para candidatar-se</a>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br>
    </div>


    <?php require ('../vag/footer.php'); ?>
  </body>
 </html>";

        $abrirarquivo = fopen("../vag/".$nomepag,'w+');
        fwrite($abrirarquivo, $modelo);
        fclose($abrirarquivo);

        if ($q) {
          echo "<script>alert('Adicionada!');</script>";
        }else{
          echo "<script>alert('Erro ao adicionar!');</script>";
        }
      }



    }
  ?>



  <?php
  if (isset($_POST['cadastrar'])) {
    $uploaddir = '../vag/editais/';
    $uploadfile = $uploaddir . basename($_FILES['edital']['name']);

    if (move_uploaded_file($_FILES['edital']['tmp_name'], $uploadfile)) {
        echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        echo "Possível ataque de upload de arquivo!\n";
    }

  }
?>


