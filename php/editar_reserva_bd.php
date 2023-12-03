<?php

session_start();

if ($_SESSION['userName'] == null){
  header("location: ./index.php");
  exit();
}else{
  
  #criar a ligação à BD

  include "./mysql_db_connect.php";
  $id_marcacao = mysqli_real_escape_string($conn, $_POST['id_marcacao']);
  $username = mysqli_real_escape_string($conn,$_SESSION['userName']);
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $periodo = mysqli_real_escape_string($conn,$_POST['periodo']);
  $data = mysqli_real_escape_string($conn,$_POST['data']);
  $num_adultos = mysqli_real_escape_string($conn,$_POST['num_adultos']);
  $num_criancas = mysqli_real_escape_string($conn,$_POST['num_criancas']);
  $obs = mysqli_real_escape_string($conn,$_POST['obs']);

  # Criar a query de um contato
  $query_update_user = "UPDATE museunadirafonso SET 

  name ='$name',
  periodo='$periodo',
  data='$data',
  num_adultos='$num_adultos',
  num_criancas='$num_criancas',
  obs='$obs' 
  WHERE id_marcacao='$id_marcacao';";

  # realiza a query
  $result = mysqli_query( $conn, $query_update_user) or die(' Erro na query:' . $query_update_user . ' ' . mysqli_error($conn) );

  if ($result > 0)
    $mensagem = 'Registo editado com sucesso!';
  
  mysqli_close($conn);//fechar a ligação à bd

  header("location:./lista_reservas.php?msg=$mensagem");
  exit();
}
?>