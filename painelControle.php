<?php
	
	require_once('conexao.php');
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cabana Nova</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/painelControle.css" rel="stylesheet" type="text/css" />
	
	<link href="css/pnImoveisCadastrados.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/pnMenuLateralBusca.js"></script>


	
</head>
<body>
	<section>

		<div class="container">
			<div class="col-md-12">

				<div class="cabecalho">

					<a href="home.php"><div class="logo"><img src="images/logo.png"></div></a>

					<div class="top-bar">
					<div class="container">
						<div class="row">
							
							<div class="login">
								<ul class="top-contacts">
									<li class="top-hover"><p><i class="fa fa-user"></i>
										<a href="#" data-toggle="modal" data-target="#myModal"><?php echo $_SESSION['NOME']; ?></a></p></li>
									
										<li class=""><p><i class="fa fa-sign-in"></i><a href="sair.php">Sair</a>
										</ul>			
							</div>
						</div>
					</div>		
				</div>
				
						
				</div>
			</div>
		</div>

	</section>
	<section>

		<div class="container">
			<div class="col-md-5">
				<div class="menuLateral" id="menuLateral">

					<div class="menu">
								
							<li class="item">
								<label class="menuPai"><i class="fas fa-tachometer-alt"></i> Painel</label>
								<div class="menuFilho">
									<a href="pnImoveisCadastrados.php">Meus Imoveis</a>
									<!--<a href="pnCadastroImovel.php">Cadastrar Novo</a>
								</div>
							</li>-->

							<!--<li class="item">
								<label class="menuPai"><i class="fa fa-user"></i>Usuário</label>
								<div class="menuFilho">-->
									<a href="pnDadosCadastrados.php">Dados Usuário</a>

									<!--<a href="">Alterar</a>-->
								</div>
								<a href="home.php">Sair</a>
							</li>

						

					</div>
				</div>
			</div>

				<div class="col-md-5">

					<div class="exibirInformacoes" id="exibirInformacoes">

					</div>


				</div>
			</div>
		

	</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/pnFuncaoExcluir.js"></script>
<script src="js/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/ajax.js"></script>



<script type="text/javascript" src="https://www.google.com/jsapi"></script>
  			

</body>
</html>