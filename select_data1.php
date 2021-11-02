<?php
include "conexao.php";

$data1 = $_GET['data1'];


	$sql = "SELECT DISTINCT data_cadastro FROM bens WHERE data_cadastro >= '$data1' ORDER BY data_cadastro DESC";
	$resultado = mysqli_query($conn, $sql);
	while ($registro = mysqli_fetch_array($resultado) ) {

		$resul_post = $registro['data_cadastro'];

	echo '<option value="'.$resul_post.'" class="form-control">'.$resul_post.'</option>';

	}


	?>
