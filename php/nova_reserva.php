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

    # Criar a query de reservas
    $query_user = "SELECT * FROM museunadirafonso ";

    # realiza a query de toda a reserva
    $result_query_select_all = mysqli_query( $conn, $query_user) or die(' Erro na query:' . $query_user . ' ' . mysqli_error($conn) );

    mysqli_close($conn);//fechar a ligação à bd

?>     

            <section class="vh-100">
                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-8 col-lg-8 col-xl-4">
                        <img src="../img/img_index.jpg" alt="" style="width: 80%; border-radius: 10px; margin-top: -60px;"
                        class="img-fluid" alt="Sample image">
                </div>
            <div class="col-md-4 col-lg-4 col-xl-4 offset-xl-1">
                <p style="background-color:rgb(156, 217, 194) ; color: beige;
                        font-family: 'Audiowide', sans-serif; font-size: 20px;
                        text-align: center;  border-radius: 10px;  line-height: 40px;">
      	    Nova Reserva</p>
            
          <form action="./nova_reserva_bd.php" method="post">
          <div class="form-outline mb-3">
            <input type="text" id="form3Example3" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira o Nome" name="name"/>
          </div>
          <div class="form-outline mb-3">
            <input type="text" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Manhã ou Tarde?" name="periodo"/>
          </div>
          <div class="form-outline mb-3">
            <input type="date" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Selecione a data" name="data"/>
          </div>
          <div class="form-outline mb-3">
            <input type="number" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Selecione o num de Adultos" name="num_adultos"/>
          </div>
          <div class="form-outline mb-3">
            <input type="number" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Selecione o num de Criancas" name="num_criancas"/>
          </div>
          <textarea id="form3Example4" class="form-control form-control-lg" 
              placeholder="Observações" name="obs" rows="3">
          </textarea>
          <hr/>
          <div class="text-lg-start mt-4 pt-2">
            <div class="text-center">
              <input type="submit" class="btn btn-primary btn-sm"
                style="padding-left: 2.5rem; padding-right: 2.5rem; 
                background-color: rgb(75, 74, 74); color: rgb(15, 240, 240)"
                value="Criar">
              <a class="btn btn-primary btn-sm"
                style="padding-left: 2.5rem; padding-right: 2.5rem; 
                background-color: rgb(75, 74, 74); color: rgb(15, 240, 240)"
                href='../lista_reservas.php'>Cancelar</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
      
<?php
            while ($row = mysqli_fetch_array( $result_query_select_all )) {
                echo "
                ";
            }
    }
?>         
    </body>
<br>
    <?php include "./footer.php" ?>