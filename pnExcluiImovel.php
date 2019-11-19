<?php
 require_once('conexao.php');

$objBd = new bd();
$link = $objBd->conecta_mysql();

$ID_IMOVEL = $_GET['ID_IMOVEL'];

 $sql = "DELETE FROM imovel WHERE ID_IMOVEL='$ID_IMOVEL'";
 $result = mysqli_query($link, $sql);
  
  if(!$result)
	echo("Falha ao executar o comando: ");
  else
	echo header("Location: painelControle.php");