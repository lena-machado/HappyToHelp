<?php 
include "./header.php";

# Mostra mensagem de alerta vinda do carregamento na BD
if(isset($_GET['msg'])){
    echo "<script>alert('" . $_GET['msg'] . "');</script>";
}
?>

<?php

  if ($_SESSION['userName'] == null){
    header("location: ./index.php");
    exit();
  }else{

    #criar a ligação à BD
    include "./mysql_db_connect.php";

    # Criar a query de listagem de marcações
    $user=$_SESSION['userName'];
    $query_user = "SELECT * FROM termas WHERE username='$user';";

    # realiza a query da listagem de todas as marcações
    $result_query_select_all = mysqli_query( $conn, $query_user) or die(' Erro na query:' . $query_user . ' ' . mysqli_error($conn) );

    mysqli_close($conn);//fechar a ligação à bd

?>      <div style="margin: auto; width: 90%;">
        <p style="background-color: rgb(156, 217, 194); color: white;
      	 font-family: 'Audiowide', sans-serif; font-size: 20px;
      	  text-align: center;  border-radius: 10px;  line-height: 40px;">
      	As minhas Marcações</p>
        

        <table align='center' class='table table-lightdark table-striped table-hover table-responsive' style="width: 100%; font-size:medium;">
            <tr class='bg-primary'>
                <thead style='background-color: rgb(75, 74, 74); color: beige;'>
                    <th style="width: 20%;">Nome</th>
                    <th style="width: 10%;">Serviço</th>
                    <th style="width: 10%;">Adulto Criança</th>
                    <th style="width: 5%;">Idade</th>
                    <th style="width: 5%;">Genero</th>
                    <th style="width: 10%;">Data</th>
                    <th style="width: 10%;">Período</th>
                    <th style="width: 10%;">Obs</th>
                    <th style="width: 20%;"></th>
                </thead>
            </tr>
<?php
            while ($row = mysqli_fetch_array( $result_query_select_all )) {
                echo "
                <tr>
                    <td>".$row['name']."</td>
                    <td>".$row['tipo_servico']."</td>
                    <td>".$row['adulto_crianca']."</td>
                    <td>".$row['idade']."</td>
                    <td>".$row['genero']."</td>
                    <td>".$row['data']."</td>
                    <td>".$row['periodo']."</td>
                    <td>".$row['obs']."</td>
                    <td>&nbsp;<a class='btn btn-warning btn-sm' href='./editar_marcacao.php?id=".$row['id_marcacao']."' style='font-size: small;'>Editar</a>&nbsp;
                        <a class='btn btn-danger btn-sm' href='./apagar_marcacao_bd.php?id=".$row['id_marcacao']."' style='font-size: small;'>Apagar</a>&nbsp;
                    </td>
                </tr>
                ";
            }
    }
?>
        </table>
    </div>
    </body>

<?php //include "./footer.php" ?>