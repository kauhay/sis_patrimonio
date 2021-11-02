<!-- conexão a base de dados e verificação de usuario -->
<?php



ini_set('display_errors', 0 );
	error_reporting(0);	


    session_start();
 include 'conexao.php';

 if(isset($_SESSION['log'])==false){
        echo("<script>window.location = 'login.php';</script>");
    }
	  $user=$_SESSION['user'];



?>
<!-- conexão a base de dados e verificação de usuario -->

<!doctype html>
<html lang="pt-br">

<head> 
	<title>Sistema de Controle Patrimônial</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

	<link href="new/vendor/datatables/datatables.bootstrap4.css" rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

	<script type="text/javascript" src="function.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- TOPO -->


<?php
  
  include_once "topo.php";

?>


		<!-- TOPO -->
		
		<!-- MENU LATERAL -->
	
	<?php
  
	include_once "menu_lateral.php";

	?>

		<!-- MENU LATERAL -->

		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Filtro</h3>
							<p class="panel-subtitle"><?php echo"$data"; ?></p>
						</div>
					
								
<!-- Filtro de Bens -->
						<form class="contact-form" method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>">
						   <div class="col-md-2 col-sm-2">

						    <input class="form-control" type="date" name="data1" id="data1">


								</div>

								<div class="col-md-2 col-sm-2">

						   <select name="data2" class="form-control" id="data2">
						   <option value="" >Data Final</option>
						   </select>

					</div>


					<div class="col-md-2 col-sm-2">

						<select name="filial_atual" class="form-control" id="filial_atual">
						<option value="">Filial Atual</option>
						</select>

					</div> 


					<div class="col-md-2 col-sm-2">

						<select name="localizacao" class="form-control" id="localizacao">
						<option value="" >Localização</option>
						</select>

					</div> 



						<div class="col-md-2 col-sm-2">
							<select name="tipo" class="form-control" id="tipo" >
								<option value="">Tipo</option>
							</select>

						</div>

						<div class="col-md-2 col-sm-2">
							<select name="ativo" class="form-control" id="ativo" >
								<option value="">Ativo</option>
							</select>

						</div>

					

				
<br><br><br>

<input type="submit" class="btn btn-primary btn-block" value="Buscar">

</form>
<!-- Filtro de Bens -->

							
						</div>
					</div>
					<!-- END OVERVIEW -->

					
					<div class="row">
						<div class="container-fluid">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tabela de Bens</h3>
						
								</div>
								<div class="panel-body no-padding">

								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" align="center">
											<thead>
												<tr>
													<th>  </th>

													<th>ID</th>
													<th>Descrição</th>
													<th>Nota</th>
													<th>Valor</th>
													<th>Serie</th>
													<th>Emissão</th>
													<th>Fornecedor_cod</th>
													<th>Fornecedor</th>
													<th>Filial</th>
													<th>Filial Atual</th>
													<th>Localização</th>
													<th>Tipo</th>
													<th>Vida Util</th>
													<th>Ativo</th>
													<th>Cadastro</th>
												</tr>
											</thead>
											<tbody>

<?php
$data1loc = $_POST['data1'];
$data2loc = $_POST['data2'];
$filialloc = $_POST['filial_atual'];
$localizacaoloc = $_POST['localizacao'];
$tipoloc = $_POST['tipo'];
$ativoloc = $_POST['ativo'];

