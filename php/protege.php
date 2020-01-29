<?php
	$usuario = $_COOKIE["usuario"];
	if(!isset($usuario)){
		echo "<script>alert('Você não está logado! Faça login antes de acessar está pagina!');window.location.href = '../index.html';</script>";
	}
