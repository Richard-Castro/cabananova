<?php
	
session_start();

	include('conexao.php');

	$ID_CLIENTE      = $_SESSION['ID_CLIENTE']; 


	/*$arquivos = $_POST['arquivos'];

	 DESCOMENTAR PARA DEBUG
	echo '<pre>';
		print_r($_FILES);
	echo '<pre>';
	
	//verifica quantos arquivos estão sendo recebidos na superglobal $)FILES
	//$total_arquivos = count($_FILES['arquivos']['name']);
	
	//diretório de upload
	//$diretorio_upload = './uploads/';

	//percorre cada arquivo
	//for ($i=0; $i < $total_arquivos; $i++) {
				
		/* DESCOMENTAR PARA DEBUG
		echo $_FILES['arquivos']['name'][$i].' - ';
		echo $_FILES['arquivos']['type'][$i].' - ';
		echo $_FILES['arquivos']['tmp_name'][$i].' - ';
		echo $_FILES['arquivos']['error'][$i].' - ';
		echo $_FILES['arquivos']['size'][$i];
		echo '<hr />';
		*/
		
		
		/*move o arquivo temporario para o destino
		$arquivo_upload = $diretorio_upload . basename($_FILES['arquivos']['name'][$i]);
		if (move_uploaded_file($_FILES['arquivos']['tmp_name'][$i], $arquivo_upload)) {
			echo "Sucesso<br />";
		} else {
			echo "Erro<br />";
		}

		$objBd = new bd();
		$link = $objBd->conecta_mysql();

        $sql = "insert into imoveis(arquivos) value ('$arquivos')";
	
	if (mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
		}else{
			echo 'Erro ao inserir o registro';
		}
	//}

	

?>*/



	
	$msg = false;


	if(isset($_FILES['ARQUIVOS'])){
		"arquivo.jpg";

		$extensao = strtolower(substr($_FILES['ARQUIVOS']['name'], -4));
		$novo_nome = md5(time()) . $extensao;
		$diretorio = "uploads/";

		move_uploaded_file($_FILES['ARQUIVOS']['tmp_name'], $diretorio.$novo_nome);


		
		$objBd = new bd();
		$link = $objBd->conecta_mysql();

		$sql = "INSERT INTO imagem (ID_CLIENTE, ARQUIVOS, DATA_UPLOAD) VALUES ('$ID_CLIENTE','$novo_nome', NOW())";

		if(mysqli_query($link, $sql))
			header('Location: cadastro_imovel_segundo.php');
		else
			$msg = "Falha ao enviar arquivo.";

	}

?>