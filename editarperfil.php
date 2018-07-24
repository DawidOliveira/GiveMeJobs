
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GiveMeJobs - Edite seu perfil</title>

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
    <?php require ("header.php"); if(!isset($_SESSION['logado']) || !$_SESSION['logado']) header("Location: index"); ?>

    <div class="container">
      <div class="page-header">
        <h1>Editar perfil</h1>
      </div>

      <?php 
        $eme = $_SESSION['email'];
        $qed = $mysqli->query("SELECT * from users where email = '$eme' LIMIT 1;");
        if ($aed = $qed->fetch_array()) {
          $ided = $aed['id'];
          $nomed = $aed['username'];
          $emailed = $aed['email'];
        }

       ?>

      <div class="container">
        <form action="" method="post">
            <div class="form-group">
              <label for="nome">Id (Não se altera)</label>
              <input type="text" name="id" class="form-control" id="id" value="<?php echo $ided; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $nomed; ?>">
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" name="email" class="form-control" id="email" value="<?php echo $emailed; ?>">
            </div>

            <button type="submit" name="salvar" class="btn btn-default">Salvar</button>

          </form>
          <?php 
            if (isset($_POST['salvar'])) {
              $nome = mysqli_real_escape_string($mysqli,$_POST['nome']);
              $email = mysqli_real_escape_string($mysqli,$_POST['email']);

              $q = $mysqli->query("UPDATE users set username='$nome', email='$email' where id=$ided;  ");

              if ($q) {
                $_SESSION['user'] = $nome;
                $_SESSION['email'] = $email;
                ?>
                <div class="alert alert-success" role="alert">Mudanças feitas com sucesso!</div>
                <?php
              }else{
                ?>
                <div class="alert alert-danger" role="alert">Erro ao salvar!</div>
                <?php
              }

            }
            ?>
          <br><br><br><br><br><br><br><br><br><br><br>
      </div>

    </div>


    <?php require ("footer.php"); ?>
  </body>
 </html>

