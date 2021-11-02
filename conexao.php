<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "patrimonio";

	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	date_default_timezone_set('America/Fortaleza');

	$data=date('d-m-Y');

	$data2=date('Y-m-d H:i:s');

	$data_atual = $data2;
?>
 