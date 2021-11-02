<?php
include "conexao.php";

$data1 = $_POST['data1'];
$data2 = $_POST['data3'];
$filial_atual = $_POST['filial_atual'];
$localizacao = $_POST['localizacao'];
$tipo = $_POST['tipo'];

	$sql = "SELECT DISTINCT ativo FROM bens WHERE data_cadastro >= '$data1' and data_cadastro <= '$data2' and filial_atual = '$filial_atual'
    and localizacao = '$localizacao' and tipo = '$tipo' ORDER BY ativo DESC";
	$resultado = mysqli_query($conn, $sql);
	while ($registro = mysqli_fetch_array($resultado) ) {

		$resul_post = $registro['ativo'];

	echo '<option value="'.$resul_post.'" class="form-control">'.$resul_post.'</option>';

	}


	?>
