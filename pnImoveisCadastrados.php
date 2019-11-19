<?php
	
	require_once('conexao.php');
	session_start();

	$objBd = new bd();
	$link = $objBd->conecta_mysql();

	
	$ID_CLIENTE = $_SESSION['ID_CLIENTE'];



	$sql = "SELECT * FROM imovel
	           INNER JOIN cidade  ON imovel.ID_CIDADE=cidade.ID_CIDADE
	           INNER JOIN estado  ON imovel.ID_ESTADO=estado.ID_ESTADO 
	           INNER JOIN cliente ON imovel.ID_CLIENTE=cliente.ID_CLIENTE
	        WHERE cliente.ID_CLIENTE ='$ID_CLIENTE'";
	$result = mysqli_query($link, $sql);
	
	
	
	
	while($dado = mysqli_fetch_assoc($result))
	{ 

		
		?>

		<div class="item">
			<div class="container">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">

							<form class ="form" method="POST" id="atualizaImovel" action="">
								

								<div class="col-md-4">
									<div>

										<label><img src="<?php echo "./uploads/".$dado['ARQUIVOS'];?>" width="300px" height="200px"></label>
										
									</div>
									<br />
									<br />
									<button class="btn face btn-success"  type="submit" >Salvar</button>
									<button class="btn face btn-primary" id="editar">Editar</button>
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
									  Excluir
									</button>

									<!-- Modal -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" center>
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header text-left bg-danger">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h6 class="modal-title" id="myModalLabel">EXCLUIR IMOVEL</h6>
									      </div>
									      <div class="modal-body">
									        Tem certeza de que deseja excluir o imóvel selecionado ?
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
									        <a href="pnExcluiImovel.php?ID_IMOVEL=<?php echo $dado['ID_IMOVEL'];?>" onclick="alertExclusao()" style="color: red;">Excluir</a>
									      </div>
									    </div>
									  </div>
									</div>
									<!--<a href="pnExcluiImovel.php?ID_IMOVEL=<?php //echo $dado['ID_IMOVEL'];?>" data-confirm='excluir' >Teste</a>-->
									
								</div>

								<div class="col-md-8">

									
									<div class="col-md-6">

										<div class="codImovel">
											<label>Código imóvel: </label>
											<input type="text" name="ID_IMOVEL" value="<?php echo $dado['ID_IMOVEL']; ?>" >
										</div>

										<br /><br />

										<div class="DescricaoImovel">
											<i class="far fa-file-alt"></i>
										 	<label>Descrição do Imovel:</label>
										 	<input type="text" name="DESCRICAO" id="descricao" class="form-control" value="<?php echo $dado['DESCRICAO']; ?>" placeholder="Descrição" />

										</div>
										<br />
										<div class="CamposCaracteristicas">

											<label>Quartos: </label>
											<input type="text" name="QUARTOS" id="nome" class="form-control" value="<?php echo $dado['QUARTOS']; ?>" placeholder="Nome e Sobrenome" />

											<label>Suites: </label>
											<input type="text" name="SUITES" id="nome" class="form-control" value="<?php echo $dado['SUITES']; ?>" placeholder="Nome e Sobrenome" />

										</div>
										<div class="CampoVaga">

											 <label>Vaga: </label>
											 <input type="text" name="VAGAS" id="vaga" class="form-control" value="<?php echo $dado['VAGAS']; ?>" placeholder="Nome e Sobrenome" />
										
										

											 <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M:</label>
											 <input type="text" name="METROS" id="metros" class="form-control" value="<?php echo $dado['VAGAS']; ?>" placeholder="Nome e Sobrenome" />
										
										</div>												
									</div>
									<div class="col-md-6">
										<i class="fas fa-archway"></i>
										<label>Endereço</label>
										<div>

											<label>Logradouro: </label>
											<input type="text" name="LOGRADOURO" id="Logradouro" class="form-control" value="<?php echo $dado['LOGRADOURO']; ?>"placeholder="Nome e Sobrenome" />
											<label>Numero: </label>
											<input type="text" name="NUMERO_IMOVEL" id="Logradouro" class="form-control" value="<?php echo $dado['NUMERO_IMOVEL']; ?>"placeholder="Numero imovel" />
										
										</div>
										<br />
										<div>

									   <label><?php echo $dado['NOME_CIDADE']; ?> - <?php echo $dado['NOME_ESTADO']; ?></label>
											
										</div>
										<br />
										<i class="fas fa-dollar-sign"></i>
										<label>VALOR DO IMOVEL</label>
										<div class="CampoValor">

												<label>R$: </label>
												<input type="text" name="VALOR" id="valor" class="form-control" value="<?php echo $dado['VALOR']; ?>" placeholder="Nome e Sobrenome" />

										</div>
									</div>

										
								
									</div>			
								</div>
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
	     $('.btn-success, .form input, textarea').each(function(){
	       $(this).prop("disabled", state);
	     });
	   }
	});
</script>
<script>
	
	jQuery(document).ready(function(){
		jQuery('#atualizaImovel').submit(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "pnUpdateImovel.php",
				data: dados,
				success: function( data )
				{
					alert( data );
				}
			});
			
			return false;
		});
	});
	</script>
</script>
<script>
	function alertExclusao()
	{
		alert("Imovel excluido com sucesso");
	}
</script>
<!--pnUpdateImovel.php?ID_IMOVEL=<?php //echo $dado['ID_IMOVEL'];?>-->


