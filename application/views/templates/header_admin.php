<html lang="pt-br">
	<head> 
		
		<title><?php echo $title; ?></title>
		<meta charset="utf-8">
		<?= link_tag('content/css/bootstrap.css') ?>
		<?= link_tag('content/css/normalize.css') ?>
		<?= link_tag('content/css/font-awesome.css') ?>
		<?= link_tag('content/css/glyphicons.css') ?>
		<?= link_tag('content/css/site.css') ?>
		<?= link_tag('content/css/default.css') ?>
		<style>
			.form-control, .form-control:focus, .form-control:hover {
				border: none;
				border-radius: 0px;
				border-bottom: 1px solid white;
				background-color: rgba(255,255,255,0);
				outline: 0;
				color: white;
			}
			.form-control:focus{
				border-bottom: 1px solid #dc3545;
			}

		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head >
	<body id='c'>
		<div class='container-fluid'>
			<nav class="side-navbar">
				<div class="sidenav-header d-flex align-items-center justify-content-center">
					<div class="sidenav-header-inner  text-center">
						<h2>Admin</h2> <br />
					</div>
					<div style="margin-top: 15px;" class="sidenav-header-logo"><a href="#" class="brand-small text-center">
						<strong>AD</strong></a>
					</div>
				</div>
				<div class="main-menu">
					<ul id="side-main-menu" class="side-menu list-unstyled">
					<?php
						for ($i = 0; $i < count($menu); $i++) {
							$status = "false";
							$classe = "collapse list-unstyled";
							if($menu_selectd == $menu[$i]['id'])
							{
								$status = "true";
								$classe = "collapse list-unstyled show";
							}
							echo "<li>";
							echo "<a href='#pages-nav-list" . $i . "' data-toggle='collapse' aria-expanded='".$status."'>";
							echo "<i class='icon-interface-windows'></i>";
							echo "<span>" . $menu[$i]['nome'] . "</span>";
							echo "<div class='arrow pull-right'>";
							echo "<i class='fa fa-angle-down'></i>";
							echo "</div>";
							echo "</a>";
							echo "<ul id='pages-nav-list" . $i . "' class='".$classe."'>";
							for ($j = 0; $j < count($modulo); $j++)
								if ($menu[$i]['id'] == $modulo[$j]['menu_id'])
									echo "<li><a href='" . $url . $modulo[$j]['url_modulo'] . "'><i class='" . $modulo[$j]['icone'] . "' style='margin-bottom: 10px;'></i>" . $modulo[$j]['nome_modulo'] . "</a></li>";
							echo "</ul>";
							echo "</li>";
						}
						for ($i = 0; $i < count($modulo); $i++)
							if (empty($modulo[$i]['menu_id']))
								echo "<li><a href='" . $modulo[$i]['url_modulo'] . "'><i class='" . $modulo[$i]['icone'] . "' style='margin-bottom: 10px;'></i><span>" . $modulo[$i]['nome_modulo'] . "</span></a></li>";
					?>
					</ul>
				</div>
			</nav>
			<div class="modal fade" id="admin_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					
				  </div>
				  <div class="modal-body text-center" id='mensagem'>
					
				  </div>
				  <div class="modal-footer">
					
				  </div>
				</div>
			  </div>
			</div>
			<div id="admin_confirm_modal" class="modal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header text-center">
					<h5 class="modal-title">Atenção</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div id="menssagem_confirm" class="modal-body text-center">
					
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-primary" id="bt_delete">Sim</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
				  </div>
				</div>
			  </div>
			</div>
			<div id="admin_warning_modal" class="modal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header text-center">
					<h5 class="modal-title">Atenção</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div id="mensagem_warning" class="modal-body text-center">
					
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
				  </div>
				</div>
			  </div>
			</div>
			<div class='page home-page'>
				<header class="header">
					<nav class="navbar">
						<div class="container-fluid">
							<div class="navbar-holder d-flex align-items-center justify-content-between">
								<div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn">
									<span class="glyphicon glyphicon-align-justify" style='line-height: 40px; transform: scale(2.5);'> </span></a>
								</div>
								<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
									<li class="nav-item">
										<?php
										echo "<div data-toggle='popover' data-html='true' data-placement='left' title='<div class=\"text-center\">Opções da conta</div>' 
												data-content='
													<button class=\"btn btn-outline-info btn-block glyphicon glyphicon-cog\" onclick=\"Main.logout()\">&nbsp;Configurações</button><button class=\"btn btn-outline-danger btn-block glyphicon glyphicon-log-out\" onclick=\"Main.logout()\">&nbsp;Sair</button>
												
												'  style='font-size: 40px; color: #f5f5f5; cursor: pointer; padding: 10px; border: 1px solid #e9ecef; border-radius: 35px;'>
													 <span class='glyphicon glyphicon-user'></span>
												</div>";
										  ?>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</header>