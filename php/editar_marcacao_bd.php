<?php

session_start();

if ($_SESSION['userName'] == null){
  header("location: ./index.php");
  exit();
}else{
  
  #criar a ligação à BD
  include "./mysql_db_connect.php";

  $id_marcacao = mysqli_real_escape_string($conn, $_POST['id_marcacao']);
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $tipo_servico = mysqli_real_escape_string($conn,$_POST['tipo_servico']);
  $adulto_crianca = mysqli_real_escape_string($conn,$_POST['adulto_crianca']);
  $idade = mysqli_real_escape_string($conn,$_POST['idade']);
  $genero = mysqli_real_escape_string($conn,$_POST['genero']);
  $data = mysqli_real_escape_string($conn,$_POST['data']);
  $periodo = mysqli_real_escape_string($conn,$_POST['periodo']);
  $obs = mysqli_real_escape_string($conn,$_POST['obs']);

  # Criar a query de um contato
  $query_update_user = "UPDATE termas SET 
  name ='$name',
  tipo_servico='$tipo_servico',
  adulto_crianca='$adulto_crianca',
  idade='$idade',
  genero='$genero',
  data='$data',
  periodo='$periodo',
  obs='$obs' 
  WHERE id_marcacao='$id_marcacao';";

  # realiza a query
  $result = mysqli_query( $conn, $query_update_user) or die(' Erro na query:' . $query_update_user . ' ' . mysqli_error($conn) );

  if ($result > 0)
    $mensagem = 'Registo editado com sucesso!';
  
  mysqli_close($conn);//fechar a ligação à bd

  header("location: ./lista_marcacoes.php?msg=$mensagem");
  exit();
}
?>