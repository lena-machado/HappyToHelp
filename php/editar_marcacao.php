<?php include "./small_header.php" ?>

<?php

  $id_marcacao = $_GET['id'];

  if ($_SESSION['userName'] == null){
    header("location: ./index.php");
    exit();
  }else{

    #criar a ligação à BD
    include "./mysql_db_connect.php";

    # Editar a query de uma marcação
    $query_user = "SELECT * FROM termas WHERE id_marcacao='$id_marcacao'";

    # realiza a query
    $result_query_user = mysqli_query( $conn, $query_user) or die(' Erro na query:' . $query_user . ' ' . mysqli_error($conn) );

    $row = mysqli_fetch_array( $result_query_user);
  }
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
      	Editar Marcação</p>
        <form action='./editar_marcacao_bd.php' method="post">
          <div class="form-outline mb-3">
            <input type="hidden" name="id_marcacao" value="<?php echo $id_marcacao ?>"/>
            <input type="text" id="form3Example3" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira o Nome" name="name" value="<?php echo $row['name'] ?>"/>
          </div>
          <div class="form-outline mb-3">
            <input type="text" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira o Tipo de Serviço" name="tipo_servico" value="<?php echo $row['tipo_servico'] ?>"/>
          </div>
          <div class="form-outline mb-3">
            <input type="text" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="É Adulto ou Criança?" name="adulto_crianca" value="<?php echo $row['adulto_crianca'] ?>"/>
          </div>
          <div class="form-outline mb-3">
            <input type="number" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira a sua idade" name="idade" value="<?php echo $row['idade'] ?>"/>
          </div>
          <div class="form-outline mb-3">
            <input type="text" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Sexo Masculino ou Feminino?" name="genero" value="<?php echo $row['genero'] ?>"/>
          </div>
          <div class="form-outline mb-3">
            <input type="date" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira a data pretendida" name="data" value="<?php echo $row['data'] ?>"/>
          </div>
          <div class="form-outline mb-3">
            <input type="text" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Pretende de Manhã ou de tarde?" name="periodo" value="<?php echo $row['periodo'] ?>"/>
          </div>
          <textarea id="form3Example4" class="form-control form-control-lg" style="color:rgb(75, 74, 74)"
              placeholder="Observações" name="obs" rows="3">
              <?php echo $row['obs'] ?>
          </textarea>
          <hr/>
          
          <div class="text-lg-start mt-4 pt-2">
            <div class="text-center">
              <input type="submit" class="btn btn-primary btn-sm"
                style="padding-left: 2.5rem; padding-right: 2.5rem; 
                background-color: rgb(75, 74, 74); color: rgb(15, 240, 240)"
                value="Atualizar">
              <a class="btn btn-primary btn-sm"
                style="padding-left: 2.5rem; padding-right: 2.5rem; 
                background-color: rgb(75, 74, 74); color: rgb(15, 240, 240)"
                href='./lista_marcacoes.php'>Cancelar</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

</body>
<?php include "./footer.php" ?>
</html>