include "if_filtro.php";
// Obtendo os dados por meio de um loop while
// While para e exilição dos items selecionados no filtro
while ($registro = mysqli_fetch_array($resultado))
{

$id = $registro['id'];
$descricao = $registro['descricao'];
$filial = $registro['filial'];
$filial_atual = $registro['filial_atual'];
$localizacao = $registro['localizacao'];
$nota = $registro['nota'];
$valor = $registro['valor'];
$serie = $registro['serie'];
$emissao = $registro['emissao'];
$cod_fornecedor = $registro['cod_fornecedor'];
$fornecedor = $registro['fornecedor'];
$tipo = $registro['tipo'];
$vida_util = $registro['vida_util'];
$ativo = $registro['ativo'];
$data_cadastro = $registro['data_cadastro'];
$arq = $registro['caminho_arq'];

?>

<tr>

<td>
  <!-- Button trigger modal -->
  <!-- Modal -->
  <!-- Envia as Informações para o modal de Edição -->
<button type="button" style="width: 100px; height: 30px; " class="btn btn-xs btn btn-primary" data-toggle="modal" data-target="#exampleModal1"

data-whatever="<?php echo "$id"; ?>"
data-whateverdescricao="<?php echo "$descricao"; ?>"
data-whateverfilial="<?php echo "$filial"; ?>"
data-whateverfilial_atual="<?php echo "$filial_atual"; ?>"
data-whateverlocalizacao="<?php echo "$localizacao"; ?>"
data-whatevernota="<?php echo "$nota"; ?>"
data-whateverserie="<?php echo "$serie"; ?>"
data-whateveremissao="<?php echo "$emissao"; ?>"
data-whateverfornecedor="<?php echo "$fornecedor"; ?>"
data-whatevertipo="<?php echo "$tipo"; ?>"
data-whatevervida_util="<?php echo "$vida_util"; ?>"
data-whateverativo="<?php echo "$ativo"; ?>"
data-whateverdata_cadastro="<?php echo "$data_cadastro"; ?>"

>Editar </button>
<!-- Envia as Informações para o modal de Edição -->

<br><br>
<button type="button" style="width: 100px; height: 30px; " class="btn btn-xs btn btn-primary" data-toggle="modal" data-target="#exampleModal2"
data-whatever="<?php echo "$id"; ?>"
data-whateverdescricao="<?php echo "$descricao"; ?>"
data-whateverfilial="<?php echo "$filial"; ?>"
data-whateverfilial_atual="<?php echo "$filial_atual"; ?>"
data-whateverlocalizacao="<?php echo "$localizacao"; ?>"
data-whatevernota="<?php echo "$nota"; ?>"
data-whateverserie="<?php echo "$serie"; ?>"
data-whateveremissao="<?php echo "$emissao"; ?>"
data-whateverfornecedor="<?php echo "$fornecedor"; ?>"
data-whatevertipo="<?php echo "$tipo"; ?>"
data-whatevervida_util="<?php echo "$vida_util"; ?>"
data-whateverativo="<?php echo "$ativo"; ?>"
data-whateverdata_cadastro="<?php echo "$data_cadastro"; ?>"
>Clonar item</button>
<br><br>
<a href="<?php echo"$arq"; ?>" style="width: 100px; height: 30px;" target="_blank" class="btn btn-xs btn btn-primary" >Ver anexo</a>
<br><br>
</td>
<!-- Exibe os itens selecionados pelo Filtro -->
<td><?php echo"$id"; ?></td>
<td><?php echo"$descricao"; ?></td>
<td><?php echo"$nota"; ?></td>
<td><?php echo"$valor"; ?></td>
<td><?php echo"$serie"; ?></td>
<td><?php echo"$emissao"; ?></td>
<td><?php echo"$cod_fornecedor"; ?></td>
<td><?php echo"$fornecedor"; ?></td>
<td><?php echo"$filial"; ?></td>
<td><?php echo"$filial_atual"; ?></td>
<td><?php echo"$localizacao"; ?></td>
<td><?php echo"$tipo"; ?></td>
<td><?php echo"$vida_util"; ?></td>
<td><?php echo"$ativo"; ?></td>
<td><?php echo"$data_cadastro"; ?></td>
<!-- Exibe os itens selecionados pelo Filtro -->

</tr>

<!-- Fim do While para e exilição dos items selecionados no filtro -->
												  <?php
												  }
												  ?>
<!-- Fim While para e exilição dos items selecionados no filtro -->

												</tbody>
												</table>

												   


												<div class="panel-footer">
									<div class="row">
										
										<div class="">
