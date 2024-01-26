<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="../../public/CSS/style.css">
	<link rel="icon" href="../../public/res/icon/favicon.png">
	<title>Mapa</title>
</head>
<body>
<header>
	<nav>
		<ul>
      <li>
        <img src="../../public/res/img/logo.png" alt="Logo" class="logo">
      </li>
      <li>
        <a href="../">Inicio</a>
      </li>
      <li>
        <a href="#" class="link-sp">Mapa de cines</a>
      </li>
			<li>
        <a href="../cartelera/" class="link-sp">Cartelera</a>
      </li>
			<li>
        <a href="../contacto/" class="link-sp">Contacto</a>
      </li>
    </ul>
    <ul>
      <li>
			  <form method="post" action="../busqueda/">
					<label>
					<input type="text" placeholder="Buscar..." class="input mb-4"/>
					<span>
				    <button class="ion-button">
							<ion-icon name="search-outline"></ion-icon>
				    </button>
					</span>
					</label>
			  </form>
		  </li>
      <?php
		      $_GET['sep'] = 2;
		      require_once __DIR__ . '/../../src/components/avatar.php';
		      ?>
    </ul>
  </nav>
</header>
	<main>
    <h1>Mapa de Cines en Logroño</h1>
    <div id="map"></div>
	</main>
	<footer>
		<div class="logo">
			<img src="../../public/res/img/logo.png" alt="Logo" class="logo-lg">
			<div class="logo_text">
				<h2>LOGROFILM</h2>
				<p>Una red social para los <br> amantes del cine</p>
			</div>
		</div>
		<div class="separador"></div>
		<div class="legal">
			<a>Pol&iacute;tica de Privacidad</a>
			<a>Pol&iacute;tica de Cookies</a>
			<a>Aviso Legal</a>
		</div>
		<div class="separador"></div>
		<div class="acceso">
			<a href="../admin/login/">Acceso usuarios</a>
		</div>
		<script src="../../public/JS/main.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFZHJJtI8s8__9Yn8Od9kgYQbUPAY0PQc"></script>
		<script src="../../public/JS/mapa.js"></script>
	</footer>
</body>
</html>