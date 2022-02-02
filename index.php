<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="styles/styles_spacing.css">
	<link rel="stylesheet" href="styles/styles_color_and_formatting.css">
	<link rel="stylesheet" href="styles/styles_cursor.css">
	<link rel="stylesheet" href="styles/styles_scrollbar.css">
	<link rel="stylesheet" href="styles/styles_forms.css">
	<link rel="stylesheet" href="styles/styles_icons.css">

	<script src="js/loginPopupManager.js"></script>

	<title>TYOX - Portada</title>
</head>

<body>

	<?php
		include("dbConnection.php");
		include("dbDataGathering.php");
	?>
	<!--Formulary with an assigned working php function
	<form id="header-search-bar" action="dbSearchUsers.php">
		<input type="textarea">
		<input type="submit" value="Buscar">
	</form>
	-->

	<!-- Profile picture (to load login popup) -->
	<div id="div-login-actioner-popup" class="cursor-trigger blue-sheen-hover" onclick="showLoginPopup()">
		<img src="/res/images/profile-pic.png" class="big-icon"/>
	</div>

	<!-- Login and register popup (hidden by default) -->
	<div id="login-register-popup" class="centered-popup" style="visibility:hidden;">
		<div class="div_compressed_form" id="form-login">
			<form action="/dbLog.php" class="form-container vertical-form-popup">
				<h1>Iniciar sesión</h1>
				<input class="modified-input" type="text" placeholder="Username" name="username" required>
				<input class="modified-input" type="password" placeholder="Password" name="password" required>
				<div class="div-vlist margintop marginbot">
					<button type="submit" class="cursor-trigger modified-button subgreen green-sheen-hover">ACCEDER</button>
					<button type="button" class="cursor-trigger modified-button subred red-sheen-hover" onclick="hideLoginPopup()">CERRAR</button>
				</div>
			</form>
		</div>
		<div class="div_compressed_form" id="form-regin">
			<form action="/dbLog.php" class="form-container vertical-form-popup">
				<h1>Nueva cuenta</h1>
				<input class="modified-input" type="text" placeholder="Username" name="username" required>
				<input class="modified-input" type="text" placeholder="Email" name="email" required>
				<input class="modified-input" type="password" placeholder="Password" name="password" required>
				<input class="modified-input" type="password" placeholder="Repeat password" name="password" required>

				<div class="div-vlist margintop marginbot">
					<button type="submit" class="cursor-trigger modified-button subgreen green-sheen-hover">CREAR</button>
					<button type="button" class="cursor-trigger modified-button subred red-sheen-hover" onclick="hideLoginPopup()">CERRAR</button>
				</div>
			</form>
		</div>
	</div>

	<img id="cursor" src="res/images/cursors/custom_cursor_02-gray-mid.png" class="cursor"/>

	<header class="blackened">
		<div name="div-content-header" class="flexed-row vertical-padding-1">
		
			<img
				id="header-logo"
				src="res/images/tyox-small-logo-header.png"
				class="header-logo"
				alt="TYOX"
			/>

		</div>
	</header>

	<div name="div-content-gallery" class="gallery vertical-margin-1 padded-content">
		<section class="flexed-row">
			<?php
				$_GET['nPage'] = 1;
				include("dbLoadGallery.php");
			?>
			<!--
				Aquí habrá que cargar las camiseta de forma
				dinámica hasta un máximo de 30 (?) unidades
			-->
			<!--
			<article name="shirt" class="article-shirt margin-1 vertical-padding-1 flexed-column blackened cursor-trigger">
				<img src="images/default-shirt.png" alt="Shirt" class="article-image"/>
				<h2 class="article-title">Camiseta de prueba 01</h2>
			</article>

			<article name="shirt" class="article-shirt margin-1 vertical-padding-1 flexed-column blackened cursor-trigger">
				<img src="images/default-shirt.png" alt="Shirt" class="article-image"/>
				<h2 class="article-title">Camiseta de prueba 02</h2>
			</article>
			
			<article name="shirt" class="article-shirt margin-1 vertical-padding-1 flexed-column blackened cursor-trigger">
				<img src="images/default-shirt.png" alt="Shirt" class="article-image"/>
				<h2 class="article-title">Camiseta de prueba 03</h2>
			</article>
			-->
		</section>
		
		<script src="js/cursor.js"></script>
	</div>

	<footer>
		<p>© 2022, TYOX</p>
		<p><a class="cursor-trigger">Privacy Policy</a></p>
		<p><a class="cursor-trigger">Market Loss Policy</a></p>
		<p><a class="cursor-trigger">User Agreement</a></p>
	</footer>

</body>
	
</html>