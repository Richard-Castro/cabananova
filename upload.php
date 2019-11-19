<?php
	
session_start();

	include('conexao.php');

	$ID_CLIENTE = $_SESSION['ID_CLIENTE']; 
	$ARQUIVOS = $_POST['ARQUIVOS'];
	

	$msg = false;


	if(isset($_FILES['ARQUIVOS'])){
		"arquivo.jpg";

		$extensao = strtolower(substr($_FILES['ARQUIVOS']['name'], -4));
		$novo_nome = md5(time()) . $extensao;
		$diretorio = "upload/";

		move_uploaded_file($_FILES['ARQUIVOS']['tmp_name'], $diretorio.$novo_nome);


		
		$objBd = new bd();
		$link = $objBd->conecta_mysql();

		$sql = "INSERT INTO imagem (ID_CLIENTE, ARQUIVOS, DATA_UPLOAD) VALUES ('$ID_CLIENTE','$novo_nome', NOW())";

		if(mysqli_query($link, $sql))
			header('Location: cadastro_imovel_segundo.php');
		else
			$msg = "Falha ao enviar arquivo.";

	}


/*$msg = false;

if(isset($_FILES['ARQUIVOS'])){


	$extensao = strtolower(substr($_FILES['ARQUIVOS']['name'], -4));
	$novo_nome = md5(time()) . $extensao;
	$diretorio = "./uploads/";

	for ($i=0; $i < $total_arquivos; $i++) {
				
		
		echo $_FILES['ARQUIVOS']['name'][$i].' - ';
		echo $_FILES['ARQUIVOS']['type'][$i].' - ';
		echo $_FILES['ARQUIVOS']['tmp_name'][$i].' - ';
		echo $_FILES['ARQUIVOS']['error'][$i].' - ';
		echo $_FILES['ARQUIVOS']['size'][$i];
		echo '<hr />';

	move_uploaded_file($_FILES['ARQUIVOS']['tmp_name'], $diretorio.$novo_nome);
	}
}*/
?>