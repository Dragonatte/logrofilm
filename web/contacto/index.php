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
      <?php
		      $_GET['sep'] = 2;
		      require_once __DIR__ . '/../../src/components/avatar.php';
		      ?>
      </ul>
    </nav>
	</header>
	<div id="background">
		<?php
		require_once __DIR__ . '/../../src/components/circles.php';
		?>
	</div>

    <main>
	    <?php
	    if(isset($_GET['status'])) {
		    if($_GET['status'] == 'success') {
			    echo '<div class="alert alert-success">Mensaje enviado correctamente</div>';
		    } else if($_GET['status'] == 'error') {
			    echo '<div class="alert alert-error">Error al enviar el mensaje</div>';
		    }
	    }
	    ?>
	    <form action="../../src/router/contactRouter.php" id="contact-form" method="post">
		    <header class="header">
	        <h1 class="log-head">Contacto</h1>
		    </header>

			  <input id="nombre" name="nombre" type="text" class="input" required>
	      <label for="nombre" class="anim-label">Nombre</label>

	      <input id="correo" name="correo" type="email" class="input" required>
	      <label for="correo" class="anim-label">Email</label>

			  <textarea id="mensaje" name="mensaje" class="input" placeholder="Mensaje..." required></textarea>

		    <div class="footer">
	        <button class="button">Enviar mensaje</button>
			  </div>
	    </form>
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
<script src="../../public/JS/actions.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
