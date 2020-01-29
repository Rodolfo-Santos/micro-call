<?php
	include "protege.php";
	$usuario = $_COOKIE['usuario'];
	$funcao = $_COOKIE['funcao'];
?>
<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<title>Sistema de Atendimento - Microcamp SJC</title>
	<link href="../css/style.css" rel="stylesheet">
	<link rel="icon" type="image/ico" href="\img\favicon.png">
</head>



<body class="bg-color1 text-white">
	<?php include "menu.php"; ?>

	<main class="min-h-100">
		<div class="container bloco_conteudo">
			<div id="box-atendimento" class="box-atendimento">
				<h3 class="text-center my-4 animated fadeInRight">Cadastrar <span class="text-color2"> Atendimento </span></h3>
				<form role="form" action="cadastra.php" method="post">
					<div class="form-group animated fadeInLeft delay-03s">
						<label for="setor">Setor de destino * </label>
						<select name="setor" class="form-control" id="setor">
							<option value="1">Coordenação</option>
							<option value="3">Financeiro</option>
						</select>
					</div>
					<div class="form-group animated fadeInLeft delay-05s">
						<label for="cliente">Nome do cliente * </label>
						<input type="text" class="form-control" id="cliente" name="cliente" maxlength="50" required>
					</div>
					<div class="form-group animated fadeInLeft delay-07s">
						<label for="ctr">CTR</label>
						<input type="text" class="form-control" id="ctr" maxlength="9" name="ctr">
					</div>
					<div class="form-group animated fadeInLeft delay-09s">
						<label for="observacoes">Observação</label>
						<textarea class="form-control" id="observacoes" maxlength="255" name="observacoes"></textarea>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-color2 btn-large animated fadeInUp delay-1s">Cadastrar</button>
					</div>
				</form>
			</div>
		</div>

		<footer class="d-flex text-muted w-100 d-flex justify-content-center">
		<p> Microcamp São José dos Campos - Desenvolvido por <a href="https://rodolfo-santos.github.io/" target="_blank" class="text-muted"> Rodolfo Santos </a> © </p>
	</footer>
	</main>


	<!--SCRIPTS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/menu.js"></script>

	<!--FIM SCRIPTS-->
</body>

</html>