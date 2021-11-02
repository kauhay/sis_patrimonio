<?php

	include "conexao.php";

	//$dados = $_FILES['arquivo'];
	//var_dump($dados);
	if(!empty($_FILES['arquivo']['tmp_name'])){
		$arquivo = new DomDocument();
		$arquivo->load($_FILES['arquivo']['tmp_name']);
		//var_dump($arquivo);
		$linhas = $arquivo->getElementsByTagName("Row");
		//var_dump($linhas);
		$primeira_linha = true;
		foreach($linhas as $linha){
			if($primeira_linha == false){

				$fornecedor = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
                echo "fornecedor: $fornecedor <br>";
                
				$cod_fornecedor = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
                echo "cod_fornecedor: $cod_fornecedor <br>";
                
				
				 

				echo "<hr>";


				//Inserir o usuário no BD
				$sql = "INSERT INTO cadastros (nome, opcao, cod) values
				('$fornecedor', 'fornecedor', '$cod_fornecedor')";

				mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");

		}
			$primeira_linha = false;
		}

		echo "<META HTTP-EQUIV=REFRESH CONTENT = '5;URL=index.php'>
		<script type=\"text/javascript\">
		  alert(\"Importação Realizada com Sucesso.\");
		</script>";

	}
?>
