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

    $search = $_POST['search'];
    $user = $_SESSION['userName'];

    #criar a ligação à BD
    include "./mysql_db_connect.php";

    # Criar a query de procura 
    $query_pers = "SELECT * FROM termas WHERE username = '$user' AND
        (name = '$search' OR username = '$search') 
    ";

    # Criar a query de procura de c
    $query_prof = "SELECT * FROM museunadirafonso WHERE username = '$user' AND 
    (name = '$search' OR username = '$search')
    ";


    # realiza as querys da listagem 
    $result_pers = mysqli_query( $conn, $query_pers) or die(' Erro na query:' . $query_pers . ' ' . mysqli_error($conn) );
    $result_prof = mysqli_query( $conn, $query_prof) or die(' Erro na query:' . $query_prof . ' ' . mysqli_error($conn) );

    mysqli_close($conn);//fechar a ligação à bd

    ?>
        <div style="margin: auto; width: 75%;">
        <p style="background-color: rgb(156, 217, 194) ; color: beige;
      	 font-family: 'Audiowide', sans-serif; font-size: 20px;
      	  text-align: center;  border-radius: 10px;  line-height: 40px;">
      	Registos</p>

        <table align='center' class='table table-lightdark table-striped table-hover table-responsive' style="width: 100%;">

            <?php if (mysqli_num_rows($result_pers)>0) { ?>           
                    <tr class='bg-primary'>
                        <thead style='background-color: black; color: white;'>
                        <th style="width: 20%;"> Nome </th>
                        <th style="width: 10%;"> Data </th>
                        <th style="width: 20%;"> Obs </th>
                        <th style="width: 20%;"></th>
                        </thead>
                    </tr>
                <?php
                    while ($row = mysqli_fetch_array( $result_pers)) {
                        echo "
                        <tr>
                            <td>".$row['name']."</td>
                            <td>".$row['data']."</td>
                            <td>".$row['obs']."</td>
                            <td>&nbsp;<a class='btn btn-warning btn-sm' href='./editar_marcacao.php?id=".$row['id_marcacao']."' style='font-size: small;'>Editar</a>&nbsp;
                                <a class='btn btn-danger btn-sm' href='./apagar_marcacao_bd.php?id=".$row['id_marcacao']."' style='font-size: small;'>Apagar</a>&nbsp;
                            </td>
                        </tr>
                        ";
                    }
                }
                ?>
            <?php if (mysqli_num_rows($result_prof)>0) { ?>   
                    <tr class='bg-primary'>
                        <thead style='background-color: black; color: white;'>
                        <th style="width: 20%;"> Nome </th>
                        <th style="width: 10%;"> Data </th>
                        <th style="width: 20%;"> Obs </th>
                        <th style="width: 20%;"></th>
                        </thead>
                    </tr>
                <?php
                    while ($row = mysqli_fetch_array( $result_prof)) {
                        echo "
                        <tr>
                            <td>".$row['name']."</td>
                            <td>".$row['data']."</td>
                            <td>".$row['obs']."</td>
                            <td>&nbsp;<a class='btn btn-warning btn-sm' href='./editar_reserva.php?id=".$row['id_marcacao']."' style='font-size: small;'>Editar</a>&nbsp;
                                <a class='btn btn-danger btn-sm' href='./apagar_reserva_bd.php?id=".$row['id_marcacao']."' style='font-size: small;'>Apagar</a>&nbsp;
                            </td>
                        </tr>
                        ";
                    }
                }
    }
    ?>
        </table>
    </div>
    </body>
     <br>
    <?php include "./footer.php" ?>