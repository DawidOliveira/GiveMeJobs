<?php
  if(isset($_POST['cad'])){
    $nome = mysqli_real_escape_string($mysqli,$_POST['nome']);
    $senha = mysqli_real_escape_string($mysqli,md5($_POST['senha']));

    $q1 = $mysqli->query("SELECT * from users_adm where username='$nome' LIMIT 1;");
    $r1 = $q1->num_rows;

    if($r1>0){
      echo "<script>alert('Usuario já cadastrado!!');</script>";
    }else{
      $q2 = $mysqli->query("INSERT into users_adm (username,password) values ('$nome','$senha');");
      $r2 = $q2->num_rows;

      if($q2){
        echo "<script>alert('Cadastro feito com sucesso!!');location.href='login';</script>";
      }else{
        echo "<script>alert('Erro ao cadastrar!!');</script>";
      }
    }

  }
 ?>