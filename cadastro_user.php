<?php
    session_start();
    include "conexao2.php";
    if(isset($_SESSION['log'])==false){
        echo("<script>window.location = 'login.php';</script>");
    }
     $user=$_SESSION['user'];
?>


<?php
	include ("conexao.php");
?>

<?php

$usuario=$_POST['usuario'];

$email=$_POST['email'];

$senha=$_POST['senha'];

$tipo=$_POST['tipo'];


 $sql = "INSERT INTO usuarios (nome, email, senha, tipo)
 VALUES ('$usuario', '$email', '$senha', '$tipo')";
 mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro 02");

mysqli_close($conn);

{ echo "<br><center><b><h2>Operação realizada com sucesso!</h2></b></center>
	<meta http-equiv=refresh content='1; URL=cadastros_user.php';> "; }


?>
