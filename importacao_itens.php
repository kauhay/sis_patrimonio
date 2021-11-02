<?php

	include "conexao.php";

	$dados = $_FILES['arquivo']['tmp_name'];
	//var_dump($dados);
	if(!empty($_FILES['arquivo']['tmp_name'])){
		$arquivo = new DOMDocument();
		$arquivo->load($dados);
		//var_dump($arquivo);
		$linhas = $arquivo->getElementsByTagName("Row");
		//var_dump($linhas);
		$primeira_linha = true;
		foreach($linhas as $linha){
			if($primeira_linha == false){

				$descricao = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
                echo "Descrição: $descricao <br>";
                
				$filial = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
                echo "Filial: $filial <br>";
                
				$filial_atual = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
                echo "Filial Atual: $filial_atual <br>";
                
				$localizacao = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
                echo "Localização: $localizacao <br>";
                
				$nota = $linha->getElementsByTagName("Data")->item(4)->nodeValue;
                echo "Nota: $nota <br>";
                
				$valor = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
                echo "Valor: $valor <br>";
                
				$serie = $linha->getElementsByTagName("Data")->item(6)->nodeValue;
                echo "Serie: $serie <br>";
                
				$emissao = $linha->getElementsByTagName("Data")->item(7)->nodeValue;
                echo "Emissão: $emissao <br>";
                
				$cod_fornecedor = $linha->getElementsByTagName("Data")->item(8)->nodeValue;
				echo "Cod Fornecedor: $cod_fornecedor <br>";

				$fornecedor = $linha->getElementsByTagName("Data")->item(9)->nodeValue;
				echo "Fornecedor: $fornecedor <br>";

				$tipo = $linha->getElementsByTagName("Data")->item(10)->nodeValue;
				echo "Tipo: $tipo <br>";

				$vida_util = $linha->getElementsByTagName("Data")->item(11)->nodeValue;
				echo "Vida Util: $vida_util <br>";
				
				$ativo = $linha->getElementsByTagName("Data")->item(12)->nodeValue;
				echo "Ativo: $ativo<br>";

				echo "<hr>";


				//Inserir o usuário no BD
				$sql = "INSERT INTO bens (descricao, filial, filial_atual, localizacao, nota, valor,  
				serie, emissao, cod_fornecedor, fornecedor, tipo, vida_util, ativo, data_cadastro) values
				('$descricao', '$filial', '$filial_atual', '$localizacao', '$nota', '$valor',  
				'$serie', '$emissao', '$cod_fornecedor', '$fornecedor', '$tipo', '$vida_util', '$ativo', '$data_atual')";

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
