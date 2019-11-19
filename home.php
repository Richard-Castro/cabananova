<?php

	session_start();

	include_once("conexao.php");

	$_SESSION['ID_CLIENTE'];

	if(!isset($_SESSION['EMAIL'])){
	 header("Location: index.php?erro=1");
	}


?>

<!DOCTYPE html>
<html>
<head>
<title>Cabana Nova</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/pricetable.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/modernizr.js"></script>
<!-- /js files -->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<section class="top-w3ls">
	<div class="cabecalho">
		<div class="container">
			<div class="col-md-6">
				<div class="navbar-wrapper">
					<div class="container">
						<nav> <!--class="navbar navbar-inverse navbar-static-top">-->
							<div class="container">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a href="home.php"><div class="logo"><img src="images/logo.png"></div></a>
								</div>
								<div id="navbar" class="navbar-collapse collapse">
									<ul class="nav navbar-nav">
										<li><a href="imoveis.php">IMOVEIS</a></li>
										<li><a href="cadastro-imovel.php">ANUNCIAR</a></li>
									</ul>
								</div>
							</div>
						</nav>	
					</div>
				</div>
			</div>
			<div class="col-md-6">
	
				<div class="top-bar">
					<div class="container">
						<div class="row">
							
							<div class="login">
								<ul class="top-contacts">
									<li class="anunciarImovel"><a href="cadastro-imovel.php"><button class="btn btn-default" >Anunciar Imovel</button></a></li>
									<li class="top-hover"><p><i class="fa fa-user"></i><a href="painelControle.php"><?php echo $_SESSION['NOME']; ?></a></p></li>
									<li class=""><p><i class="fas fa-sign-out-alt"></i></i><a href="sair.php">Sair</a>
				<div class="modal fade" id="myModal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" class="<?= $erro == 1 ? 'open' : '' ?>">
			  		<div class="modal-dialog" role="document">
			  		 	<div class="modal-content">
			      			<div class="modal-header">

					       		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

					       		 <h4 class="modal-title" id="myModalLabel">Criando cadastro no Cabana Nova</h4>
					       		 <h5>Preencha as informações para criar uma conta</h5>
			      			</div>
				     		<div class="modal-body">	
				     			
								<form method="POST" action="validar_acesso.php">

									  <div class="form-group">
									     <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Digite seu e-mail" required>
									  </div>
									  <div class="form-group">
									     <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua senha" required>
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
					        	
									<form method="POST" action="registra_usuario.php" id="formcadastro">
											<div class="form-group">
												<input type="text" name="usuario" id="nome" class="form-control" placeholder="Nome e Sobrenome" required autofocus>
											</div>

											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" placeholder="E-mail (seu@email.com.br)" required>
											</div>

											<div class="form-group">
												<input type="email" name="cemail" id="email" class="form-control" placeholder="Confirme seu e-mail" required>
											</div>

											<div class="form-group">
											    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha" required>
											</div>

											<div class="form-group">
											    <input type="password" name="csenha" class="form-control" id="exampleInputPassword1" placeholder="Confirme sua senha" required>
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
					       		 	<p>Ao me cadastrar confirmo que li e concordo com os <a href="#">Termos de uso</a>
					      		</div>
				  	 	 	</div>
			  			</div>
				</div>
			</div>
		</div>
	</div>
</section>	
<section>
	

<div class="banner-fundo">

	<img src="images/banner1.jpg" width="100%" height="500px">

</div>

<div class="legenda">
		<h1>CABANA NOVA</h1>
		<h4>Aqui você encontra o imóvel que precisa</h4>
	</div>

	<div class="buscarImoveis">
		<div class="col-md-12">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="imoveis.php" method="POST">

						<div class="col-md-4">
									
							<h5 class="title">Como podemos ajudar ?</h5>

							<div class="btn-group" data-toggle="buttons">
							 	<label class="btn btn-default">
							    	<input type="radio" class="btnSelect" name="options" id="option1" >Comprar
								</label>
							 	<label class="btn btn-default">
							    	<input type="radio" class="btnSelect" name="options" id="option2" >Alugar
							  	</label>
							 	<label class="btn btn-default">
							    	<input type="radio" class="btnSelect" name="options" id="option3" >Alugar temporada
							  	</label>
							</div>

						</div>
						<div class="col-md-2">
							<div>
								<h5 class="title">Qual tipo ?</h5>
							</div>
							<div>
								<select class="selectTipoImovel" maxlength="100" id="TIPO_IMOVEL" name="TIPO_IMOVEL">
									<option value="oi">Selecione</option>
									<?php

									$objBd = new bd();
									$link = $objBd->conecta_mysql();

									$sql = "SELECT * FROM grupo_imovel";
									$query = $link->query($sql);
									while($result_sql = mysqli_fetch_assoc($query)){

										echo'<option value="'.$result_sql['ID_GRUPO_IMOVEL'].'">'.$result_sql['DESCRICAO'].'</option>';
									}

									?>
								</select>
							</div>
						</div>
						<div class="col-md-5">

							<div>
								<h5 class="titleLocal">Local ?</h5>
							</div>

							<i class="fa fa-search fa-lg"></i>&nbsp;
							<input class="campoBusca" maxlength="100" autocomplete="off" placeholder="Digite aonde deseja localizar seu imovel" id="campoBusca" name="campoBusca" type="text" />
							
						</div>

						<div class="col-md-1">

							<button class="btn btn-info">Buscar</button>

						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="welcome">
	<div class="container">	
		<div class="wel-w3ls">
			<h3 class="text-center">Por que usar o Cabana Nova</h3>
			<p class="text-center"><strong>Se esta procurando um imóvel para alugar, você está no lugar certo.<br> Aqui você vai encontar diversos anuncios, temos certeza que um deles irá te agradar.</strong></p>

			<p class="text-center"><strong>Se você possui um imóvel ou estabelecimento, anuncie no Cabana Nova é simples,<br> prático e barato.</strong></p>
		</div>
	</div>	
