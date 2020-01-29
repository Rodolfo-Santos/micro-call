<?php
	include "protege.php";
	date_default_timezone_set('America/Sao_Paulo');
	$usuario = $_COOKIE['usuario'];
	$nome = $_POST["cliente"];
	$obs = $_POST["observacoes"];
	$setor = $_POST["setor"];
	$ctr = $_POST["ctr"];
	$data = date("d/m/Y");
	$hora = date("H:i:s");
	require "conexao.php";
	$sql = "INSERT INTO tbl_atendimentos (nome, observacoes, usuario, data, hora, ctr, setor) VALUES (?,?,?,?,?,?,?)";
	try{
		$insere = $pdo->query("SET NAMES utf8");
		$insere = $pdo->prepare($sql);
		$insere->bindValue(1,$nome,PDO::PARAM_STR);
		$insere->bindValue(2,$obs,PDO::PARAM_STR);
		$insere->bindValue(3,$usuario,PDO::PARAM_STR);
		$insere->bindValue(4,$data,PDO::PARAM_STR);
		$insere->bindValue(5,$hora,PDO::PARAM_STR);
		$insere->bindValue(6,$ctr,PDO::PARAM_STR);
		$insere->bindValue(7,$setor,PDO::PARAM_STR);
		$insere->execute();
	}
	catch(PDOexception $error_sql)
	{
		echo "Erro ao retornar os Dados.".$error_sql->getMessage();
	}
	if($insere){
		echo "<script>alert('Atendimento cadastrado com sucesso!');location.replace('atendimento.php');</script>";		
	}else{
		echo "<script>alert('Erro no cadastro do atendimento!');location.replace('atendimento.php');</script>";		
	}