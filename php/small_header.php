<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head lang="pt-pt">
	<meta charset="UTF-8">
	<!-- Coloca o icone no separador do navegador-->
	<link rel="shortcut icon" href="../img/logo.jpg" type="image/jpg" />
	<!-- Importa para o projeto as bibliotecas Bootstrap CSS e JS -->
        <!--tailwindcss framework
        <script src="https://cdn.tailwindcss.com"></script> 
        -->
        <!--bootstrap framework 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        -->
	
    <!-- Importa a fonte "Audiowide" da Google diretamente do alojamento online-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

    <!-- Importa para o projeto as definições de utilizador CSS localizadas na pasta css-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
	
	<style type="text/css">
		.logoutButton {
	 		background:url('../img/logout.png') no-repeat; 
	 		cursor:pointer;
	 		width: 50px;
	 		height: 50px;
	 		border-radius: 30px;
	 		border: none;
	 		font-size:0%;
		}
	</style>
	
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Expires" content="Sat, 01 Dec 2001 00:00:00 GMT">
	
	<title>HappytoHelp</title>

</head>
			<a name="iniciopagina"></a>
<body> 
	<header>
		<div style="background-color: rgb(156, 217, 194); color: white; 
			font-family: 'Audiowide', sans-serif; min-height: 90px; 
			margin-top: 5px; text-align: center;">
			<div class="row">
				<div class="col-lg-2 col-md-4" style="margin-top:10px;">
					<a href="./index.php">
					<img src="../img/alphabet-2082550_960_720.png"
						alt="" 
						style="width: 115px; height: 80px; border-radius: 10px; margin-top:15px">
					</a>
				</div>
				<div class="col-lg-8 col-md-4" style="margin-top:25px; color:beige">
					<h2>HappytoHelp</h2>
					<h3>H&H</h3>
				</div>
				<div class="col-lg-2 col-md-4" style='margin-top: 15px; font-size: 15px; color:beige'>
					<?php if(isset($_SESSION['userName'])){ ?>
								<form action="./logout.php" method='post'>
									<input type='submit' value='Logout' class='logoutButton'>
								</form>
								<h5>Bem vindo <?php echo $_SESSION['userName'] ?></h5>
					  <?php }else{ ?>
								<a href="./login.php"><img src="../img/logIn.png" alt='login' 
								style='width: 50px; height: 50px; border-radius: 20px;'></a>
								<br><h5>Para aceder ao menu das reservas, efectue o Login!</h5>
					<?php } ?>
				</div>
			</div>
		</div>
		<br>

	</header>
	<br>
	<br>
	