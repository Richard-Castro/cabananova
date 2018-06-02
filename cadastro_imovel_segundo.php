<?php
	
	include('conexao.php');

	$msg = false;
?>

<!DOCTYPE html>
<html>
<head>
<title>Cabana Nova</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery-3.1.1.min.js"></script>
 

<link rel="icon" href="../images/iconesite.ico">
<link href="css/cadastro_imovel_segundo.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<head>
	
	
	
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="./js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
		<script src="./js/plugins/sortable.min.js" type="text/javascript"></script>
		<script src="./js/plugins/purify.min.js" type="text/javascript"></script>
		<script src="./js/fileinput.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="./themes/fa/theme.js"></script>
		<script src="./js/locales/<lang>.js"></script>
		
		
		<script type="text/javascript">
			$(document).ready( function() {
			
				// initialize with defaults
				$("#arquivos").fileinput();

				// with plugin options
				$("#arquivos").fileinput({'showUpload':false, 'previewFileType':'any'});
				
			});
		</script>
	</head>
	
	<body>
		<nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="images/iconsite.jpg"/ width="100px" height="50px">
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="cadastro-imovel.php">Pagina anterior</a></li>
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
						</form>
				  	</ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


		<div class="container">
			<div class="col-md-8">
				<div class="upload_img_tt">

				<h2><i class="fa fa-camera-retro">   &nbsp;Imagens do imóvel</i></h2>

	    		<div class="panel panel-default">
	    			<div class="panel-body">

	    				<div class="upload_img">

	    					<?php if($msg != false) echo "<p> $msg </p>"; ?>

							<form enctype="multipart/form-data" action="upload.php" method="POST">
								<label class="control-label">Selecione os arquivos desejados:</label>
								<input id="arquivo" name="ARQUIVOS" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
								<input type="submit" value="Enviar arquivo" />
							</form>

						</div>

					</div>
				</div>
			</div>
			</div>
		</div>

		<div class="row">
			<div class="container">
				<div class="col-md-12">
					<form method="POST" action="registraItensApto.php">
						<div class="caracteristica_imovel">
							
						
							<fieldset class="titulo_caracteristica_imovel">
								<h2><i class="fa fa-bars">   &nbsp;Detalhes do imóvel</i></h2>
							</fieldset>
								
								
							<fieldset class="caracimovel pull-left">
								<label>Condominio (R$)</label>
								<input class="txtcarc" id="" maxlength="20" name="CONDOMINIO" placeholder="0" type="number" value="">
								<label>IPTU(R$)</label>
								<input class="txtcarc" id="" maxlength="20" name="IPTU" placeholder="0" type="number" value="">
								<label>Ano de construção</label>
								<input class="txtcarc" id="" maxlength="20" name="ANO_CONSTRUCAO" placeholder="000" type="text" value="">
	      					</fieldset>
	      				

	      					
							<fieldset class="caracimovel campo-esquerdo">
								<label>Número de andares</label>
								<input class="txtcarc" class="width-medium" id="" maxlength="20" name="NUMERO_ANDARES" placeholder="000" type="text" value="">
								<label>Unidades por andar</label>
								<input class="txtcarc" class="width-medium" id="" maxlength="20" name="UNIDADE_ANDAR" placeholder="000" type="text" value="">
							</fieldset>
						
							
						</div>
					
					
				</div>
			</div>
		</div>
		<div class="row">
							<div class="container">
								<div class="col-md-12">
									<hr />
									<div class="btn_salvar">
										<button class="btn btn-primary">SALVAR E CONTINUAR</button>
									</div>
								</div>
							</div>
						</div>
		</form>

		

</body>
</html>