<!-- Botão de abertura do modal para adição de itens -->
										<button type="button" class="btn btn-primary" data-toggle="modal" 
										data-target="#exampleModal" data-whatever="<?php echo "$id"; ?>"> Adicionar Item</button>
<!-- Botão de abertura do modal para adição de itens -->
										</div>


									</div>

												</div>
								</div>
							
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
					
					
					</div> 
					
					
				</div>
			</div>
		
		</div>
	
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">CACALQUI &copy; 2020 <a href="#" target="_blank"></a>. All Rights Reserved/<?php echo"$filialsk";?>/</p>
			</div>
		</footer>
	</div>
<?php
// Include do codigo do modal de Adição de Item
include"modal_additem.php";
// Include do codigo do modal de Adição de Item 

// Include do codigo do modal de Edição 
include"modal_editar_item.php";
// Include do codigo do modal de Edição 


?>





	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>

	<script src="new/vendor/datatables/jquery.datatables.js"></script>
<script src="new/vendor/datatables/datatables.bootstrap4.js"></script>
<script src="new/js/sb-admin-datatables.min.js"></script>

<!-- Envia as Informações para o modal de Edição -->
<script type="text/javascript">

  	$('#exampleModal1').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever')
  var recipientdescricao = button.data('whateverdescricao')
  var recipientfilial = button.data('whateverfilial')
  var recipientfilial_atual = button.data('whateverfilial_atual')
  var recipientlocalizacao = button.data('whateverlocalizacao')
  var recipientnota = button.data('whatevernota')
  var recipientserie = button.data('whateverserie')
  var recipientemissao = button.data('whateveremissao')
  var recipientfornecedor = button.data('whateverfornecedor')
  var recipienttipo = button.data('whatevertipo')
  var recipientvida_util = button.data('whatevervida_util')
  var recipientativo = button.data('whateverativo')
  var recipientdata_cadastro = button.data('whateverdata_cadastro')
   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  // modal.find('.modal-body input').val(recipient)
  var modal = $(this)
  modal.find('#recipient-id').val(recipient)
  modal.find('.modal-title').text('Editar o Item: ' + recipient)
  
  modal.find('#recipient-descricao').val(recipientdescricao)
  modal.find('#recipient-descricao').text('Descrição: ' + recipientdescricao)

  modal.find('#recipient-filial').val(recipientfilial)
  modal.find('#recipient-filial').text('Filial: ' + recipientfilial)

  modal.find('#recipient-filial_atual').val(recipientfilial_atual)
  modal.find('#recipient-filial_atual').text('Filial Atual: ' + recipientfilial_atual)

  modal.find('#recipient-localizacao').val(recipientlocalizacao)
  modal.find('#recipient-localizacao').text('Localização: ' + recipientlocalizacao)

  modal.find('#recipient-nota').val(recipientnota)
  modal.find('#recipient-nota').text('Nota: ' + recipientnota)

  modal.find('#recipient-serie').val(recipientserie)
  modal.find('#recipient-serie').text('Serie: ' + recipientserie)

  modal.find('#recipient-emissao').val(recipientemissao)
  modal.find('#recipient-emissao').text('Emissao: ' + recipientemissao)

  modal.find('#recipient-fornecedor').val(recipientfornecedor)
  modal.find('#recipient-fornecedor').text('Fornecedor: ' + recipientfornecedor)

  modal.find('#recipient-tipo').val(recipienttipo)
  modal.find('#recipient-tipo').text('Tipo: ' + recipienttipo)

  modal.find('#recipient-vida_util').val(recipientvida_util)
  modal.find('#recipient-vida_util').text('Vida ultil: ' + recipientvida_util)

  modal.find('#recipient-ativo').val(recipientativo)
  modal.find('#recipient-ativo').text('Ativo: ' + recipientativo)

  modal.find('#recipient-data_cadastro').val(recipientdata_cadastro)
  modal.find('#recipient-data_cadastro').text('Data cadastro: ' + recipientdata_cadastro)
})

</script>
<!-- Envia as Informações para o modal de Edição -->


</body>

</html>
