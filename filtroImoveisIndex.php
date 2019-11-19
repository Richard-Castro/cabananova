<?php
	
require_once('conexao.php');


	$objBd = new bd();
	$link = $objBd->conecta_mysql();

	
	$TIPO_IMOVEL = $_POST['IdTipoImovel'];
	echo $TIPO_IMOVEL; 
	
	$CAMPO_BUSCA = $_POST['campoBusca'];
	echo $CAMPO_BUSCA;
	


	$sql = 'SELECT * FROM imovel
	           INNER JOIN cidade  ON imovel.ID_CIDADE=cidade.ID_CIDADE
	           INNER JOIN estado  ON imovel.ID_ESTADO=estado.ID_ESTADO 
	           INNER JOIN cliente ON imovel.ID_CLIENTE=cliente.ID_CLIENTE
	        WHERE ID_GRUPO_IMOVEL = '.$TIPO_IMOVEL.' AND NOME_CIDADE = '.$CAMPO_BUSCA.' ';

	$result = mysqli_query($link, $sql);
	$infoResult = mysqli_num_rows($result);

	if($infoResult>0){
		
	while($dado = mysqli_fetch_assoc($result))

		
	{ ?>


<div class="item">
			<div class="container">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">

							<div class="col-md-4">
								<div>

									<label><img src="<?php echo "./uploads/".$dado['ARQUIVOS'];?>" width="300px" height="200px"></label>

								</div>
							</div>

							<div class="col-md-8">

								
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

										<h5><label><?php echo $dado['QUARTOS']; ?></label>&nbsp;Quartos &nbsp; 
										|&nbsp;<label><?php echo $dado['SUITES']; ?> </label>&nbsp;Suites &nbsp;
										| &nbsp;<label><?php echo $dado['VAGAS']; ?></label>&nbsp; Vaga &nbsp;
										| &nbsp;M
										</h5>
									
								</div>
								<br />
								<div>

									<label><?php echo $dado['LOGRADOURO']; ?></label>
									
								</div>
								<div>

									<label><?php echo $dado['NOME_CIDADE']; ?> - <?php echo $dado['NOME_ESTADO']; ?></label>
									
								</div>
							</div>

							<div class="col-md-3">
								<div>
									<i class="far fa-heart"></i>&nbsp;&nbsp;&nbsp;&nbsp;
								
									<i class="fas fa-phone"></i>
								</div>
								<br />
								<div>

									<a href="exibirImoveisDetalhes.php?ID_IMOVEL=<?php echo $dado['ID_IMOVEL'];?>" >Ver todos os detalhes</a>

								</div>
								<br /><br />
								<div>

									<label>Contato</label>
									<label><?php echo $dado['NOME']; ?></label>


								</div>

						

							

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php


		};
 }else{
	echo '<br /><h4><center><span style="color:red;">Não há imoveis disponíveis.</span><a href="imoveis.php"> Voltar</a></h4>';
	}
?>