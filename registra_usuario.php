<?php

session_start();

require_once('conexao.php');

$NOME = $_POST['NOME'];
$EMAIL 	 = $_POST['EMAIL'];
$CONFIRMADO_EMAIL  = $_POST['CONFIRMADO_EMAIL'];
$SENHA 	 = md5($_POST['SENHA']);
$CONFIRMADO_SENHA  = md5($_POST['CONFIRMADO_SENHA']);

$objBd = new bd();
$link = $objBd->conecta_mysql();

$usuario_existe = false;
$email_existe  = false;

$sql = " SELECT * FROM cliente WHERE NOME = '$NOME' ";
if($resultado_id = mysqli_query($link,$sql)){

	$dados_usuario = mysqli_fetch_array($resultado_id);
	if(isset($dados_usuario['NOME'])){
		$usuario_existe = true;
		}

	}else {
		
	echo 'Erro ao tentar localizar o registro de usuário no banco de dados';

}

$sql = " SELECT * FROM cliente WHERE EMAIL = '$EMAIL' ";
if($resultado_id = mysqli_query($link,$sql)){

	$dados_usuario = mysqli_fetch_array($resultado_id);
	if(isset($dados_usuario['EMAIL'])){
		$email_existe = true;
	}

}else {
	echo 'Erro ao tentar localizar o registro de usuário no banco de dados';

}

if($usuario_existe || $email_existe){

	$retorno_get = '';

	if($usuario_existe){
		$retorno_get.= "erro_usuario=1&";
	}
	if($email_existe){
		$retorno_get.= "erro_email=1&";
	}
	header("Location: index.php?".$retorno_get);

	die();
}



$sql = "INSERT INTO cliente(NOME, EMAIL, CONFIRMADO_EMAIL, SENHA, CONFIRMADO_SENHA)VALUES('$NOME','$EMAIL','$CONFIRMADO_EMAIL','$SENHA','$CONFIRMADO_SENHA')";


if(mysqli_query($link, $sql)){
	header("Location: home.php");
}else {
	echo 'Erro ao tentar inserir o registro';

}
?>