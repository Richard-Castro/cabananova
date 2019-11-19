<?php
	
	require_once('conexao.php');
	session_start();

	$objBd = new bd();
	$link = $objBd->conecta_mysql();

	
	$ID_CLIENTE = $_SESSION['ID_CLIENTE'];
    

	$sql = "SELECT * FROM cliente WHERE cliente.ID_CLIENTE ='$ID_CLIENTE'";
	$result = mysqli_query($link, $sql);
	
	
	
	
	while($dado = mysqli_fetch_assoc($result))
	{ 

		
		?>

		<div class="item">
					<div class="container">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<i class="fas fa-address-card"></i>
										<label>Dados de cadastro</label>
									<form class ="form" action="pnUpdateDadosUsu.php" method="POST">

									<div class="col-md-4">
										<div>

											<label>NOME:
											<input type="text" name="NOME" id="nome" class="form-control" value="<?php echo $dado['NOME']; ?>" placeholder="Nome e Sobrenome" /></label>

										</div>
									</div>

									<div class="col-md-8">

										
									 <div class="col-md-6">
										<div>

											<label>CPF/CNPJ:
											<input type="text" name="CPF_CNPJ" id="nome" class="form-control" value="<?php echo $dado['CPF_CNPJ']; ?>" placeholder="CPF ou CNPJ"> </label>

										</div>
										<br />
										<div>

										 	<label>TELEFONE:
										 		<input type="text" name="TELEFONE" id="nome" class="form-control" value="<?php echo $dado['TELEFONE_1']; ?>" placeholder="Telefone"></label>

										</div>
										<br />
										<div>

												<label>E-MAIL:
													<input type="text" name="EMAIL" id="nome" class="form-control" value="<?php echo $dado['EMAIL']; ?>" placeholder="E-mail"></label>
												
											
										</div>
										<br />
										
									
									

								</div>
							</div>
							<button class="btn face btn-success" type="submit">Salvar</button>
							<button class="btn face btn-primary" id="editar">Editar</button>
							
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
				
		<?php }; ?>

<script>
	

	$(function(){
  	 setDisabled(true); 
   
   $("#editar").on("click", function(e){
       e.preventDefault();
       setDisabled(false);
   });
  
   $("#salvar").on("click", function(e){
       e.preventDefault();
        setDisabled(true);
   });
   
   function setDisabled(state){
     $('.form input, textarea').each(function(){
       $(this).prop("disabled", state);
     });
   }
});
		</script>
