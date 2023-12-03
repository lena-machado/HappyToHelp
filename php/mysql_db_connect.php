<?php
    //echo phpinfo();
    /*
    $servername = "localhost";//servidor webhost
    $database = "id20145121_webuserdb";//nome da base de dados PHPAdmin webhost
    $username = "id20145121_root";//utilizador PHPAdmin webhost
    $password = "Admin@123456";//psw do utilizador PHPAdmin webhost
    */
    $servername = "localhost";//servidor
    $database = "app_test";//nome da base de dados
    $username = "root";//utilizador
    $password = "##adm#";//psw do utilizador
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
      die("DB Connection failed: " . mysqli_connect_error());
    }
    //echo "DB Connected successfully <br><br>";
    
/*
    # Criar a query desejada
    $query_select_all = "SELECT * FROM user";
    //$query_inserir_reg = "INSERT INTO user (username, email, pass) VALUES ('user$n', 'email$n@com.pt','pass$n')";

    $result_query_select_all = mysqli_query( $conn, $query_select_all) or die(' Erro na query:' . $query_select_all . ' ' . mysqli_error($conn) ); 

    # Exibe os registros na tela
    $numreg=1;
    while ($row = mysqli_fetch_array( $result_query_select_all )) {
        echo "<br>".$row['username'] . " -- " . $row['email'] . " -- " . $row['pass']." -- ".$row['create_time'];
        $numreg++;
    }

   # Insere 10 novos registos na tabela
   for ($n=$numreg; $n < $numreg+10; $n++){ 
    $query_inserir_reg = "INSERT INTO user (username, email, pass) VALUES ('user$n', 'email$n@com.pt','pass$n')";
      if (!$conn->query($query_inserir_reg)){
        echo " Falha ao executar a consulta: \"$consulta\" <br>" . $ligacao->error;
        $ligacao->close();  // fechar a ligação 
      }
      else{
        // percorrer os registos (linhas) da tabela e mostrar na página 
        echo "<br> Novo registo inserido com sucesso" ;
      }
    }
*/
//    mysqli_close($conn);//fechar a ligação à bd
?>