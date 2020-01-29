<?php
	include "protege.php";
	$usuario = $_COOKIE['usuario'];
	$funcao = $_COOKIE['funcao'];
	error_reporting(0);
?>

<html lang="pt-br">

<head>
	<meta http-equiv="refresh" content="20">
	<meta charset="UTF-8">
	<title>Sistema de Atendimento - Microcamp SJC</title>
	<link href="../css/style.css" rel="stylesheet">
	<link rel="icon" type="image/ico" href="\img\favicon.png">

</head>

<body class="bg-color1 text-white">

	<?php require "conexao.php";
		$sql = "SELECT * FROM tbl_atendimentos ORDER BY id ASC";
		try{
			$busca = $pdo->query("SET NAMES utf8");
			$busca = $pdo->prepare($sql);
			$busca->execute();
		}

		catch(PDOexception $error_sql) {
			echo "Erro ao retornar os Dados.".$error_sql->getMessage();
		}
	?>

	<?php include "menu.php"; ?>

	<main class="min-h-100">
		<div class="container flex-column">
			<h3 class="titulo-lista text-upper">
				Lista de Atendimento
			</h3>

			<h3 class="h-50 m-4 p-4 text-muted none-atendimento d-flex justify-content-center align-items-center">Nenhum atendimento pendente!</h3>

			<ul class="p-0 mt-4 pt-4">
				<?php while($linha = $busca->fetch(PDO::FETCH_ASSOC)) {
						$setor = $linha["setor"];
					if($setor == $funcao){
						$nome = $linha["nome"];
						$id = $linha["id"];
						$setor = $linha["setor"];
					if($setor == 1){
						$setor1 = "Coordenação";
					}else{
						$setor1 = "Financeiro";
					}
				?>

				<script>
					var id = <?= $id ?> ;
					var msg = document.querySelector('.none-atendimento');
					var pai = msg.parentNode;
					pai.removeChild(msg);
				</script>

				<?php if($linha["usuario"] == "coordenacao"){ ?>
				<li class="box-lista coord-card" id="at<?= $id ?>">
					<?php } ?>
					<?php if($linha["usuario"] == "financeiro"){ ?>
				<li class="box-lista financeiro-card" id="at<?= $id ?>">
					<?php } ?>
					<?php if($linha["usuario"] == "recepcao"){ ?>
				<li class="box-lista recepcao-card" id="at<?= $id ?>">
					<?php } ?>
					<div class="d-flex justify-content-between align-items-start">
						<div class="d-flex align-items-start">
							<h3 class="m-0 p-0"> <?= $linha["nome"]?> </h3>
						</div>
						<div class="d-flex align-items-start justify-content-end pb-1 text-muted">
							<p class="mr-4 p-0 pb-1 pl-2 text-muted"> CTR: <?= $linha["ctr"]?> </p>
							<div class="d-flex flex-column justify-content-end align-items-center">
								<div class="data w-100 text-right">
									<?= $linha["data"]?>
								</div>
								<div class="hora">
									<?= $linha["hora"]?>
								</div>
							</div>
						</div>
					</div>

					<div class="obs mt-2 pl-1">
						<?= $linha["observacoes"]?>
					</div>

					<div class="linha"> </div>

					<div class="info d-flex flex-column justify-content-between pt-4 text-muted">
						<div>
							<div> <b>Enviado por:</b> <?= $linha["usuario"]?> </div>
							<div> <b>Para:</b> <?= $setor1?> </div>
						</div>
						<div class="remove d-flex justify-content-end">
							<?php if($funcao != 2){ ?>
							<div class="btn-remove" id="#remove<?= $id?>">Remover</div>
							<?php }}} ?>
						</div>
					</div>
				</li>

				<?php if($id > 0){ ?>
					<audio autoplay>
							<source src="../audio/notification.mp3" type="audio/mpeg">
					</audio>

					<script>
							console.log(id);
							let notification = new Notification('Clientes Aguardando Atendimento', {
							icon: '../img/atendimento.png',
							body: "Existem Clientes e Alunos esperando para serem atendidos.",
							silent: true
							});

					</script>
				<?php }	?>

			</ul>
		</div>
	</main>

	<footer class="d-flex text-muted w-100 d-flex justify-content-center">
		<p> Microcamp São José dos Campos - Desenvolvido por <a href="https://rodolfo-santos.github.io/" target="_blank"
				class="text-muted"> Rodolfo Santos </a> © </p>
	</footer>

	<!--SCRIPTS-->
	<script>
		let remove = document.querySelectorAll('.btn-remove');
		remove.forEach(btn => btn.addEventListener('click', function () {
			let idCard = this.getAttribute("id").slice(7)
			let card = document.querySelector("#at" + idCard)
			card.classList.add("animated", "fadeOutLeft")
			setTimeout(function () {
				window.location.replace("apagar.php?id=" + idCard);
			}, 1000)
		}))
	</script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/notification.js"></script>
	<script src="../js/menu.js"></script>

	<!--FIM SCRIPTS-->
</body>

</html>