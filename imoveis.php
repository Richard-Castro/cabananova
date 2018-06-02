<?php

 require_once('conexao.php');

 	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

	$erro_usuario  = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] :0;
	$erro_email    = isset($_GET['erro_email'])   ? $_GET['erro_email'] :0;

?>
<!DOCTYPE html>
<html>
<head>
<title>Cabana Nova</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="css/pg_imoveis.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	
</head>
<body>
		
<section class="top-w3ls">
	<div class="row">
	<div class="cabecalho">
		<div class="container">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
	
				<div class="top-bar">
					<div class="container">
						<div class="row">
							
							<div class="login">
								<ul class="top-contacts">
									<li class="top-hover"><p><i class="fas fa-user"></i><a href="#" data-toggle="modal" data-target="#myModal">Criar conta</a></p></li>
									<li class=""><p><i class="fal fa-sign-in-alt"></i><a href="#" data-toggle="modal" data-target="#myModal-login">Entrar</a></p>
				<div class="modal fade" id="myModal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  		<div class="modal-dialog" role="document">
			  		 	<div class="modal-content">
			      			<div class="modal-header">

					       		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

					       		 <h4 class="modal-title" id="myModalLabel">Criando cadastro no Cabana Nova</h4>
					       		 <h5>Preencha as informações para criar uma conta</h5>
			      			</div>
				     		<div class="modal-body">	
				     			<?php
				     				if($erro == 1){
				     					echo '<font color="#FF0000">Usuário e ou senha inválido</font>';
				     				}
				     			?>

								<form method="POST" action="validar_acesso.php">

									  <div class="form-group">
									     <input type="text" class="form-control" name="email" placeholder="Digite seu e-mail" required>
									  </div>
									  <div class="form-group">
									     <input type="password" class="form-control"  name="senha" placeholder="Digite sua senha" required>
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
					</div>
				</div>
				</li>
								</ul>			
							</div>
						</div>
					</div>		
				</div>

				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  			<div class="modal-dialog" role="document">
				  		 	<div class="modal-content">
				      			<div class="modal-header">

						       		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

						       		 <h4 class="modal-title" id="myModalLabel">Criando cadastro no Cabana Nova</h4>
						       		 <h5>Preencha as informações para criar uma conta</h5>
				      			</div>
					     		<div class="modal-body">
					        	<?php
				     				if($erro_email){
				     					echo '<font color="#FF0000">E-mail já cadastrado. Por favor, selecione a opcao entrar e digite seus dados de acesso.<br></font>';
				     						}
				     					?>
				     				
									<form method="POST" action="registra_usuario.php" id="formcadastro">
											<div class="form-group">
												<input type="text" name="NOME" id="nome" class="form-control" placeholder="Nome e Sobrenome" required autofocus>
											</div>

											<div class="form-group">
												<input type="email" name="EMAIL" id="EMAIL" class="form-control" placeholder="E-mail (seu@email.com.br)" required>
											</div>

											<div class="form-group">
												<input type="email" name="CONFIRMADO_EMAIL" id="CONFIRMADO_EMAIL" class="form-control" placeholder="Confirme seu e-mail" required>
											</div>

											<div class="form-group">
											    <input type="password" name="SENHA" class="form-control" placeholder="Senha" required>
											</div>

											<div class="form-group">
											    <input type="password" name="CONFIRMADO_SENHA" class="form-control"  placeholder="Confirme sua senha" required>
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
</section>	
<nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a href="home.php"><img src="images/iconsite.jpg" width="100px" height="50px"></a>
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="inscrevase.php"></a></li>
	            <li><a href="home.php">Voltar para pagina Home</a></li>
					<ul class="dropdown-menu" aria-labelledby="entrar">
						<div class="col-md-12">
				    		<p>Você possui uma conta?</p>
				    		<br />
							<form method="post" action="validar_acesso.php" id="formLogin">
								<div class="form-group">
									<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
								</div>
								
								<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

								<br /><br />
								
							</form>
						</div>
				  	</ul>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
