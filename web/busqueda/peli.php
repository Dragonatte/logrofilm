<?php session_start(); ?>
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
        <a href="../cartelera/" class="link-sp">Cartelera</a>
      </li>
      <li>
        <a href="#" class="link-sp">Contacto</a>
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
      <li>
			<?php if(isset($_SESSION['user'])) { ?>
					<div class="user">
						<img src="<?php echo $_SESSION['user']['IMAGEN'] ?>" alt="User" class="w-10 rounded-full m-5">
						<div>
							<p><?php echo $_SESSION['user']['USERNAME'] ?></p>
							<p><?php echo $_SESSION['user']['EMAIL'] ?></p>
						</div>
					</div>
				<?php } else { ?>

          <div class="mr-10">
              <a href="./login/" class="link-login">Iniciar sesión</a>
          </div>
				<?php } ?>
        </li>
      </ul>
    </nav>
	</header>

  	<div id="background">
			<?php
			require_once __DIR__ . '/../../src/components/circles.php';
			?>
		</div>


  <main id="peliculas">
	    <div id = peli_info>
				<aside id="pelis_img">
					<img src="<?php echo $_GET['poster']?>" alt="<?php echo $_GET['titulo'] ?>">
				</aside>
		    <section id="pelis_info">
	        <h1><?php echo $_GET['titulo'] ?></h1>
	        <h2><?php echo $_GET['titulo_original'] ?></h2>
	        <p><?php echo $_GET['sinopsis'] ?></p>
			    <p><?php echo $_GET['duracion'] ?> minutos.</p>
			    <p>A&ntilde;o <?php echo $_GET['anno'] ?></p>
		    </section>
		  </div>
	    <div id="comentar">
		    <form action="../../src/controller/comentar.php" method="post">
			    <input type="hidden" name="id_pelicula" value="<?php echo $_GET['id_pelicula'] ?>">
			    <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['user']['id_usuario'] ?? '' ?>">
			    <label>
				    <textarea name="comentario" id="comentario" cols="98" rows="2" placeholder="Escribe tu comentario..."></textarea>
				  </label>
			    <input type="submit" value="Comentar">
		    </form>
		    <form action="../../src/controller/valorar.php" method="post">
			    <input type="hidden" name="id_pelicula" value="<?php echo $_GET['id_pelicula'] ?>">
			    <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['user']['id_usuario'] ?? '' ?>">
			    <label for="valoracion">
				    <input type="range" list="mydata" name="valoracion" id="valoracion" min="0" max="10" step="1"><span id="val-val"></span>
				    <datalist id="mydata">
					    <option value="0">0</option>
					    <option value="1">1</option>
					    <option value="2">2</option>
					    <option value="3">3</option>
					    <option value="4">4</option>
					    <option value="5">5</option>
					    <option value="6">6</option>
					    <option value="7">7</option>
					    <option value="8">8</option>
					    <option value="9">9</option>
					    <option value="10">10</option>
					  </datalist>
			    </label>
			    <input type="submit" value="Valorar">
		    </form>
	    </div>
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
	</footer>
<script src="../../public/JS/main.js"></script>
<script src="../../public/JS/load_peli.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
