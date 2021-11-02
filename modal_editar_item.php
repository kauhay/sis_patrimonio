<div class="row">


<div class="modal fade" id="exampleModal1" tabindex="+100" role="dialog" aria-labelledby="exampleModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <center><h1 class="modal-title" id="exampleModalLabel">Editar Item</h1></center>
	</div>
<div class="modal-body">

	  <form action="editar_bens.php" method="post" enctype="multipart/form-data">
		
	  <div class="form-group ">
		  <label for="recipient-descricao" id="recipient-descricao" class="control-label">Descrição:</label>
		  <input type="text" name="descricao"  class="form-control" >
		  <input type="hidden" name='id' id="recipient-id" value="">
	   </div>

		<div class="form-group col-md-4 col-sm-2">
		  <label for="recipient-filial" id="recipient-filial" class="control-label">Filial:</label>
		   <select name="filial" class="form-control"> 
		  <option value='' >Selecionar Filial</option>
				  <?php $sql_filial="SELECT * FROM cadastros where opcao = 'filiais'";
					$resultado_filial = mysqli_query($conn,$sql_filial) or die("Erro ao retornar dados de Filiais cadastradas");
					// Obtendo os dados por meio de um loop while
					while ($registro_filial = mysqli_fetch_array($resultado_filial))
					{ $filial_cad=$registro_filial['nome'];
						
						
						echo"<option value='$filial_cad' >$filial_cad</option>";	}			
				?>
		  </select> 
		</div>

		<div class="form-group col-md-4 col-sm-2">
		  <label for="recipient-filial_atual" id="recipient-filial_atual" class="control-label">Filial Atual:</label>
		  <select name="filial_atual" class="form-control" >
		  	<option value='' >Selecionar Filial Atual</option>
		  	<?php $sql_filial="SELECT * FROM cadastros where opcao = 'filiais'";
					$resultado_filial = mysqli_query($conn,$sql_filial) or die("Erro ao retornar dados de Filiais cadastradas");
					// Obtendo os dados por meio de um loop while
					while ($registro_filial = mysqli_fetch_array($resultado_filial))
					{ $filial_cad=$registro_filial['nome'];
						
						
						echo"<option value='$filial_cad' >$filial_cad</option>";	}			
				?>
		  </select>
		</div>

		<div class="form-group col-md-4 col-sm-2">
		  <label for="recipient-localizacao" id="recipient-localizacao" class="control-label">Localização:</label>
		  <select name="localizacao" class="form-control" >
		  	<option value='' >Selecionar Localização</option>
		  	<?php $sql_localizacao="SELECT * FROM cadastros where opcao = 'localizacao'";
					$resultado_localizacao = mysqli_query($conn,$sql_localizacao) or die("Erro ao retornar dados de Filiais cadastradas");
					// Obtendo os dados por meio de um loop while
					while ($registro_localizacao = mysqli_fetch_array($resultado_localizacao))
					{ $localizacao_cad=$registro_localizacao['nome'];
						
						
						echo"<option value='$localizacao_cad' >$localizacao_cad</option>";	}			
				?>
		  </select>
		</div>

		

		<div class="form-group col-md-4 col-sm-2 ">
		  <label for="recipient-nota" id="recipient-nota" class="control-label">Nota:</label>
		  <!-- <input type="text" name="nota" class="form-control" required> -->
		</div>

		<div class="form-group col-md-8 col-sm-2 ">
		  <label for="recipient-serie" id="recipient-serie" class="control-label">Serie:</label>
		   <input type="text" name="serie" class="form-control" >
		</div>

		<div class="form-group col-md-4 col-sm-2">
		  <label for="recipient-emissao" id="recipient-emissao" class="control-label">Emissão:</label>
		  <!-- <input type="date" name="emissao" value="" class="form-control">  -->
		</div>


		<div class="form-group col-md-8 col-sm-2">
		  <label for="recipient-fornecedor" id="recipient-fornecedor" class="control-label">Fornecedor:</label>
		  <select name="fornecedor" class="form-control" >
		  	<option value='' >Selecionar Fornecedor</option>
		  	<?php $sql_fornecedor="SELECT * FROM cadastros where opcao = 'fornecedor'";
					$resultado_fornecedor = mysqli_query($conn,$sql_fornecedor) or die("Erro ao retornar dados de Filiais cadastradas");
					// Obtendo os dados por meio de um loop while
					while ($registro_fornecedor = mysqli_fetch_array($resultado_fornecedor))
					{ $fornecedor_cad=$registro_fornecedor['nome'];
						echo"<option value='$fornecedor_cad' >$fornecedor_cad</option>";	}			
				?>
		  </select> 
		</div>

		<div class="form-group col-md-4 col-sm-2">
		  <label for="recipient-tipo" id="recipient-tipo" class="control-label">Tipo:</label>
		  <select name="tipo" class="form-control">
		  	<option value='' >Selecionar Tipo</option>
		  	<?php $sql_tipo="SELECT * FROM cadastros where opcao = 'tipo'";
					$resultado_tipo = mysqli_query($conn,$sql_tipo) or die("Erro ao retornar dados de Filiais cadastradas");
					// Obtendo os dados por meio de um loop while
					while ($registro_tipo = mysqli_fetch_array($resultado_tipo))
					{ $tipo_cad=$registro_tipo['nome'];
						echo"<option value='$tipo_cad' >$tipo_cad</option>";	}			
			?>
		  </select> 
		</div>

		<div class="form-group col-md-4 col-sm-2">
		  <label for="recipient-vida_util" id="recipient-vida_util" class="control-label">Vida Utiu:</label>
		  <input type="text" name="vida_util" value="" class="form-control"> 
		</div> 

		<div class="form-group col-md-4 col-sm-2">
		  <label for="recipient-ativo" id="recipient-ativo" class="control-label">Ativo:</label>
		  <select name="ativo" class="form-control" >
		  	<option value='' >Selecionar Status do Ativo</option>
			  <option value='sim' >Sim</option>
			  <option value='nao' >Não</option>
		  	
		  </select>
		</div>
	

		<div class="form-group col-md-4 col-sm-2">
		  <label for="recipient-descrição" class="control-label">Data de Cadastro:</label>
		  <input type="text" name="data_cadastro" id="recipient-data_cadastro" value="" class="form-control">
		</div>

		<div class="form-group col-md-8 col-sm-2">
		  <label for="recipient-descrição" class="control-label">Anexo:</label>
		  <input type="file" name="arq" value="" class="form-control">
		</div>
	
       


</div>
<br><br>
	<div class="modal-footer ">
	<div class="form-group col-md-12 col-sm-12">
	<input type="submit" class="btn btn-primary" value="Salvar alterações">

	<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
	</div>
	</div>
	</form>
  </div>
</div>
</div>





				  </div>