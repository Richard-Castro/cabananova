<?php include_once("conexao.php");


$objBd = new bd();
$link = $objBd->conecta_mysql();

	$id_categoria = $_REQUEST['id_categoria'];

	$result_sub_cat = "SELECT * FROM tipo_imovel WHERE ID_GRUPO_IMOVEL=$id_categoria ORDER BY DESCRICAO";
	$resultado_sub_cat = mysqli_query($link, $result_sub_cat);
	
	while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
		$sub_categorias[] = array(
			'ID_TIPO_IMOVEL'     => $row_sub_cat['ID_TIPO_IMOVEL'],
			'DESCRICAO' => utf8_encode($row_sub_cat['DESCRICAO']),
			);
}

echo(json_encode($sub_categorias)); 
?>