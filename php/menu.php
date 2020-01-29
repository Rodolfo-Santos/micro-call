<nav class="navbar navbar-expand-lg navbar-dark bg-color1 position-fixed w-100">
	<div class="container">
		<a class="navbar-brand " href="#">Micro<span class="text-color2">Call</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item delay-05s">
					<a class="nav-link" href="index.php"> Início </a>
				</li>
				<li class="nav-item  delay-05s">
					<a class="nav-link" href="atendimento.php">Cadastrar Atendimento</a>
				</li>
				<li class="nav-item  delay-05s">
					<a class="nav-link" href="lista.php">Lista de Atendimento</a>
				</li>
				<li class="nav-item  delay-05s">
					<a class="nav-link" href="javascript:func()" onClick="sair();">Sair</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<script>
	function sair() {
		var resposta = confirm("Deseja realmente sair?");
		if (resposta == true) {
			window.location.href = "logout.php";
		} else {
			window.location.href = "#";
		}
	}

</script>