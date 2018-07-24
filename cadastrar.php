<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GiveMeJobs - Cadastro</title>

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
        <h1>Cadastre-se</h1>
      </div>

      <div class="container">
       
       <form action="" method="post">
            <div class="form-group">
              <label for="nome">Nome e sobrenome</label>
              <input type="text" name="nome" class="form-control" id="nome" required>
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input type="password" name="senha" class="form-control" id="senha">
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name=""> Aceito os termos do serviço
              </label>
            </div>

            <button type="submit" name="cad" class="btn btn-default">Cadastrar</button>

          </form>

      </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php require ("footer.php"); ?>
  </body>
 </html>

 <?php
  if(isset($_POST['cad'])){
    $nome = mysqli_real_escape_string($mysqli,$_POST['nome']);
    $email = mysqli_real_escape_string($mysqli,$_POST['email']);
    $senha = mysqli_real_escape_string($mysqli,md5($_POST['senha']));

    $q1 = $mysqli->query("SELECT * from users where email='$email' LIMIT 1;");
    $r1 = $q1->num_rows;

    if($r1>0){
      echo "<script>alert('E-mail já cadastrado!!');</script>";
    }else{
      $q2 = $mysqli->query("INSERT into users (username,password,email) values ('$nome','$senha','$email');");
      $r2 = $q2->num_rows;

      if($q2){
        echo "<script>alert('Cadastro feito com sucesso!!');location.href='index';</script>";
      }else{
        echo "<script>alert('Erro ao cadastrar!!');</script>";
      }
    }

  }
 ?>