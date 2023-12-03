<?php

session_start();

if ($_SESSION['userName'] == null){
  header("location: ./index.php");
  exit();
}else{
  
  #criar a ligação à BD
  include "./mysql_db_connect.php";
  $username = mysqli_real_escape_string($conn,$_SESSION['userName']);
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $tipo_servico = mysqli_real_escape_string($conn,$_POST['tipo_servico']);
  $adulto_crianca = mysqli_real_escape_string($conn,$_POST['adulto_crianca']);
  $idade = mysqli_real_escape_string($conn,$_POST['idade']);
  $genero = mysqli_real_escape_string($conn,$_POST['genero']);
  $data = mysqli_real_escape_string($conn,$_POST['data']);
  $periodo = mysqli_real_escape_string($conn,$_POST['periodo']);
  $obs = mysqli_real_escape_string($conn,$_POST['obs']);

  # Criar a query para nova marcação
  $query_create_user = "INSERT INTO termas ( username, name, tipo_servico, adulto_crianca, idade, genero, data, periodo, obs)
   VALUES ('$username', '$name', '$tipo_servico', '$adulto_crianca', '$idade', '$genero', '$data' , '$periodo', '$obs');";

  # realiza a query
  $result = mysqli_query( $conn, $query_create_user) or die('Erro na query:' . $query_create_user . ' ' . mysqli_error($conn));

  if ($result > 0)
    $mensagem = 'Marcação efetuada com sucesso!';

  mysqli_close($conn);//fechar a ligação à bd

  header("location: ./lista_marcacoes.php?msg=$mensagem");
  exit();
}
?>