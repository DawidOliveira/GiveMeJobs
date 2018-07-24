<?php include ("connection/conexao.php"); session_start(); if (isset($_SESSION['logado_adm']) && $_SESSION['logado_adm']) {
  header("Location: index");
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    

      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3>Logar</h3>
          <form action="" method="post">
            <div class="form-group">
              <input type="text" name="nome" placeholder="Digite seu usuario" class="form-control" required autofocus>
            </div>
            <div class="form-group">
              <input type="password" name="senha" placeholder="Digite sua senha" class="form-control" required>
            </div>

            <button type="submit" name="ace" class="btn btn-primary">Acessar</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

<?php 
  if(isset($_POST['ace'])){
    $nome = mysqli_real_escape_string($mysqli,$_POST['nome']);
    $senha = mysqli_real_escape_string($mysqli,md5($_POST['senha']));

    $q = $mysqli->query("SELECT * from users_adm where username = '$nome' and password = '$senha' LIMIT 1;");
    $r = $q->num_rows;
  

    if($r>0){
      session_start();
      $_SESSION['user_adm']=ucwords($nome);
      $_SESSION['logado_adm']=true;
      header("Location: index");
    }else{
      echo "<script>alert('Usuário ou senha incorretos!');</script>";
    }

  }

 ?>