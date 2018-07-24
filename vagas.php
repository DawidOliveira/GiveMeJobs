<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GiveMeJobs - Vagas</title>

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

        <h1>Vagas</h1>
        <div class="row">
          <div class="col-lg-4 customSearch">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Procurar por vaga...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Buscar</button>
              </span>
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
        </div>
      </div>


      <div class="col-md-9 vagas">
        <div class="list-group">
          <?php
          $q = $mysqli->query("SELECT * from vagas order by id desc;");
          $r = $q->num_rows;
           if($r>0){
            while($dados = $q->fetch_array()){
            ?>
          <a href="vag/<?php echo $dados['nomepag']; ?>" class="list-group-item"><?php echo $dados['id']." - ".$dados['titulo']; ?></a>

          <?php 
          } }?>
        </div>
      </div>
      


    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <?php require ("footer.php"); ?>

  </body>
 </html>