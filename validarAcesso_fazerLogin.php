<?php

session_start();

require_once('conexao.php');

$EMAIL  = $_POST['EMAIL'];
$SENHA  = md5($_POST['SENHA']);

$objBd = new bd();
$link = $objBd->conecta_mysql();


$sql = "SELECT * FROM cliente WHERE EMAIL = '$EMAIL' AND SENHA = '$SENHA' ";


$resultado_id = mysqli_query($link, $sql);

if($resultado_id){
	$dados_usuario = mysqli_fetch_array($resultado_id);

	if(isset($dados_usuario['EMAIL'])){

		$_SESSION['EMAIL'] = $dados_usuario['EMAIL'];
		$_SESSION['SENHA'] = $dados_usuario['SENHA'];
		$_SESSION['NOME'] = $dados_usuario['NOME'];
		$_SESSION['ID_CLIENTE'] = $dados_usuario['ID_CLIENTE'];


		header('Location: cadastro-imovel.php');
	}else{
		header('Location: fazerLogin.php?erro=1');
	}

}else{
	echo 'Erro na execução da consulta! Por favor, entre em contato com o admin do site';
}

?>