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
  <link rel="stylesheet" href="assets/fontico/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
<!-- tabela -->

	<link href="new/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

	<link href="new/sk.css" rel="stylesheet">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->

	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="new/js/jquery.form.js"></script>

</head>

<body>


  <div id="wrapper">
		<!-- NAVBAR -->

	<?php //include ('topo.php');?>

		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->

<?php


session_start();
  
if(isset($_SESSION['log'])==false){
	echo("<script>window.location = 'login.php';</script>");
}
 $user=$_SESSION['user'];

 include_once("conexao.php");
 

$id = $_POST['id'];
$descricao = $_POST['descricao'];
$filial = $_POST['filial'];
$filial_atual = $_POST['filial_atual'];
$localizacao = $_POST['localizacao'];
$nota = $_POST['nota'];
$serie = $_POST['serie'];
//$emissao = $_POST['emissao'];
$fornecedor = $_POST['fornecedor'];
$tipo = $_POST['tipo'];
$vida_util = $_POST['vida_util'];
$ativo = $_POST['ativo'];
//$data_cadastro = $_POST['data_cadastro'];
$arq = $_FILES["arq"]; 



$sql = "SELECT * FROM bens where id = '$id'";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
// Obtendo os dados por meio de um loop while
// While para e exilição dos items selecionados no filtro
while ($registro = mysqli_fetch_array($resultado))
{
//$id = $registro['id'];
$descricao2 = $registro['descricao'];

$filial2 = $registro['filial'];

$filial_atual2 = $registro['filial_atual'];
$localizacao2 = $registro['localizacao'];

$nota2 = $registro['nota'];
$serie2 = $registro['serie'];
//$emissao = $registro['emissao'];
$fornecedor2 = $registro['fornecedor'];
$tipo2 = $registro['tipo'];
$vida_util2 = $registro['vida_util'];

$arq2 = $registro['caminho_arq'];

//$data_cadastro = $registro['data_cadastro'];
}

if($descricao == null){$descricao3 = $descricao2;} else {$descricao3 = $descricao;}

if($filial == null){$filial3 = $filial2;} else {$filial3 = $filial;}

if($filial_atual == null){$filial_atual3 = $filial_atual2;} else {$filial_atual3 = $filial_atual;}

if($localizacao == null){$localizacao3 = $localizacao2;} else {$localizacao3 = $localizacao;}

if($serie == null){$serie3 = $serie2;} else {$serie3 = $serie;}

if($fornecedor == null){$fornecedor3 = $fornecedor2;} else {$fornecedor3 = $fornecedor;}

if($tipo == null){$tipo3 = $tipo2;} else {$tipo3 = $tipo;}

if($vida_util == null){$vida_util3 = $vida_util2;} else {$vida_util3 = $vida_util;}

if($ativo == null){$ativo3 = $ativo2;} else {$ativo3 = $ativo;}

// Se a foto estiver sido selecionada
if (!empty($arq["name"])) {


	$error = array();

	// Se não houver nenhum erro
	if (count($error) == 0) {

		// Pega extensão da imagem
		preg_match("/\.(pdf|xml){1}$/i", $arq["name"], $ext);

		// Gera um nome único para a imagem
		$nome_arq = md5(uniqid(time())) . "." . $ext[1];

		// Caminho de onde ficará a imagem
		$caminho_arq = "arq/" . $nome_arq;

		// Faz o upload da imagem para seu respectivo caminho
		move_uploaded_file($arq["tmp_name"], $caminho_arq);



$result_events = "UPDATE bens SET descricao='$descricao3',filial='$filial3', filial_atual='$filial_atual3', localizacao='$localizacao3', 
serie='$serie3', fornecedor='$fornecedor3', tipo='$tipo3', vida_util='$vida_util3', ativo='$ativo3', caminho_arq='$caminho_arq' 
			WHERE id ='$id'";
			$resultado_events = mysqli_query($conn, $result_events);

			//Verificar se alterou no banco de dados através "mysqli_affected_rows"
			if(mysqli_affected_rows($conn)){
				$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Evento editado com Sucesso<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
				header("Location: index.php");
			}else{
				$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao editar o evento <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
				header("Location: index.php");
			}
		}} 
		
		else{ 

$result_events = "UPDATE bens SET descricao='$descricao3',filial='$filial3', filial_atual='$filial_atual3', localizacao='$localizacao3', 
serie='$serie3', fornecedor='$fornecedor3', tipo='$tipo3', vida_util='$vida_util3', ativo='$ativo3' 
			WHERE id ='$id'";
			$resultado_events = mysqli_query($conn, $result_events);
			
			//Verificar se alterou no banco de dados através "mysqli_affected_rows"
			if(mysqli_affected_rows($conn)){
				$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Evento editado com Sucesso<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
				header("Location: index.php");
				}else{
				$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao editar o evento <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
				header("Location: index.php");
					 }  
			}
	?>

</div></div>
</body>

</html>
