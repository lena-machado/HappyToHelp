<?php

session_start();

if ($_SESSION['userName'] == null){
  header("location: ./index.php");
  exit();
}else{

  #criar a ligação à BD
  include "./mysql_db_connect.php";
  
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  # Criar a query para eliminar um contato
  $query_delete_user = "DELETE FROM termas WHERE id_marcacao = '$id';";

  # realiza a query
  $result = mysqli_query( $conn, $query_delete_user) or die(' Erro na query:' . $query_delete_user . ' ' . mysqli_error($conn) );

  if ($result > 0)
    $mensagem = 'Registo eliminado com sucesso!';

  mysqli_close($conn);//fechar a ligação à bd

  header("location: ./lista_marcacoes.php?msg=$mensagem");
  exit();
}
?>