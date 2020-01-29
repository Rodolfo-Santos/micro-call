<?php
	include "protege.php";
	require "conexao.php";
	$sql = "TRUNCATE tbl_atendimentos";
	$deleta = $pdo->prepare($sql);
	$deleta->execute();
	if($deleta){
		header('Location: lista.php');
	}else{
		echo "Erro ao apagar o atendimento!";
	}