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
$ARQUIVOS        = $_POST['ARQUIVOS'];

if(isset($_FILES['ARQUIVOS'])){
	$extensao = strtolower(substr($_FILES['ARQUIVOS']['name'], -4));
	$novo_nome = md5(time()) . $extensao;
	//diretório de upload
	$diretorio_upload = "./uploads/";

	//percorre cada arquivo
	for ($i=0; $i < $extensao; $i++) {
				
		
		echo $_FILES['ARQUIVOS']['name'][$i].' - ';
		echo $_FILES['ARQUIVOS']['type'][$i].' - ';
		echo $_FILES['ARQUIVOS']['tmp_name'][$i].' - ';
		echo $_FILES['ARQUIVOS']['size'][$i];
		echo '<hr />';
		
		
		
		//move o arquivo temporario para o destino
		$arquivo_upload = $diretorio_upload . basename($_FILES['ARQUIVOS']['name'][$i]);
		move_uploaded_file($_FILES['ARQUIVOS']['tmp_name'][$i], $arquivo_upload);
        
	}
}



$objBd = new bd();
$link = $objBd->conecta_mysql();

	
$sql = "INSERT INTO imovel(ID_CLIENTE, ID_TIPO_IMOVEL, ID_GRUPO_IMOVEL, QUARTOS, SUITES, AREA_UTIL, AREA_TOTAL, VAGAS, CEP, ID_ESTADO, ID_CIDADE, ID_BAIRRO, BANHEIROS, LOGRADOURO, NUMERO_IMOVEL, COMPLEMENTO, VALOR, ARQUIVOS, DATA_UPLOAD)values('$ID_CLIENTE','$ID_TIPO_IMOVEL','$ID_GRUPO_IMOVEL','$QUARTOS','$SUITES','$AREA_UTIL','$AREA_TOTAL','$VAGAS','$CEP','$ID_ESTADO','$ID_CIDADE','$ID_BAIRRO','$BANHEIROS','$LOGRADOURO','$NUMERO_IMOVEL','$COMPLEMENTO','$VALOR','$novo_nome', NOW()) ";


	if(mysqli_query($link, $sql)){
		
		echo header("Location: paginaPlanos.php");

	}else {
		echo "Erro ao tentar inserir o registro" . mysqli_error($link);
	}


?> 