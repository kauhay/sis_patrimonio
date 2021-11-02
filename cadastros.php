
<?php
    session_start();

    ////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////

    	include 'conexao.php';


 if(isset($_SESSION['log'])==false){
        echo("<script>window.location = 'login.php';</script>");
    }
      $user=$_SESSION['user'];
?>

<!doctype html>
<html lang="pt-br">

<head>
	<title>Sistema de Controle Patrimônial</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

	<link href="new/vendor/datatables/datatables.bootstrap4.css" rel="stylesheet">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- TOPO -->
		


<?php
  
  include_once "topo.php";

?>


		<!-- TOPO -->
		
		<!-- MENU LATERAL -->
	
	<?php
  
	include_once "menu_lateral.php";

	?>

		<!-- MENU LATERAL -->

		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Cadastros</h3>
							<p class="panel-subtitle"><?php echo"$data"; ?></p>
						</div>
					
								


<div class="table-responsive">



	<form id="contact-form" method="post" action="cadastro_exe.php">

            <div class="col-md-3 col-sm-3">
               
               <input name="nome" type="text" class="form-control" placeholder="Cadastrar Filial" required>
               <input name="opcao" value="filiais" type="hidden" class="form-control" >

            </div>

			<div class="col-md-3 col-sm-3">
               
               <input name="codigo" type="text" class="form-control" placeholder="Codigo" required>
    

            </div>

            


                        <div class="col-md-6 col-sm-6">
                        <input type="submit" class="form-control submit btn btn-primary" value="Cadastrar">
                        </div>

					
    </form>



</div>  

<br>

<div class="table-responsive">



	<form id="contact-form" method="post" action="cadastro_exe.php">

            <div class="col-md-3 col-sm-3">
               
               <input name="nome" type="text" class="form-control" placeholder="Cadastrar Localização" required>
               <input name="opcao" value="localizacao" type="hidden" class="form-control" >

            </div>
			<div class="col-md-3 col-sm-3">
               
               <input name="codigo" type="text" class="form-control" placeholder="Codigo" required>
    

            </div>

            


                        <div class="col-md-6 col-sm-6">
                        <input type="submit" class="form-control submit btn btn-primary" value="Cadastrar">
                        </div>

					
    </form>



</div>  

<br>

<div class="table-responsive">



	<form id="contact-form" method="post" action="cadastro_exe.php">

            <div class="col-md-3 col-sm-3">
               
               <input name="nome" type="text" class="form-control" placeholder="Cadastrar Tipo" required>
               <input name="opcao" value="tipo" type="hidden" class="form-control" >

            </div>

			<div class="col-md-3 col-sm-3">
               
               <input name="codigo" type="text" class="form-control" placeholder="Codigo" required>
    

            </div>


                        <div class="col-md-6 col-sm-6">
                        <input type="submit" class="form-control submit btn btn-primary" value="Cadastrar">
                        </div>

					
    </form>



</div>  

<br>


<div class="table-responsive">



	<form id="contact-form" method="post" action="cadastro_exe.php">

            <div class="col-md-3 col-sm-3">
               
               <input name="nome" type="text" class="form-control" placeholder="Cadastrar Fornecedor" required>
               <input name="opcao" value="fornecedor" type="hidden" class="form-control" >

            </div>

			<div class="col-md-3 col-sm-3">
               <input name="codigo" type="text" class="form-control" placeholder="Codigo" required>
            </div>

                        <div class="col-md-6 col-sm-6">
                        <input type="submit" class="form-control submit btn btn-primary" value="Cadastrar">
                        </div>

    </form>
 


</div>  

<br>



  </div>
</div>
</div>





				  </div>




	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>

	<script src="new/vendor/datatables/jquery.datatables.js"></script>
<script src="new/vendor/datatables/datatables.bootstrap4.js"></script>
<script src="new/js/sb-admin-datatables.min.js"></script>

</body>

</html>


