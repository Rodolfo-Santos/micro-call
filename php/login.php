<?php
	$user = $_POST["user"];
	$psw = $_POST["password"];
	
	require "conexao.php";
	
	$sql = "SELECT * FROM tbl_users WHERE user = ?";
	
	try{
		$busca = $pdo->prepare($sql);
		$busca->bindValue(1,$user,PDO::PARAM_STR);
		$busca->execute();
	}
	catch(PDOexception $error_sql)
	{
		echo "Erro ao retornar os Dados.".$error_sql->getMessage();
	}
	
	$linha = $busca->fetch(PDO::FETCH_ASSOC);
	
	$usuario = $linha["user"];
	$senha = $linha["password"];
	$funcao = $linha["function"];
	
	if($usuario == ""){
		echo "<script>alert('Usuário não existe!');window.history.go(-1);</script>";
	}else if($psw != $senha){
		echo "<script>alert('Senha Inválida!');window.history.go(-1);</script>";
	}else if($funcao != "3"){
		setcookie("usuario",$usuario);
		setcookie("funcao",$funcao);
		echo "<script>location.replace('index.php');</script>";
	}else{
		setcookie("usuario",$usuario);
		setcookie("funcao",$funcao);
		echo "<script>location.replace('index.php');</script>";
	}