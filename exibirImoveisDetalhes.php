<?php

	include_once('conexao.php');

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/exibirImoveisDetalhes.css" rel="stylesheet" type="text/css" media="all"/>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>

	<nav class="menuSuperior">
	    <div class="container">
	        <div class="navbar-header">
	          <a href="home.php"><img src="images/iconsite.jpg"/ width="100px" height="50px"></a>
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li class="btnUsuario"><p><i class="fa fa-user"></i><a href="#"><?php echo $_SESSION['NOME']; ?></a></p></li>
	            <li class="btnSair"><p><i class="fa fa-sign-in"></i><a href="sair.php">Sair</a></p></li>
	          </ul>
	        </div>

	    </div>
	</nav>
	<section class="atalhoSuperior">

		<div class="col-md-12">

			<div class="itemAtalho" pull-left>
				<a href="home.php">voltar para home</a>
			</div>

		</div>

	</section>
	<section>
		<div class="panel panel-default">
			<div class="panel-body">
				<?php 


	$objBd = new bd();
	$link = $objBd->conecta_mysql();

	$ID_IMOVEL = $_GET['ID_IMOVEL'];

	$sql = "SELECT * FROM imovel
	          	INNER JOIN cidade  ON imovel.ID_CIDADE=cidade.ID_CIDADE
			  	INNER JOIN estado  ON imovel.ID_ESTADO=estado.ID_ESTADO
				INNER JOIN cliente ON imovel.ID_CLIENTE=cliente.ID_CLIENTE 
	        WHERE imovel.ID_IMOVEL ='$ID_IMOVEL'";

	$result = mysqli_query($link,$sql);
	
	while($dado = mysqli_fetch_assoc($result))
	{ ?>
		
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-body">
					
						<div class="row">
							<div class="descricaoSuperior">
								

									
										<div class="col-md-8">
											<div class="imgsAnuncio">
											<div>

												<label><img src="<?php echo "./uploads/".$dado['ARQUIVOS'];?>" width="700px" height="500px"></label>

											</div>
										</div>
									</div>

									<div class="descricaoImovel">
										<div class="col-md-4">								
											
												<div>

													<label>Valor do imóvel &nbsp;&nbsp;  R$ &nbsp;<?php echo $dado['VALOR']; ?></label>

												</div>
												
												<div>

												 	<label><?php echo $dado['DESCRICAO']; ?></label>

												</div>
												<br />
												<div>

														<h5>
															<label>
																<i class="fas fa-bed"></i>
																&nbsp;&nbsp;<?php echo $dado['QUARTOS']; ?>
															</label>&nbsp;Quartos &nbsp;|&nbsp;
															<label>
																<i class="fa far fa-car-garage"></i>
																<?php echo $dado['VAGAS']; ?>
															</label>&nbsp; Vaga &nbsp;&nbsp;<br /><br />
															<label>
																<i class="fas fa-bath"></i>
																&nbsp;&nbsp;<?php echo $dado['SUITES']; ?>
															</label>&nbsp;Suites &nbsp;| &nbsp;M
														</h5>	

												</div>
												<br />
												<div>

													<label><?php echo $dado['LOGRADOURO']; ?></label>
													
												</div>
												<div>

													<label><?php echo $dado['NOME_CIDADE']; ?> - <?php echo $dado['NOME_ESTADO']; ?></label>
													
												</div>
											
												
												<br />
												<div>

													<h5>Entre em contato com o anunciante</h5>

												</div>
												
												<div>
													<div class="col-md-6">
														<i class="fas fa-user"></i>&nbsp;&nbsp;<label>Contato</label><br />
														&nbsp;&nbsp;<label><?php echo $dado['NOME']; ?></label>
													</div>
													<div class="col-md-6">
														<i class="fas fa-phone"></i>&nbsp;&nbsp;<label>Telefone</label>
													</div>

												</div>
											
										</div>
									</div>
								
							</div>
						</div>

							<div class="row">
								<div class="descricaoMeio">
									

										<label>Descrição</label><br />

										<p>Sobrado geminado bem espaçoso com otima area de terreno e excelente aproveitamento do espaço interno. Possui sala de estar, 01 suite e 02 dormitorios, copa, cozinha, lavanderia, vaga para dois carros e área para lazer nos fundos.</p>
									
								</div>
							</div>

							</div>
						</div>
					</div>
				
			
	
		
<?php };?>

			</div>
		</div>
	</section>

</body>
</html>