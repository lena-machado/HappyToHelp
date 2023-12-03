<?php

  session_start();
  
  #criar a ligação à BD
  include "./mysql_db_connect.php";

  if(empty($_POST['username']) || empty($_POST['password'])) {
    header('location: ./login.php');
    exit();
  }

  $user = mysqli_real_escape_string($conn, $_POST['username']);
  $pass = mysqli_real_escape_string($conn, $_POST['password']);
  
  # Criar a query de verificação de utilizador
  $query_user = "SELECT username,password FROM myclients WHERE username='$user' AND password='$pass';";

  # realiza a query
  $result_query_user = mysqli_query( $conn, $query_user) or die(' Erro na query:' . $query_user . ' ' . mysqli_error($conn) );
  #conta o numero de linhas do resultado
  $row = mysqli_num_rows($result_query_user);

  if ($row == 1){
    $_SESSION['userName'] = $_POST['username'];
    header("location: ./index.php");
    exit();
  } else {
    header("location: ./invalid_login.php");
    exit();
  }