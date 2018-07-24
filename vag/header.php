<?php  include ("../connection/connection.php"); session_start();?>
<nav class="navbar navbar-default navbar-font" style="background-color: #337ab7;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao"><span class="sr-only">Alternar Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a href="../index" class="navbar-brand"><span class="img-logo">GiveMeJobs</span></a>
        </div>

        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../index">Home</a></li>
            <li><a href="../vagas">Vagas</a></li>
            <li><a href="../processos">Processos Seletivos</a></li>
            <li><a href="../editais">Editais</a></li>
            <li><a href="../projeto">O Projeto</a></li>
            <li class="divisor" role="separator"></li>
            <?php 
              if(!isset($_SESSION['logado']) || $_SESSION['logado'] == false){
                ?>
                <li style="cursor: pointer;"><a data-toggle="modal" data-target="#janela">Fazer login</a></li>
                <?php
              }else{
                ?>
                  <li><div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle customBP" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['user']; ?> <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="editarperfil" class="customColor">Editar perfil</a></li>
                        <li><a href="sair" class="customColor">Sair</a></li>
                      </ul>
                    </div></li>
                <?php
              }
             ?>
          </ul>
        </div>

      </div>
    </nav>

    <div class="modal fade" id="janela">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <!-- cabecalho -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
              <h4 class="modal-title">Efetuar Login</h4>
            </div>
            <form action="" method="post">
              <!-- corpo -->
              <div class="modal-body">
                <div class="form-group">
                  <input type="email" name="email" placeholder="Digite seu email" class="form-control" required>
                </div>
                <div class="form-group">
                  <input type="password" name="password" placeholder="Digite sua senha" class="form-control" required>
                </div>
              </div>

              <!-- cabecalho -->
              <div class="modal-footer">
                <a href="../cadastrar">Não tem conta? Cadastre-se!</a>
                <button type="submit" name="access" class="btn btn-primary">Acessar</button>
              </div>
            </form>
          </div>
        </div>
      </div>

<?php 
  if(isset($_POST['access'])){
    $email = mysqli_real_escape_string($mysqli,$_POST['email']);
    $pass = mysqli_real_escape_string($mysqli,md5($_POST['password']));

    $q = $mysqli->query("SELECT * from users where email = '$email' and password = '$pass' LIMIT 1;");
    $r = $q->num_rows;
    while($c=$q->fetch_array()){
      $user = $c['username'];
    }
  

    if($r>0){
      session_start();
      $_SESSION['user']=ucwords($user);
      $_SESSION['email']=ucwords($email);
      $_SESSION['logado']=true;
      header("Location: ../index");
    }else{
      echo "<script>alert('Usuário ou senha incorretos!');</script>";
    }

  }

 ?>