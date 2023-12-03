<?php include "./small_header.php" ?>

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
      	Nova Marcação</p>
        <form action='./nova_marcacao_bd.php' method="post">
          <div class="form-outline mb-3">
            <input type="text" id="form3Example3" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira o Nome" name="name"/>
          </div>
          <div class="form-outline mb-3">
            <input type="text" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Piscina ou Spa?" name="tipo_servico"/>
          </div>
          <div class="form-outline mb-3">
            <input type="text" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="É Adulto ou Criança?" name="adulto_crianca"/>
          </div>
          <div class="form-outline mb-3">
            <input type="number" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira a sua Idade" name="idade"/>
          </div>
          <div class="form-outline mb-3">
            <input type="text" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Opcional" name="genero"/>
          </div>
          <div class="form-outline mb-3">
            <input type="date" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira a Data Pretendida" name="data"/>
          </div>
          <div class="form-outline mb-3">
            <input type="text" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira o Período" name="periodo"/>
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