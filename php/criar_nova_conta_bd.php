<?php

session_start();

  #criar a ligação à BD
  include "./mysql_db_connect.php";

  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $nome_apelido = mysqli_real_escape_string($conn,$_POST['nome_apelido']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $pass = mysqli_real_escape_string($conn,$_POST['password']);
  $aniversario = mysqli_real_escape_string($conn,$_POST['aniversario']);

  # Criar a query para novo utilizador
  $query = "INSERT INTO myclients (username, nome_apelido, email, password, aniversario)
   VALUES ('$username', '$nome_apelido', '$email', '$pass', '$aniversario');";

  # realiza a query
  $result = mysqli_query( $conn, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error($conn) );

  if ($result > 0)
    $mensagem = 'Utilizador criado com sucesso!';

  mysqli_close($conn);//fechar a ligação à bd

  header("location: ./index.php?msg=$mensagem");
  exit();
?>