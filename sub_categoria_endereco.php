<?php include_once("conexao.php");


$objBd = new bd();
$link = $objBd->conecta_mysql();

	$id_estado = $_REQUEST['id_estado'];

	$result_sub_cat = "SELECT * FROM cidade WHERE ID_ESTADO=$id_estado ORDER BY NOME_CIDADE";
	$resultado_sub_cat = mysqli_query($link, $result_sub_cat);// or die  $link->error;

	while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
		$sub_categorias[] = array(
			'ID_CIDADE'     => $row_sub_cat['ID_CIDADE'],
			'NOME_CIDADE' => $row_sub_cat['NOME_CIDADE'],
			);
}

echo(json_encode($sub_categorias)); 
?>