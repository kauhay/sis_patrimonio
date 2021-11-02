<?PHP  $user_tipo=$_SESSION['log']; ?>		
		
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
					<br>
						<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Inicio</span></a></li>
						<li><a href="cadastros.php" class=""><i class="lnr lnr-code"></i> <span>Cadastros</span></a></li>
						<li><a href="cadastros_user.php" class=""><i class="fa fa-user-plus"></i> <span>Usuarios</span></a></li>
						<li><a href="importar_itens.php" class=""><i class="lnr lnr-upload"></i> <span>Importar Itens</span></a></li>
						<?php if($user_tipo == 'TI'){echo" <li><a href='estoque_ti/index.php' class=''><i class='lnr lnr-coffee-cup'></i> <span>Estoque TI_COC</span></a></li> ";} ?>
					</ul>
				</nav>
			</div>
		</div>
 