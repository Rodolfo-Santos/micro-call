<?php
	include "protege.php";
	$usuario = $_COOKIE['usuario'];
	$funcao = $_COOKIE['funcao'];
?>


<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Sistema de Atendimento - Microcamp SJC</title>
	<link href="../css/style.css" rel="stylesheet">
	<link href="../	css/base/animate.css" rel="stylesheet">
	<link rel="icon" type="image/ico" href="\img\favicon.png">

</head>

<body class="bg-color1">
	<?php include "menu.php"?>

	<main class="h-100">
		<div class="container bloco_conteudo">

			<img src="../img/fundo02.svg" alt="" class="img-fundo animated fadeIn">

			<div id="form_login" class="form_login">
				<h1 class="text-white animated bounceInRight">Bem vindo de volta <span class="text-color2">
						<?php if($usuario =="coordenacao"){
									echo "Coordenação";
							} else if($usuario == "recepcao"){
									echo "Recepção";
							} else echo "Financeiro" 
					?></span></h1>
				<p class="text-muted animated bounceInRight delay-05s"> Escolha uma das opções abaixo </p>

				<div class="d-flex flex-column">
					<a href="atendimento.php" class="btn btn-menu btn-color2 my-4 animated fadeInUp">
						Cadastrar Atendimento
					</a>

					<a href='lista.php' class="btn btn-menu btn-color2 animated fadeInUp">
						Lista de Atendimento
					</a>
				</div>
			</div>
		</div>

		<footer class="d-flex text-muted w-100 d-flex justify-content-center">
			<p> Microcamp São José dos Campos - Desenvolvido por <a href="https://rodolfo-santos.github.io/" target="_blank"
					class="text-muted"> Rodolfo Santos </a> © </p>
		</footer>
	</main>

	<!-- <section class="container d-flex flex-wrap h-100 align-items-center">


				<a href='lista.php'>
					<li class="bloco-menu">Lista</li>
				<a href="javascript:func()" onClick="sair();">
					<li class="bloco-menu">Sair</li>
				</a>
			</ul>
		</section> -->

	<!--SCRIPTS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/menu.js"></script>
	<!--FIM SCRIPTS-->

	<script>

	</script>
</body>

</html>