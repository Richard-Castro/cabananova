<?php

session_start();

require_once('conexao.php');
 
$ID_CLIENTE      = $_SESSION['ID_CLIENTE']; 
$ID_TIPO_IMOVEL  = $_POST['ID_TIPO_IMOVEL'];
$ID_GRUPO_IMOVEL = $_POST['ID_GRUPO_IMOVEL'];
$QUARTOS	     = $_POST['QUARTOS'];
$SUITES          = $_POST['SUITES'];
$AREA_UTIL       = $_POST['AREA_UTIL'];
$AREA_TOTAL      = $_POST['AREA_TOTAL'];
$VAGAS           = $_POST['VAGAS'];
$CEP             = $_POST['CEP'];
$ID_ESTADO 	     = $_POST['ID_ESTADO'];
$ID_CIDADE       = $_POST['ID_CIDADE'];
$ID_BAIRRO       = $_POST['ID_BAIRRO'];
$BANHEIROS		 = $_POST['BANHEIROS'];
$LOGRADOURO      = $_POST['LOGRADOURO'];
$NUMERO_IMOVEL   = $_POST['NUMERO_IMOVEL'];
$COMPLEMENTO     = $_POST['COMPLEMENTO'];
$VALOR           = $_POST['VALOR'];

$objBd = new bd();
$link = $objBd->conecta_mysql();

	
$sql = "INSERT INTO imovel(ID_CLIENTE, ID_TIPO_IMOVEL, ID_GRUPO_IMOVEL, QUARTOS, SUITES, AREA_UTIL, AREA_TOTAL, VAGAS, CEP, ID_ESTADO, ID_CIDADE, ID_BAIRRO, BANHEIROS, LOGRADOURO, NUMERO_IMOVEL, COMPLEMENTO, VALOR)values('$ID_CLIENTE','$ID_TIPO_IMOVEL','$ID_GRUPO_IMOVEL','$QUARTOS','$SUITES','$AREA_UTIL','$AREA_TOTAL','$VAGAS','$CEP','$ID_ESTADO','$ID_CIDADE','$ID_BAIRRO','$BANHEIROS','$LOGRADOURO','$NUMERO_IMOVEL','$COMPLEMENTO','$VALOR') ";


if(mysqli_query($link, $sql)){
	echo header("Location: cadastro_imovel_segundo.php");
}else {
	echo "Erro ao tentar inserir o registro" . mysqli_error($link);
}

?> 