<?php include "./small_header.php" ?>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-8 col-xl-4">
        <img src="../img/calendário.jpg" alt="" style="width: 80%; border-radius: 10px; margin-top: -60px;"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-4 col-lg-4 col-xl-4 offset-xl-1">
      	<p style="background-color:rgb(156, 217, 194) ; color: beige;
      	 font-family: 'Audiowide', sans-serif; font-size: 20px;
      	  text-align: center;  border-radius: 10px;  line-height: 40px;">
      	Entrar na área reservada</p>
        <form action='./verify_login.php' method="post">
          <div class="form-outline mb-3">
            <input type="text" id="form3Example3" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira o nome" name="username"/>
          </div>
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg" style="background-color: rgb(75, 74, 74); color:beige"
              placeholder="Insira a palavra passe" name="password"/>
          </div>
          <br>
          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Relembrar
              </label>
            </div>
            <a href="#!" class="text-body" style="color: MidnightBlue;">Esqueceu a Palavra Passe?</a>
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem; 
              background-color: rgb(75, 74, 74) ; color: rgb(15, 240, 240);" 
              value="Entrar">

            <p class="small fw-bold mt-2 pt-1 mb-0">Ainda não tem conta? 
            <a href="./criar_nova_conta.php" class="link-danger" style="color: MidnightBlue;">Criar novo registo</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

</body>
<?php include "./footer.php" ?>
</html>