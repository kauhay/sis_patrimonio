<?php
include "conexao.php";

$data1 = $_POST['data1'];
$data2 = $_POST['data3'];
$filial_atual = $_POST['filial_atual'];
$localizacao = $_POST['localizacao'];

	$sql = "SELECT DISTINCT tipo FROM bens WHERE data_cadastro >= '$data1' and data_cadastro <= '$data2' and filial_atual = '$filial_atual'
    and localizacao = '$localizacao' ORDER BY tipo DESC";
	$resultado = mysqli_query($conn, $sql);
	while ($registro = mysqli_fetch_array($resultado) ) {

		$resul_post = $registro['tipo'];

	echo '<option value="'.$resul_post.'" class="form-control">'.$resul_post.'</option>';

	}


	?>
