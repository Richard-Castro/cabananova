<?php

class bd {

	private $host = 'localhost';

	private $user = 'root';

	private $password = '';

	private $database = 'cabananova';

	public function conecta_mysql(){

		$con = mysqli_connect($this->host, $this->user, $this->password, $this->database) or die("Erro ao conectar ao servidor: ".mysql_error());
		/*mysqli_select_db()or die("Erro ao selecionar o banco de dados: ".mysqli_error());*/
		mysqli_set_charset($con,"utf8");
		/*mysql_query("SET NAMES 'utf8'");
		mysql_query("SET character_set_connection=utf8");
		mysql_query("SET character_set_client=utf8");
		mysql_query("SET character_set_results=utf8");*/
		if(mysqli_connect_error()){
			echo "Erro ao tentar se conectar com o BD Mysql: " . mysqli_error();
		}
		return $con;
	}

}
?>