<section class="corpo">

	<div class="row">
		<div class="container">
			<div class="menuprimeiro">
	
			<div class="col-md-6">

				
						<label>Como podemos ajudar ?</label>
						<div class="btn-group" data-toggle="buttons">
						 	<label class="btn btn-primary">
						    	<input type="radio" name="options" id="option1" >Comprar
							</label>
						
						 	<label class="btn btn-primary">
						    	<input type="radio" name="options" id="option2" >Alugar
						  	</label>

						 	<label class="btn btn-primary">
						    	<input type="radio" name="options" id="option3" >Alugar temporada
						  	</label>
						</div>
				</div>

			
			

			
					<div class="col-md-4">
						<div class="select_um">

						<?php include_once("conexao.php"); ?>
					<?php 

						$objBd = new bd();
						$link = $objBd->conecta_mysql();

					 ?>

					<select class="width-large" id="id_estado" name="ID_ESTADO">
						<option value="0">Escolha um estado</option>
									
							<?php
								$result_cat_post = "SELECT * FROM estado";
								$resultado_cat_post = $link->query($result_cat_post) ;
								while ($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ){
								echo '<option value="'.$row_cat_post['ID_ESTADO'].'">'.$row_cat_post['NOME'].' - '.$row_cat_post['UF'].'</option>';
								}
								?>
							</select>

					</div>
				</div>
					<div class="col-md-2">
						<div class="select_dois">


						
						<select class="width-large" maxlength="100" id="id_sub_endereco" name="ID_CIDADE">
							<option value="">Escolha uma cidade</option>
						</select>

					</div>
				</div>
				</div>
		</div>
	</div>

