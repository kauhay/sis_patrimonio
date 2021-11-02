
<?php


session_start();
  
if(isset($_SESSION['log'])==false){
	echo("<script>window.location = 'login.php';</script>");
}
 $user=$_SESSION['user'];

include_once("conexao.php");
 

$descricao = $_POST['descricao'];
$filial = $_POST['filial'];
$filial_atual = $_POST['filial_atual'];
$localizacao = $_POST['localizacao'];
$nota = $_POST['nota'];
$valor = $_POST['valor'];
$serie = $_POST['serie'];
$emissao = $_POST['emissao'];
$fornecedor = $_POST['fornecedor'];
$tipo = $_POST['tipo'];
$vida_util = $_POST['vida_util'];
$ativo = $_POST['ativo'];
$data_cadastro = $_POST['data_cadastro'];
$arq = $_FILES["arq"]; 


$sql = "SELECT * FROM cadastros where nome = '$fornecedor'";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
// Obtendo os dados por meio de um loop while
// While para e exilição dos items selecionados no filtro
while ($registro = mysqli_fetch_array($resultado))
{
$cod_fornecedor = $registro['cod'];
}



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



$result_events = "INSERT INTO bens (descricao, filial, filial_atual, localizacao, nota, valor,  
serie, emissao, cod_fornecedor, fornecedor, tipo, vida_util, ativo, data_cadastro, caminho_arq)
VALUES ('$descricao', '$filial', '$filial_atual', '$localizacao', '$nota', '$valor', '$serie',
'$emissao', '$cod_fornecedor', '$fornecedor', '$tipo', '$vida_util', '$ativo', '$data_cadastro', '$caminho_arq')";
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
            ?>

