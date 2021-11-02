<?php
include "conexao.php";

$data1 = $_POST['data1'];
$data2 = $_POST['data3'];

	$sql = "SELECT DISTINCT filial_atual FROM bens WHERE data_cadastro >= '$data1' and data_cadastro <= '$data2' and filial_atual != '' ORDER BY filial_atual DESC";
	$resultado = mysqli_query($conn, $sql);
	while ($registro = mysqli_fetch_array($resultado) ) {

		$resul_post = $registro['filial_atual'];

	echo '<option value="'.$resul_post.'" class="form-control">'.$resul_post.'</option>';

	}


	?>
