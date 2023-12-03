<?php include "./small_header.php" ?>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-8 col-xl-4">
        <img src="../img/calendário.jpg" alt="" style="width: 80%; border-radius: 10px; margin-top: -60px;"
          class="img-fluid" alt="">
      </div>
      <div class="col-md-4 col-lg-4 col-xl-4 offset-xl-1">
      	<p style="background-color: rgb(156, 217, 194); color: beige;
      	 font-family: 'Audiowide', sans-serif; font-size: 20px;
      	  text-align: center;  border-radius: 10px;  line-height: 40px;">
      	Criar nova conta</p>
        <form action='./criar_nova_conta_bd.php' method="post">
          <div class="form-outline mb-3">
            <input type="text" id="form3Example3" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira o username" name="username"/>
          </div>
          <div class="form-outline mb-3">
            <input type="text" id="form3Example3" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira o Nome e Apelido" name="nome_apelido"/>
          </div>
          <div class="form-outline mb-3">
            <input type="text" id="form3Example3" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira o email" name="email"/>
          </div>
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira a palavra passe" name="password"/>
          </div>
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira a data de Nascimento" name="aniversario"/>
          </div>
          <br>
          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem; 
              background-color:rgb(75, 74, 74) ; color: rgb(15, 240, 240);" 
              value="Criar">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

</body>
<?php include "./footer.php" ?>
</html>