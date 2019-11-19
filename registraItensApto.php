<?php

session_start();

require_once('conexao.php');


$ID_CLIENTE     = $_SESSION['ID_CLIENTE'];
$CONDOMINIO     = $_POST['CONDOMINIO'];
$NUMERO_ANDARES = $_POST['NUMERO_ANDARES'];
$UNIDADES_ANDAR = $_POST['UNIDADE_ANDAR'];
$ANO_CONSTRUCAO = $_POST['ANO_CONSTRUCAO'];
$IPTU 			= $_POST['IPTU'];


$objBd = new bd();
$link = $objBd->conecta_mysql();

$sql = "INSERT INTO itens_imovel_apta(ID_CLIENTE, CONDOMINIO, NUMERO_ANDARES, UNIDADES_ANDAR, ANO_CONSTRUCAO, IPTU) VALUES ('$ID_CLIENTE','$CONDOMINIO','$NUMERO_ANDARES','$UNIDADES_ANDAR','$ANO_CONSTRUCAO','$IPTU')";


if(mysqli_query($link, $sql)){
	echo header("Location: home.php");
}else {
	echo "Erro ao tentar inserir o registro" . mysqli_error($link);
}

?>s