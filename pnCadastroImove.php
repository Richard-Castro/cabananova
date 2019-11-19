<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<section class="imagemUpload">
		
			<?php include_once("conexao.php"); 

				$objBd = new bd();
				$link = $objBd->conecta_mysql();

			?>

	<form method="POST" action="registra_imovel.php" enctype="multipart/form-data">

			<div class="col-md-8">
				<div class="upload_img_tt">

					<h2><i class="fa fa-camera-retro">   &nbsp;Imagens do imóvel</i></h2>

		    		<div class="panel panel-default">
		    			<div class="panel-body">

		    				<div class="upload_img">

		    					

								
									<label class="control-label">Selecione os arquivos desejados:</label>
									<input id="arquivos" name="ARQUIVOS[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
									
								

							</div>

						</div>
					</div>
				</div>
			</div>
		

			<div class="row">
				<div class="container">
					<div class="col-md-6">
						<div class="formulario">	
					

						
						 <!--<?= $_SESSION  /*'ID_CLIENTE'*/ ?>-->
						<!--<li>
						<h2>Oque deseja fazer ?</h2>
						<button type="button" id="btnTransacaoT1" class="tipoTransacao" value="1">Vender</button>
						<button type="button" id="btnTransacaoT2" class="tipoTransacao" value="2">Alugar</button>
						</li>-->
						<div class="tipoimovel">
							<div class="tipocasa">
								<h2><i class="fa fa-home">   &nbsp;Qual o tipo de imóvel ?</i></h2>
							</div>
							<div class="select_tipo_casa">
								<select class="combobox campo" id="id_categoria" name="ID_TIPO_IMOVEL" >
									<option value="0">Escolha um tipo de imóvel</option>
									
									<?php
											$result_cat_post = "SELECT * FROM grupo_imovel";
											$resultado_cat_post = mysqli_query($link, $result_cat_post) ;
											while ($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ){
												echo '<option value="'.$row_cat_post['ID_GRUPO_IMOVEL'].'">'.$row_cat_post['DESCRICAO'].'</option>';
											}
									?>
								</select>
							</div>

							<div class="select_cate_casa">
								<span class="carregando">Nenhum imovem disponível!</span>
								<select class="combobox campo" id="select" name="ID_GRUPO_IMOVEL">
									<option value="">Escolha uma categoria</option>
								</select>
							</div>
						</div>

						<!--formularios de cadastro imovel-->
						<div class="row">
							<div class="container">
								<div class="col-md-12">
									<div class="caracteristica_imovel">
										<div id='pai'>
											<div id='4'>

												<fieldset class="titulo_caracteristica_imovel">
													<h2><i class="fa fa-bars">   &nbsp;Caracteristicas do imóvel</i></h2>
												</fieldset>
												
												<fieldset class="caracimovel pull-left">
													<label>Quartos</label>
													<input class="txtcarc" id="" maxlength="20" name="QUARTOS" placeholder="0" type="number" value="" >
													<label>Suítes</label>
													<input class="txtcarc" id="" maxlength="20" name="SUITES" placeholder="0" type="number" value="" >
													<label>Area total</label>
													<input class="txtcarc" id="" maxlength="20" name="AREA_TOTAL" placeholder="000" type="number" value="">
						      					</fieldset>

												<fieldset class="caracimovel campo-esquerdo">
													<label>Banheiros</label>
													<input class="txtcarc" class="width-medium" id="" maxlength="20" name="BANHEIROS" placeholder="000" type="text" value="">
													<label>Área util</label>
													<input class="txtcarc" class="width-medium" id="" maxlength="20" name="AREA_UTIL" placeholder="000" type="text" value="">
													<label>Vagas de garagem</label>
													<input class="txtcarc" id="" maxlength="20" name="VAGAS" placeholder="0" type="number" value="">
												</fieldset>
						
											</div>
											<div id='1'>

												<fieldset class="tcaracimovel">
													<h2><i class="fa fa-bars">   &nbsp;Caracteristicas do imóvel</i></h2>
												</fieldset>
												
												<fieldset class="caracimovel pull-left">
													<label>Quartos</label>
													<input class="txtcarc" id="" maxlength="20" name="QUARTOS" placeholder="0" type="number" value="">
													<label>Área util</label>
													<input class="txtcarc" class="width-medium" id="" maxlength="20" name="AREA_UTIL" placeholder="000" type="number" value="">
												    <label>Vagas de garagem</label>
													<input class="txtcarc" id="" maxlength="20" name="VAGAS" placeholder="0" type="number" value="">
												</fieldset>

												<fieldset class="caracimovel campo-esquerdo">
													<label>Suítes</label>
													<input class="txtcarc" id="" maxlength="20" name="SUITES" placeholder="0" type="number" value="">
												    <label>Area total</label>
													<input class="txtcarc" id="" maxlength="20" name="AREA_TOTAL" placeholder="000" type="number" value="">
												</fieldset>
						
											</div>
											<div id='2'>

												<fieldset class="tcaracimovel">
													<h2><i class="fa fa-bars">   &nbsp;Caracteristicas do imóvel</i></h2>
												</fieldset>
												
												<fieldset class="caracimovel pull-left">
													<label>Quartos</label>
													<input class="txtcarc" id="" maxlength="20" name="QUARTOS" placeholder="0" type="number" value="">
													<label>Suítes</label>
													<input class="txtcarc" id="" maxlength="20" name="SUITES" placeholder="0" type="number" value="">
													<label>Area total</label>
													<input class="txtcarc" id="" maxlength="20" name="AREA_TOTAL" placeholder="000" type="number" value="">
						      					</fieldset>

												<fieldset class="caracimovel campo-esquerdo">
													<label>Banheiros</label>
													<input class="txtcarc" class="width-medium" id="" maxlength="20" name="BANHEIROS" placeholder="000" type="number" value="">
													<label>Área util</label>
													<input class="txtcarc" class="width-medium" id="" maxlength="20" name="AREA_UTIL" placeholder="000" type="number" value="">
													<label>Vagas de garagem</label>
													<input class="txtcarc" id="" maxlength="20" name="VAGAS" placeholder="0" type="number" value="">
												</fieldset>

												
												<fieldset class="caracimovel width-medium pull-left">
													
												</fieldset>
												
												
												
											</div>
											<div id='3'>

												<fieldset class="tcaracimovel">
													<h2><i class="fa fa-bars">   &nbsp;Caracteristicas do imóvel</i></h2>
												</fieldset>
												
																		
												<fieldset class="caracimovel width-medium pull-left">
													<label>Área util</label>
													<input class="txtcarc" class="width-medium" id="" maxlength="20" name="AREA_UTIL" placeholder="000" type="number" value="">
												</fieldset>
												<fieldset class="caracimovel width-medium campo-esquerdo">
													<label>Área total</label>
													<input class="txtcarc" id="" maxlength="20" name="AREA_TOTAL" placeholder="000" type="number" value="">
												</fieldset>
												
												<fieldset class="caracimovel width-medium pull-left clear">
													<label>Vagas de garagem  <span class="opcional">(Opcional)</span></label>
													<input class="txtcarc" id="" maxlength="20" name="VAGAS" placeholder="0" type="number" value="">
												</fieldset>
											</div>
										</div>	

									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="container">
								<div class="col-md-12">
									<div class="dados_endereco">
											<div class="tendereco">
												<h2><i class="fa fa-map-marker">   &nbsp;Informe o endereço do imóvel</i></h2>
											</div>
											
											<!---->
											<div>
					                   			<label for="txtCepImovel">CEP</label>
												<input class="campo_cep" id="cep" maxlength="9" name="CEP" onblur="pesquisacep(this.value);" placeholder="00000-000" required>                  
					 							<a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" class="btn btn-primary" id="btn_nsmc" target="_blank">Não sei meu CEP</a>
					 						</div>
									        <div>
									       	    <label>Estado</label>
									        	<select class="width-large" id="id_estado" maxlength="20" name="ID_ESTADO">
													<option value="0">Escolha um estado</option>
									
													<?php
															$result_cat_post = "SELECT * FROM estado";
															$resultado_cat_post = mysqli_query($link, $result_cat_post) ;
															while ($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ){
																echo '<option value="'.$row_cat_post['ID_ESTADO'].'">'.$row_cat_post['NOME_ESTADO'].' - '.$row_cat_post['UF'].'</option>';
															}
													?>
												</select>
									       			
									        </div>
					        				<div class="cendereco">
					        					<label>Cidade</label>
					        					<span class="carregando">Nenhum imovem disponível!</span>
													<select class="width-large" maxlength="100" id="id_sub_endereco" name="ID_CIDADE">
														<option value="">Escolha uma cidade</option>
													</select>
									        </div>
									        
					       					<div class="cendereco">
					        					<label>Bairro</label>
					        					<span class="carregando">Nenhum imovem disponível!</span>
													<select class="width-large" id="id_sub_endereco_bairro" maxlength="100" name="ID_BAIRRO">
														<option value="">Escolha um bairro</option>
													</select>
												
											</div>
					        				<div class="cendereco">
					       						<label for="txtLogradouro">Logradouro</label>
												<input class="width-large" id="rua" maxlength="100" name="LOGRADOURO" placeholder="ex.: Rua Brasil" type="text" value="" required>
					        				</div>
					    			        <div class="cendereco pull-left">
									            <label for="txtNumero">Número</label>
									            <input id="txtNumero" maxlength="100" name="NUMERO_IMOVEL" placeholder="ex.: 300" type="tel" value="" required>
									        </div>
									        <div class="cendereco campo_complemento">
					                 		    <label>Complemento <span class="opcional">(Opcional)</span></label>
					           					<input id="txtComplemento" maxlength="100" name="COMPLEMENTO" placeholder="ex.: apto 1, bloco A" type="text" value="" >
					           				</div>
				           			</div>
				           		</div>
				           	</div>
				        </div>
				        <div class="row">
							<div class="container">
								<div class="col-md-12">
			           				<div class="valor_imovel">
			           					<h2><i class="fa fa-dollar">   &nbsp;Valor do Imóvel </i></h2>
				           				<div class="caracimovel pull-left">
											<label>Valor total do Imóvel R$</label>
											<input class="txtcarc"  id="" maxlength="20" name="VALOR" placeholder="1000,00" type="text" value="" required>
										</div>
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

					</div>
				</div>
			</div>
		</div>
	</form>
								<script type="text/javascript" src="https://www.google.com/jsapi"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
								<script src="js/jquery.min.js"></script>
								<script src="js/ajaxxxx.js"></script>
								<script type="text/javascript">
								   google.load("jquery", "1.4.2");
								</script>

								<script type="text/javascript">
									$(function(){
										$('#id_categoria').change(function(){
											if( $(this).val() ) {
												$('#select').hide();
												$('.carregando').show();
												$.getJSON('sub_categoria_post.php?search=',{id_categoria: $(this).val(), ajax: 'true'}, function(j){
													var options = '<option value="">Escolha subcategoria</option>';
													for (var i = 0; i < j.length; i++) {
														options += '<option value="' + j[i].ID_TIPO_IMOVEL + '">' + j[i].DESCRICAO + '</option>';
												}
												$('#select').html(options).show();
												$('.carregando').hide();
												});
											} else {
												$('#select').html('<option value="">- Escolha o Tipo do Imovel -</option>');
											}
										});
									});
								</script>
								<script type="text/javascript" src="https://www.google.com/jsapi"></script>
			          			<script type="text/javascript">
								   google.load("jquery", "1.4.2");
								</script>

								<script type="text/javascript">
									$(function(){
										$('#id_estado').change(function(){
											if( $(this).val() ) {
												$('#id_sub_endereco').hide();
												$('.carregando').show();
												$.getJSON('sub_categoria_endereco.php?search=',{id_estado: $(this).val(), ajax: 'true'}, function(j){
													var options = '<option value="">Escolha a cidade</option>';
													for (var i = 0; i < j.length; i++) {
														options += '<option value="' + j[i].ID_CIDADE + '">' + j[i].NOME_CIDADE + '</option>';
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
								<script type="text/javascript">
									$(function(){
										$('#id_estado').change(function(){
											if( $(this).val() ) {
												$('#id_sub_endereco_bairro').hide();
												$('.carregando').show();
												$.getJSON('sub_categoria_endereco_bairro.php?search=',{id_estado: $(this).val(), ajax: 'true'}, function(j){
													var options = '<option value="">Escolha subcategoria</option>';
													for (var i = 0; i < j.length; i++) {
														options += '<option value="' + j[i].ID_BAIRRO + '">' + j[i].NOME_CIDADE + '</option>';
												}
												$('#id_sub_endereco_bairro').html(options).show();
												$('.carregando').hide();
												});
											} else {
												$('#id_sub_endereco_bairro').html('<option value="">- Escolha o Tipo do Imovel -</option>');
											}
										});
									});
								</script>
			</section>

</body>
</html>