</section>
<!-- /welcome section -->
<!-- info section -->
<section class="info">
	<div class="container">
		<div class="row-thumbnails text-center">
			
				
					<div class="col-md-4">
						<div class="informacao">
						
							<img src="images/livro.jpg" width="213" height="150">
							<h2>Busca simples</h2>
							<p>Utilizando a barra com os filtros<br> facilmente vai localizar<br> o imóvel que procura, e as<br> informações e quem está<br> anunciando.</p>
						
					</div>
				</div>
				
					<div class="col-md-4">
						<div class="informacao">
						

							<img src="images/casa3.jpg" width="200" height="150">
							<h2>Anuncie seu Imovel</h2>
							<p>Quer anunciar com a<br> gente ? Basta informar<br> os dados de seu imóvel<br> e pronto.</p>

						
					</div>
				</div>
				
					<div class="col-md-4">
						<div class="informacao">
							<img src="images/casafesta1.jpg" width="160" height="145">
							<h2>Locais para festas</h2>
							<p>Aproveite também e<br> anuncie casas de festas,<br> terrenos, áreas<br> comerciais! Sim, aqui <br>você pode.</p>	
					</div>
				</div>
		</div>	
	</div>
</section>
<!-- info section -->
<!-- team section -->
<section class="team">
	<div class="container">
		<h3 class="text-center">Anuncios mais recentes</h3>
		<!--<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 team-w3ls">
				<div class="grid">
					<figure class="effect-julia">
						<img src="images/anun1.jpg" width"40%" height"50%" alt="w3layouts" class="img-responsive" title="w3layouts"/>
							
					</figure>
				</div>
				<h4 class="text-center">R$ 7.900,00</h4>
				<p class="team-p1">America<br>6 dorms | 5 suites | 750m</p>	
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 team-w3ls">
				<div class="grid">
					<figure class="effect-julia">
						<img src="images/anun2.jpg" width"40%" height"50%" alt="w3layouts" class="img-responsive" title="w3layouts"/>
							
					</figure>
				</div>
				<h4 class="text-center">R$ 7.900,00</h4>
				<p class="team-p1">America<br>6 dorms | 5 suites | 750m</p>	
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 team-w3ls">
				<div class="grid">
					<figure class="effect-julia">
						<img src="images/anun3.jpg" width"40%" height"50%" alt="w3layouts" class="img-responsive" title="w3layouts"/>
							
					</figure>
				</div>
				<h4 class="text-center">R$ 7.900,00</h4>
				<p class="team-p1">America<br>6 dorms | 5 suites | 750m</p>	
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 team-w3ls">
				<div class="grid">
					<figure class="effect-julia">
						<img src="images/anun4.jpeg" width"40%" height"50%" alt="w3layouts" class="img-responsive" title="w3layouts"/>
								
					</figure>
				</div>
				<h4 class="text-center">R$ 7.900,00</h4>
				<p class="team-p1">America<br>6 dorms | 5 suites | 750m</p>				
			</div>
		</div>	
	</div>
</section>

<section class="subs">
	<div class="container">
		<h3>RECEBA NOSSAS NOVIDADES</h3>
		<h4>Fique por dentro de todas as novidades em Imóveis assinando a nossa newsletter!</h4>
		<form action="#" method="post">
			<div class="col-lg-10 col-md-10 col-sm-7 subs-w3ls1">
				<div class="form-group1">
					<input class="form-control" id="email" name="email" placeholder="Digite seu e-mail" type="email" required>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-5 subs-w3ls2">
				<div class="form-group2">
					<button class="btn btn-outline btn-lg" type="submit">Assinar</button>
				</div>
			</div>
			<div class="clearfix"></div>
		</form>	
	</div>
</section>

<section class="footer"> 
	<a href="#myPage" title="To Top" class="top">
		<span class="glyphicon glyphicon-chevron-up"></span>
	</a>
	<a href="index.html" class="logo">Cabana Nova</a>
	<div class="container">
		
		<ul class="social-icons1">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
		</ul>
		<p class="copyright">Todos direitos reservados &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Termos de uso &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Cabana Nova Serviços de Anuncios Imoboliarios Ltda</p>
	</div>
</section>
<!-- /footer section -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- scroll to top -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $("section.footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})
</script>
<!-- /scroll to top -->
<script src="js/pricetable.js"></script>
<script src="js/wmBox.js"></script>
<script src="js/info.js"></script>
<!-- js for search button -->
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script>
	new UISearch( document.getElementById( 'sb-search' ) );
</script>
<!-- /js for search button -->
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main.js"></script>
<!-- js for pricing table pop up -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
		});
	});
</script>
<script>
	
	$id_session

</script>
<!-- /js for pricing table pop up -->
<!-- /js files -->
</body>
</html>