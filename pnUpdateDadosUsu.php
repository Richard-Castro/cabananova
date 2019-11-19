<?php

	require_once('conexao.php');
	session_start();

$objBd = new bd();
$link = $objBd->conecta_mysql();

$ID_CLIENTE = $_SESSION['ID_CLIENTE'];
$NOME     = $_POST['NOME'];
$CPF_CNPJ = $_POST['CPF_CNPJ'];
$TELEFONE = $_POST['TELEFONE'];
$EMAIL    = $_POST['EMAIL'];

$sql = "UPDATE cliente SET NOME='$NOME', CPF_CNPJ='$CPF_CNPJ', TELEFONE_1='$TELEFONE', EMAIL='$EMAIL' WHERE ID_CLIENTE='$ID_CLIENTE'";

if(mysqli_query($link, $sql)){
		
		echo header("Dados alterados com sucesso");

	}else {
		echo "Erro ao tentar inserir o registro" . mysqli_error($link);
	}


