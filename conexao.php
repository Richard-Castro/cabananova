<?php

class bd {

	private $host = 'localhost';

	private $user = 'root';

	private $password = '';

	private $database = 'cnova';

	public function conecta_mysql(){

		$con = mysqli_connect($this->host, $this->user, $this->password, $this->database) or die("Erro ao conectar ao servidor: " . mysqli_error());
		mysqli_set_charset($con,"utf8");
		
		if(mysqli_connect_error()){
			echo "Erro ao tentar se conectar com o BD Mysql: " . mysqli_error($con);
		}
		return $con;
	}

}/*private $host = 'mysql.hostinger.com.br';

	private $user = 'u487185890_user1';

	private $password = '3jS8PijVzYoT';

	private $database = 'u487185890_bd01';*/
?>
