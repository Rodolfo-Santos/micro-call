<?php
	include "protege.php";
	$id = $_GET["id"];
	require "conexao.php";
	$sql = "DELETE FROM tbl_atendimentos WHERE id = ?";
	$deleta = $pdo->prepare($sql);
	$deleta->bindValue(1,$id,PDO::PARAM_STR);
	$deleta->execute();
	if($deleta){
		header('Location: lista.php');
	}else{
		echo "Erro ao apagar o atendimento!";
	}