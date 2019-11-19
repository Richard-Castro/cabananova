<?php

	require_once('conexao.php');
	session_start();

	
$objBd = new bd();
$link = $objBd->conecta_mysql();

$ID_IMOVEL     = $_POST['ID_IMOVEL'];
$DESCRICAO     = $_POST['DESCRICAO'];
$QUARTOS       = $_POST['QUARTOS'];
$SUITES        = $_POST['SUITES'];
$VAGAS         = $_POST['VAGAS'];
$LOGRADOURO    = $_POST['LOGRADOURO'];
$NUMERO_IMOVEL = $_POST['NUMERO_IMOVEL'];
$VAGAS         = $_POST['VAGAS'];
$VALOR         = $_POST['VALOR'];

$sql = "UPDATE imovel SET ID_IMOVEL='$ID_IMOVEL', DESCRICAO='$DESCRICAO', QUARTOS='$QUARTOS', SUITES='$SUITES', VAGAS='$VAGAS', LOGRADOURO='$LOGRADOURO', NUMERO_IMOVEL='$NUMERO_IMOVEL', VAGAS='$VAGAS', VALOR='$VALOR' WHERE ID_IMOVEL='$ID_IMOVEL'";


if(mysqli_query($link, $sql)){

		
		echo ("Dados alterados com sucesso");
	
	}else {

			echo "Erro ao tentar inserir o registro" . mysqli_error($link);
		}
	