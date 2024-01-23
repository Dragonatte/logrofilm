<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="../../public/CSS/style.css">
	<link rel="icon" href="../../public/res/icon/favicon.png">
	<title>Cartelera</title>
</head>
<body id="cart_body">
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
	        <a href="../mapa/" class="link-sp">Mapa de cines</a>
        </li>
				<li>
	        <a href="#" class="link-sp">Cartelera</a>
        </li>
				<li>
	        <a href="../contacto/" class="link-sp">Contacto</a>
        </li>
      </ul>
      <ul>
	      <li>
		      <label>
			      <input type="text" placeholder="Buscar..." class="input mb-4"/>
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
              <a href="../login/" class="link-login">Iniciar sesión</a>
          </div>';
				}
?>
        </li>
      </ul>
    </nav>
	</header>
	<div id="background">
		<?php
		require_once __DIR__ . '/../../src/components/circles.php';
		?>
	</div>
	<div id="cartelera">
		<div class="dia-select _0">
			<button class="dia active" id="0">HOY</button>
			<button class="dia" id="1"></button>
			<button class="dia" id="2"></button>
			<button class="dia" id="3"></button>
			<button class="dia" id="4"></button>
			<button class="dia" id="5"></button>
			<button class="dia" id="6"></button>
		</div>
		<div id="pelis">
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
			<div class="peli-skeleton" id="peliSkeleton">
			  <div class="peli-skeleton-img"></div>
			  <div class="peli-skeleton-info">
			    <div class="peli-skeleton-title"></div>
				  <div class="peli-skeleton-sesiones"></div>
			    <div class="peli-skeleton-genre"></div>
			    <div class="peli-skeleton-duration"></div>
			  </div>
			</div>
		</div>
	</div>

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
	</footer>
<script src="../../public/JS/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
