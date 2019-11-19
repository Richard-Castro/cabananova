<?php

	require_once('conexao.php');

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<link href="css/paginaPlanos.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>



	<section>
		<nav class="menuSuperior">
		    <div class="container">
		        <div class="navbar-header">
		          <a href="home.php"><img src="images/iconsite.jpg"/ width="100px" height="50px"></a>
		        </div>
		        
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li class="btnUsuario"><p><i class="fa fa-user"></i>&nbsp;<a href="#"><?php echo $_SESSION['NOME']; ?></a></p></li>
		            <li class="btnSair"><p><i class="fas fa-sign-out-alt"></i></i><a href="sair.php">&nbsp;Sair</a></p></li>
		          </ul>
		        </div>

		    </div>
		</nav>
	</section>
	<section>
	<div class="planosDisponiveis">
	<div class="container">
		<div class="col-md-11">

			<div class="panel panel-default">
				<div class="cabecalho">

						<label>Escolha o plano desejado</label>

					</div>
				<div class="panel-body">
					


					<div class="container">
						<div class="col-md-10">

							<div class="col-md-4">

								<div class="panel panel-default">
									<div class="panel-body">

										<div class="panel panel-default">
											<div class="panel-body">

												<label>Plano Party 2 <i class="fas fa-home"></i></label>

											</div>
										</div>

										Anuncio Bimestral<br><br>
										Por somente R$ 19,90<br><br>
										<a mp-mode="dftl" href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=170474661-62f412e0-0b75-4247-a1d1-0d7d0cbce1f0" name="MP-payButton" class='orange-ar-m-rn-brall'>Selecionar esse</a>
										<script type="text/javascript">
										(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
										</script>


									</div>
								</div>

							</div>
							<div class="col-md-4">

								<div class="panel panel-default">
									<div class="panel-body">

										<div class="panel panel-default">
											<div class="panel-body">

												<label>Plano Party 3 <i class="fas fa-home"></i></label>

											</div>
										</div>

										Anuncio Trimestral<br><br>
										Por somente R$ 35,90<br><br>
										<a mp-mode="dftl" href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=170474661-c68cd4da-8c60-4a24-9671-723a0449e61d" name="MP-payButton" class='orange-ar-m-rn-brall'>Selecionar esse</a>
										<script type="text/javascript">
										(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
										</script>





									</div>
								</div>

							</div>
							<div class="col-md-4">

								<div class="panel panel-default">
									<div class="panel-body">

										<div class="panel panel-default">
											<div class="panel-body">

												<label>Plano Party 6 <i class="fas fa-home"></i></label>

											</div>
										</div>

										Anuncio Semestral<br><br>
										Por somente R$ 69,90<br><br>
										<a mp-mode="dftl" href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=170474661-c68cd4da-8c60-4a24-9671-723a0449e61d" name="MP-payButton" class='orange-ar-m-rn-brall'>Selecionar esse</a>
										<script type="text/javascript">
										(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
										</script>


									</div>
								</div>

							</div>
					</div>
				</div>


			</div>
			<footer>
					
					<button class="btn btn-primary">Alterar tempo de exposição</button>&nbsp;
					<a href="">Anúncios</a>

			</footer>
		</div>
	</div>
</div>
</div>
	</section>
</body>
</html>