</section>
<section class="fundo_menu_tipo">
	<hr />
	<div class="row">
		<div class="container">
			<div class="menu_detalhe">
			

				<div class="col-md-2">
					<div class="select_tres">
						<div class="icones">
							<i class="fas fa-home"></i>
						</div>
 						<select class="width-large" maxlength="100" id="id_sub_endereco" name="ID_CIDADE">
							<option value="">Qual tipo ?</option>
							<option value="">olaa ?</option>
							<option value="">ola ?</option>
						</select>
					</div>
				 </div>
				  <div class="col-md-2">

						<div class="select_quatro">
							<div class="icones">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<select class="width-large" maxlength="100" id="id_sub_endereco" name="ID_CIDADE">
							<option value="">Valor</option>
						</select>
					</div>
				 </div>
				<div class="col-md-2">
					<div class="select_cinco">
						<div class="icones">
							<i class="fas fa-bed"></i>
						</div>
						<select class="width-large" maxlength="100" id="id_sub_endereco" name="ID_CIDADE">
							<option value="">Quartos</option>
						</select>

					</div>
				</div>
				<div class="col-md-2">
						<div class="select_seis">
						<div class="icones">
							<i class="fas fa-shower"></i>		
						</div>
						<select class="width-large" maxlength="100" id="id_sub_endereco" name="ID_CIDADE">
							<option value="">Suites</option>
						</select>

					</div>
				</div>
				<div class="col-md-2">
						<div class="select_sete">
						<div class="icones">
							<i class="fas fa-car"></i>	
						</div>					
						<select class="width-large" maxlength="100" id="id_sub_endereco" name="ID_CIDADE">
							<option value="">Garagem</option>
						</select>

					</div>
				</div>
				<div class="col-md-2">
						<div class="select_oito">s


						
						<select class="width-large" maxlength="100" id="id_sub_endereco" name="ID_CIDADE">
							<option value="">Área (m)</option>
						</select>

					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />

	<section class="exibiIomveis">
		<?php include_once("conexao.php"); ?>
					<?php 

						$objBd = new bd();
						$link = $objBd->conecta_mysql();

						$sql = "SELECT * FROM imovel 
						INNER JOIN imagem ON imovel.ID_IMOVEL=imagem.ID_IMAGENS 
						INNER JOIN cidade ON imovel.ID_IMOVEL=cidade.ID_CIDADE 
						INNER JOIN estado ON cidade.ID_CIDADE=estado.ID_ESTADO
						INNER JOIN grupo_imovel ON estado.ID_ESTADO=grupo_imovel.ID_GRUPO_IMOVEL";
						$con = mysqli_query($link, $sql) or die .mysqli_erro();
						while($dado = mysqli_fetch_assoc($con)){ ?>
							
							<div class="item">
								<div class="container">
									<div class="col-md-12">
										<div class="panel panel-default">
											<div class="panel-body">

												<div class="col-md-4">

													<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
														  <ol class="carousel-indicators">
														    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
														    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
														    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
														  </ol>

														  <!-- Wrapper for slides -->
														  <div class="carousel-inner" role="listbox">

														    <div class="item active">
														      <img src="uploads/<?php echo $dado['ARQUIVOS']; ?>" height="150px" width="250px">
														      <div class="carousel-caption">
														        ...
														      </div>
														    </div>

														    <div class="item">
														     <img src="uploads/<?php echo $dado['ARQUIVOS']; ?>" height="150px" width="250px">
														      <div class="carousel-caption">
														        ...
														      </div>
														    </div>

														    <div class="item">
														     <img src="uploads/<?php echo $dado['ARQUIVOS']; ?>" height="150px" width="250px">
														      <div class="carousel-caption">
														        ...
														      </div>
														    </div>

														    ...
														  </div>

														  <!-- Controls -->
														  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
														    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
														    <span class="sr-only">Previous</span>
														  </a>
														  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
														    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
														    <span class="sr-only">Next</span>
														  </a>
													</div>

												</div>
												<div class="col-md-6">
													<div>

														<label>R$ <?php echo $dado['VALOR']; ?></label>

													</div>
													<br />
													<div>

														<label><?php echo $dado['DESCRICAO']; ?></label>

													</div>
													<br />
													<div>

														<h5><label><?php echo $dado['QUARTOS']; ?></label>&nbsp;Quartos &nbsp; |&nbsp;<label><?php echo $dado['SUITES']; ?> </label>&nbsp;Suites &nbsp;| &nbsp;<label><?php echo $dado['VAGAS']; ?></label>&nbsp; Vaga &nbsp;| &nbsp;M</h5>
														
													</div>
													<br />
													<div>

														<label><?php echo $dado['LOGRADOURO']; ?></label>
														
													</div>
													<div>

														<label><?php echo $dado['NOME_CIDADE']; ?> - <?php echo $dado['NOME_ESTADO']; ?></label>
														
													</div>
												</div>
												<div class="col-md-2">
													<div>
														<i class="far fa-heart"></i>&nbsp;&nbsp;&nbsp;&nbsp;
													
														<i class="fas fa-phone"></i>
													</div>
													<br />
													<div>

														<a href="#">Ver todos os detalhes</a>

													</div>
													<br /><br />
													<div>

														<label>Contato</label>

													</div>

												</div>

												

											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
	</section>







<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/ajaxxxx.js"></script>

								 
				<script type="text/javascript">
									$(function(){
										$('#id_estado').change(function(){
											if( $(this).val() ) {
												$('#id_sub_endereco').hide();
												$('.carregando').show();
												$.getJSON('sub_categoria_endereco.php?search=',{id_estado: $(this).val(), ajax: 'true'}, function(j){
													var options = '<option value="">Escolha a cidade</option>';
													for (var i = 0; i < j.length; i++) {
														options += '<option value="' + j[i].ID_CIDADE + '">' + j[i].NOME + '</option>';
												}
												$('#id_sub_endereco').html(options).show();
												$('.carregando').hide();
												});
											} else {
												$('#id_sub_endereco').html('<option value="">- Escolha o Tipo do Imovel -</option>');
											}
										});
									});
								</script>
								<script type="text/javascript" src="https://www.google.com/jsapi"></script>
			          			<script type="text/javascript">
								   google.load("jquery", "1.4.2");
								</script>
	

			

</section>
<script src="js/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
</body>
</html>