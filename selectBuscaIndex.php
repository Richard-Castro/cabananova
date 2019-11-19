<?php

	require_once('conexao.php');


		$objBd = new bd();
		$link = $objBd->conecta_mysql();

		$request = mysqli_real_escape_string($link, $_POST["query"]);
		$query = "SELECT * FROM cidade
		INNER JOIN estado ON cidade.ID_ESTADO=estado.ID_ESTADO
		WHERE NOME_CIDADE LIKE '%".$request."%'";

		$result = $link->query($query);

		//$data = array();

		if(mysqli_num_rows($result) > 0)
		{
			while($result_sql = mysqli_fetch_assoc($result))
			{
				
				$data[] = $result_sql['NOME_CIDADE'].' - ' .$data[] = $result_sql['UF'];
			}
			echo json_encode($data);

			
		}

?>