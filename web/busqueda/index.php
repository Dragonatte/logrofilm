<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="../../public/CSS/style.css">
	<link rel="icon" href="../../public/res/icon/favicon.png">
	<title>Home</title>
</head>
<body>
	<header>
		<nav>
			<ul>
        <li>
	        <img src="../../public/res/img/logo.png" alt="Logo" class="logo">
        </li>
				<li>
	        <a href="../../">Inicio</a>
        </li>
        <li>
	        <a href="../mapa/" class="link-sp">Mapa de cines</a>
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
		      <label>
			      <input type="text" placeholder="Buscar..." class="input" id="buscar"/>
			      <span>
				      <button class="ion-button">
					      <ion-icon name="search-outline"></ion-icon>
				      </button>
			      </span>
		      </label>
        </li>
        <li>
<?php
				if(isset($_SESSION['user'])) {
				echo `
					<div class="user">
						<img src={$_SESSION['user']['image']} alt="User" class="w-10 rounded-full m-5">
						<div>
							<p>{$_SESSION['user']['nombre']}</p>
							<p>{$_SESSION['user']['email']}</p>
						</div>
					</div>`;
				}
				else {
				echo '
          <div class="mr-10">
              <a href="./login/" class="link-login">Iniciar sesión</a>
          </div>';
				}
?>
        </li>
      </ul>
    </nav>
	</header>
	<div id="background">
		<?php require_once __DIR__ . '/../../src/components/circles.php'; ?>
	</div>
	<main id="main-search">
		<aside id="search-aside">
			<h1>Filtros</h1>
			<label for="anno">A&ntilde;o<input type="radio" ></label>

		</aside>
		<div id="resultado">

		</div>
	</main>

	<script src="../../public/JS/search.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
