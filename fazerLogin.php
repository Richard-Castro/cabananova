<!DOCTYPE html>
<html>
<head>
<title>Cabana Nova</title>
<!--mobile apps-->

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fazerLogin.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- js files -->
<script src="js/modernizr.js"></script>
<!-- /js files -->
</head>
<body>

	<div class="imagemFundo">
		<img src="images/anun1.jpg">
	</div>

	<div class="cabecalho">
		<div class="container">
			<div class="col-md-12">

				<div class="panel panel-default">
					<div class="panel-body">
		 		
						<div class="col-md-5">

				       		 <h4 class="modal-title" id="myModalLabel">Faça Login em sua conta Cabana Nova</h4>
				       		 <h5 class="modal-sub-title">Preencha seus dados para acessar sua conta</h5>

				     		<div class="modal-body">	
				     			
								<form method="POST" action="validarAcesso_fazerLogin.php">

									<div class="form-group">
									    <input type="text" class="form-control" id="exampleInputEmail1" name="EMAIL" placeholder="Digite seu e-mail" required>
									</div>

									<div class="form-group">
									    <input type="password" class="form-control" id="exampleInputPassword1" name="SENHA" placeholder="Digite sua senha" required>
									</div>

								  	<button class="btn btn-default">Esqueci minha senha</button>
								  	<button type="submit" class="btn btn-warning ">Entrar</button>

								  	<div class="facebook">
									  	<h5>Se preferir, entre com sua conta do Facebook.</h5>
								 		<button class="btn face btn-primary"><i class="fa fa-facebook"></i>Facebook</button>
							 		</div>

								</form>
							</div>
	  					</div>
	  					
	  					
	  					
							<div class="col-md-7">	
							<div class="menuCadastro">

						 		<h4 class="modal-title" id="myModalLabel">Criando cadastro no Cabana Nova</h4>
							       	<h5 class="modal-sub-title">Preencha as informações para criar uma conta</h5>
					      			
						     		<div class="modal-body">
						        	
										<form method="POST" action="registraUsuario_cadastroUsuario.php" id="formcadastro">
												<div class="form-group">
													<input type="text" name="NOME" id="nome" class="form-control" placeholder="Nome e Sobrenome" required autofocus>
												</div>

												<div class="form-group">
													<input type="email" name="EMAIL" id="email" class="form-control" placeholder="E-mail (seu@email.com.br)" required>
												</div>

												<div class="form-group">
													<input type="email" name="CONFIRMADO_EMAIL" id="email" class="form-control" placeholder="Confirme seu e-mail" required>
												</div>

												<div class="form-group">
												    <input type="password" name="SENHA" class="form-control" id="exampleInputPassword1" placeholder="Senha" required>
												</div>

												<div class="form-group">
												    <input type="password" name="CONFIRMADO_SENHA" class="form-control" id="exampleInputPassword1" placeholder="Confirme sua senha" required>
												</div>

												<div class="checkbox text-left">
													<label>
													    <input type="checkbox"> Desejo receber novidade !
													</label>
												</div>
											  	
											  	<button class="btn btn-default" data-dismiss="modal">Cancelar</button>
											  	<button type="submit" class="btn btn-warning ">Finalizar Cadastro</button>

												<div class="facebook">
												  	<h5 class="text-left">Se preferir, entre com sua conta do Facebook.</h5>
											 		<button class="btn face btn-primary"><i class="fa fa-facebook"></i>Facebook</button>
											 	</div>
										</form>
									
								</div>

					   		 	<div class="modal-footer">
					       		 	<p>Ao me cadastrar confirmo que li e concordo com os <a href="#">Termos de uso</a></p>
					      		</div>
					      		</div>
					      	</div>
					     </div>
					 </div>
				</div>
			 </div>
		</div>
</body>
</html>
