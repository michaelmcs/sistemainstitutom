<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>MASKHARISUN-INICIO DE SESION</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="MASKHARISUN" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link href="publico/css/material/app.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<div class="material-loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
			</svg>
			<div class="message">Cargando...</div>
		</div>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin login-cover -->
	<div class="login-cover">
		<div class="login-cover-image" style="background-image: url(publico/img/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
		<div class="login-cover-bg"></div>
	</div>
	<!-- end login-cover -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-v2" data-pageload-addclass="animated fadeIn">
			<!-- begin brand -->
			<div class="login-header">
				<div class="brand">
					<span class="logo"></span> <b>INICIO</b> SESION
					<small>Maskharisun Instituto Tecnologico</small>
				</div>
				<div class="icon">
					<i class="fa fa-lock"></i>
				</div>
			</div>
			<!-- end brand -->
			<!-- begin login-content -->
			<div class="login-content">
				<form action="index.html" method="GET" class="margin-bottom-0">
					<div class="form-group m-b-20">
						<input type="text" class="form-control form-control-lg" placeholder="CORREO" required />
					</div>
					<div class="form-group m-b-20">
						<input type="password" class="form-control form-control-lg" placeholder="CONTRASEÑA" required />
					</div>
					<div class="checkbox checkbox-css m-b-20">
						<input type="checkbox" id="remember_checkbox" /> 
						<label for="remember_checkbox">
							Recordarme
						</label>
					</div>
					<div class="login-buttons">
						<button type="submit" class="btn btn-aqua btn-block btn-lg">Iniciar Sesion</button>
					</div>
					<!-- <div class="m-t-20">
						Not a member yet? Click <a href="javascript:;">here</a> to register.
					</div> -->
				</form>
			</div>
			<!-- end login-content -->
		</div>
		<!-- end login -->
		
		<!-- begin login-bg -->
		<ul class="login-bg-list clearfix">
			<li class="active"><a href="javascript:;" data-click="change-bg" data-img="publico/img/login-bg/login-bg-17.jpg" style="background-image: url(publico/img/login-bg/login-bg-17.jpg)"></a></li>
			<li><a href="javascript:;" data-click="change-bg" data-img="publico/img/login-bg/login-bg-16.jpg" style="background-image: url(publico/img/login-bg/login-bg-16.jpg)"></a></li>
			<li><a href="javascript:;" data-click="change-bg" data-img="publico/img/login-bg/login-bg-15.jpg" style="background-image: url(publico/img/login-bg/login-bg-15.jpg)"></a></li>
			<li><a href="javascript:;" data-click="change-bg" data-img="publico/img/login-bg/login-bg-14.jpg" style="background-image: url(publico/img/login-bg/login-bg-14.jpg)"></a></li>
			<li><a href="javascript:;" data-click="change-bg" data-img="publico/img/login-bg/login-bg-13.jpg" style="background-image: url(publico/img/login-bg/login-bg-13.jpg)"></a></li>
			<li><a href="javascript:;" data-click="change-bg" data-img="publico/img/login-bg/login-bg-12.jpg" style="background-image: url(publico/img/login-bg/login-bg-12.jpg)"></a></li>
		</ul>
		<!-- end login-bg -->
		
		<!-- begin theme-panel -->
		<div class="theme-panel theme-panel-lg">
			
			<div class="theme-panel-content">
	
				<div class="divider"></div>

	
				<div class="row m-t-10">
					<div class="col-6 control-label text-inverse f-w-600">Sidebar Fixed</div>
					<div class="col-6 d-flex">
						<div class="custom-control custom-switch ml-auto">
							<input type="checkbox" class="custom-control-input" name="sidebar-fixed" id="sidebarFixed" value="1" checked />
							<label class="custom-control-label" for="sidebarFixed">&nbsp;</label>
						</div>
					</div>
				</div>

	
			</div>
            
		</div>
		<!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="publico/js/app.min.js"></script>
	<script src="publico/js/theme/material.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="publico/js/demo/login-v2.demo.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
</body>
</html>