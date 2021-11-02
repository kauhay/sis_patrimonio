<?php
    session_start();

    if(isset($_SESSION['log'])==false){
        echo("<script>window.location = 'login.php';</script>");
    }
     $user=$_SESSION['user'];
?>


<?php
	include ("conexao.php");
?>

<?php

$nome=$_POST['nome'];

$opcao=$_POST['opcao'];

$codigo=$_POST['codigo'];

 $sql = "INSERT INTO cadastros (nome, opcao, cod)
 VALUES ('$nome', '$opcao', '$codigo')";
 mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");

mysqli_close($conn);

{ echo "<br><center><b><h2>Operação realizada com sucesso!</h2></b></center>
	<meta http-equiv=refresh content='1; URL=cadastros.php';> "; }

?>
