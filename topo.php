<?php $nome=$_SESSION['nome']; ?>

<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="assets/img/logo-dark.png" alt="Aniger Logo" style=" height: 30px; width: 170x " class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>

			
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>Nova notificação</a></li>
								<li><a href="#" class="more">Todas as notificações</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Ajuda</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Abertuda de chamados TI</a></li>
								<li><a href="#">Manual de uso</a></li>
								<li><a href="#">Dicas e Soluções</a></li>
								
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span><?php echo"$nome"; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>Meu Perfil</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Messagens</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Admin Área</span></a></li>
								<li><a href="sair.php"><i class="lnr lnr-exit"></i> <span>Sair</span></a></li>
							</ul>
						</li>
					
					</ul>
				</div>
			</div>
		</nav>