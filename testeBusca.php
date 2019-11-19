<?php

//fetch.php

require_once('conexao.php');


	$objBd = new bd();
	$link = $objBd->conecta_mysql();

if($_POST["query"] != '')
{
	$search_array = explode(",", $_POST["query"]);
	$search_text = "'" . implode("', '", $search_array) . "'";
	$query = "
	SELECT * FROM estado 
	WHERE NOME_ESTADO IN (".$search_text.") 
	ORDER BY CustomerID DESC
	";
}
else
{
	$query = "SELECT * FROM estado ORDER BY CustomerID DESC";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td>'.$row["NOME_ESTADO"].'</td>
			<td>'.$row["UF"].'</td>
			
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="5" align="center">No Data Found</td>
	</tr>
	';
}

echo $output;


?>