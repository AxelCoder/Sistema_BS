<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Editar lista de alumnos</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="/Sistema_BS/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="/Sistema_BS/global_assets/js/main/jquery.min.js"></script>
	<script src="/Sistema_BS/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="/Sistema_BS/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="/Sistema_BS/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="/Sistema_BS/global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="/Sistema_BS/global_assets/js/demo_pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
		<a href="index.php" class="d-inline-block">
				<img src="/Sistema_BS/global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="/Sistema_BS/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="/Sistema_BS/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="/Sistema_BS/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="/Sistema_BS/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="/Sistema_BS/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="/Sistema_BS/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="/Sistema_BS/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="/Sistema_BS/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="/Sistema_BS/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="/Sistema_BS/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="/Sistema_BS/global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="/Sistema_BS/global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Victoria Baker</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
						<ul class="nav nav-sidebar" data-nav-type="accordion">

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-address-book"></i> <span>Empleados</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<!--<li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>-->
								<li class="nav-item"><a href="edit_empleados.php" class="nav-link">Editar</a></li>
								<li class="nav-item"><a href="add_usuarios.php" class="nav-link">Añadir</a></li>
								<li class="nav-item"><a href="Empleados_lista.php" class="nav-link">Listar</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Departamentos</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<!--<li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>-->
								<li class="nav-item"><a href="edit_departamentos.php" class="nav-link">Editar</a></li>
								<li class="nav-item"><a href="add_departamentos.php" class="nav-link">Añadir</a></li>
								<li class="nav-item"><a href="departamentos_lista.php" class="nav-link">Listar</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Empresas</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<!--<li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>-->
								<li class="nav-item"><a href="edit_empresas.php" class="nav-link">Editar</a></li>
								<li class="nav-item"><a href="add_empresas.php" class="nav-link">Añadir</a></li>
								<li class="nav-item"><a href="empresas_lista.php" class="nav-link">Listar</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Vacaciones</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<!--<li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>-->
								<li class="nav-item"><a href="edit_vacaciones.php" class="nav-link">Editar</a></li>
								<li class="nav-item"><a href="add_vacaciones.php" class="nav-link">Añadir</a></li>
								<li class="nav-item"><a href="lista_vacaciones.php" class="nav-link">Listar</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Tutorias</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<!--<li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>-->
								<li class="nav-item"><a href="edit_tutorias.php" class="nav-link">Editar</a></li>
								<li class="nav-item"><a href="añadir_tutorias.php" class="nav-link">Añadir</a></li>
								<li class="nav-item"><a href="lista_tutorias.php" class="nav-link">Listar</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Alumnos</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<!--<li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>-->
								<li class="nav-item"><a href="edit_alumnos.php" class="nav-link">Editar</a></li>
								<li class="nav-item"><a href="add_alumnos.php" class="nav-link">Añadir</a></li>
								<li class="nav-item"><a href="lista_alumnos.php" class="nav-link">Listar</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-menu"></li>
						<a href="pagos_transporte.php" class="nav-link"><i class="icon-address-book"></i> <span>Pago de transporte</span></a>
						</li>
						</ul>
					</div>
					<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">

				<!-- Empleados -->
				<div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Lista de alumnos</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>
    
                        <table class="table datatable-basic">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Matricula</th>
                                    <th>Nombre</th>
                                    <th>Carrera</th>
                                    <th>Asesor</th>
                                    <th>No. Asesor</th>
                                    <th>Departamento de asesor</th>
                                    <th>ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

    
                                        <td><button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger">Borrar <i class="icon-eraser"></i></button></td>
			
                                        <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_remote">editar <i class="icon-pencil3 mr-2"></i></button></td>
                                        

                                    <td>1930205</td>
                                    <td>Angel Lucio</td>
                                    <td>LAYGE</td>
                                    <td>Agustin Sanchez</td>
                                    <td>01</td>
                                    <td>Redes</td>
                                    <td>13467</td>
                                    </td>
                                </tr>
                                <tr>

    
                                        <td><button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger">Borrar <i class="icon-eraser"></i></button></td>
			
                                        <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_remote">editar <i class="icon-pencil3 mr-2"></i></button></td>
                                        

                                    <td>1930232</td>
                                    <td>Juan Escutia</td>
                                    <td>ITI</td>
                                    <td>Jaqueline Diaz</td>
                                    <td>20</td>
                                    <td>Area administrativa</td>
                                    <td>2346</td>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

    
                                        <td><button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger">Borrar <i class="icon-eraser"></i></button></td>
			
                                        <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_remote">editar <i class="icon-pencil3 mr-2"></i></button></td>
                                        

                                    <td>1930254</td>
                                    <td>Manuel Gutierrez</td>
                                    <td>ISA</td>
                                    <td>Beatriz Baez</td>
                                    <td>11</td>
                                    <td>Recursos humanos</td>
                                    <td>1237</td>
                                    </td>
                                </tr>
                                <tr>

    
                                        <td><button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger">Borrar <i class="icon-eraser"></i></button></td>
			
                                        <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_remote">editar <i class="icon-pencil3 mr-2"></i></button></td>
                                        

                                        <td>1930234</td>
                                        <td>Yael Medina</td>
                                        <td>ITI</td>
                                        <td>Ana Alemán</td>
                                        <td>14</td>
                                        <td>Redes</td>
                                        <td>1234</td>
                                    </td>
                                </tr>
                                <tr>

                                        
        <td><button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger">Borrar <i class="icon-eraser"></i></button></td>
			
        <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_remote">editar <i class="icon-pencil3 mr-2"></i></button></td>
        

                                        <td>1930267</td>
                                        <td>Pablo Mata</td>
                                        <td>ISA</td>
                                        <td>Manuel Tirado</td>
                                        <td>42</td>
                                        <td>Recursos humanos</td>
                                        <td>7534</td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

				<!-- /Empleados -->

			</div>
			<!-- /content area -->

					 <!-- Modal Eliminar -->
					 <div id="modal_theme_danger" class="modal fade" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-danger">
										<h6 class="modal-title">Confirmar eliminación</h6>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
		

									<form class="login-form" action="index.html">
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Login to your account</h5>
								<span class="d-block text-muted">Enter your credentials below</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="text" class="form-control" placeholder="Username">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" class="form-control" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
							</div>

							<div class="text-center">
								<a href="login_password_recover.html">Forgot password?</a>
							</div>
						</div>
					</div>
				</form>

									<!--<div class="modal-body">
										<h6 class="font-weight-semibold">¿Esta seguro que desea eliminar?</h6>
									</div>-->
									<div class="modal-footer">
										<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
										<button type="button" class="btn bg-danger">Eiminar</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Modal Eliminar -->
		
			<!-- Modal Editar -->
		<div id="modal_remote" class="modal" tabindex="-1">
				<div class="modal-dialog modal-full">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Editar Empleados</h5>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
                        <div class="card">
                                </div>
            
                                <div class="card-body">
            
                                    <form action="#">
                                        <fieldset class="mb-3">
                                            <legend class="text-uppercase font-size-sm font-weight-bold">Ingrese sus datos aqui</legend>
            
											<div class="form-group row">
													<label class="col-form-label col-lg-2">Matricula</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" value="1930205">
													</div>
												</div>
				
												<div class="form-group row">
													<label class="col-form-label col-lg-2">Nombre</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" value="Angel Lucio">
													</div>
												</div>
				
												<div class="form-group">
														<label class="col-form-label col-lg-2">Carrera</label>
														<select name="combo">
															<optgroup label="Carreras">
																<option value="ID">ITI</option>
																<option value="AZ">ISA</option>
																<option value="CO">IM</option>
																<option value="ID">ITM</option>
																<option value="WY">LAYGE</option>
															</optgroup>
														</select>
													</div>
					
												<div class="form-group row">
													<label class="col-form-label col-lg-2">Asesor</label>
													<div class="col-lg-10">
															<input type="text" class="form-control"  value="Agustin Sanchez">
														<!--<input type="text" class="form-control" placeholder="example@gmail.com">  Texto en gris-->
													</div>
												</div>
				
												<div class="form-group row">
													<label class="col-form-label col-lg-2">No. Asesor</label>
													<div class="col-lg-10">
														<input type="text" class="form-control"  value="01">
													</div>
												</div>
				
												<div class="form-group row">
													<label class="col-form-label col-lg-2">Departamento</label>
													<div class="col-lg-10">
														<input type="text" class="form-control"  value="Redes">
													</div>
												</div>
				
												<div class="form-group row">
													<label class="col-form-label col-lg-2">ID</label>
													<div class="col-lg-10">
														<input type="text" class="form-control"  value="13467">
													</div>

						<div class="modal-body"></div>
			
						<div class="modal-footer">
							<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
							<button type="button" class="btn bg-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /Modal Editar -->

			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
