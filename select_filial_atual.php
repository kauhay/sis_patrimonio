<?php
include "conexao.php";

$data1 = $_POST['data1'];
$data2 = $_POST['data3'];
$filial_atual = $_POST['filial_atual'];

	$sql = "SELECT DISTINCT localizacao FROM bens WHERE data_cadastro >= '$data1' and data_cadastro <= '$data2' and filial_atual = '$filial_atual' ORDER BY localizacao DESC";
	$resultado = mysqli_query($conn, $sql);
	while ($registro = mysqli_fetch_array($resultado) ) {

		$resul_post = $registro['localizacao'];

	echo '<option value="'.$resul_post.'" class="form-control">'.$resul_post.'</option>';

	}


	?>
