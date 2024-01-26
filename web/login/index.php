<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="../../public/CSS/style.css">
  <title>Sign</title>
</head>
<body>
	<div class="card">
    <form action="../../src/router/UserRouter/LoginRouter.php" method="post" class="wrapper" id="loginForm">
	    <header class="header">
        <h1 class="log-head">Iniciar sesión</h1>
	    </header>

      <input id="user" name="user" type="text" class="input">
      <label for="user" class="anim-label">Usuario</label>

      <input id="pass" name="pass" type="password" class="input">
      <label for="pass" class="anim-label">Contrase&ntilde;a</label>
	    <p class="link_like" id="toReg">¿No estás registrado?</p>

	    <div class="footer">
        <button class="button">Iniciar sesión</button>
	    </div>
    </form>

    <form action="../../src/router/UserRouter/SignupRouter.php" method="post" class="wrapper" id="registerForm">
	    <header class="header">
	      <h1 class="log-head">Registrarse</h1>
		  </header>

      <input id="email" name="email" type="email" class="input">
      <label for="email" class="anim-label">Email</label>

      <input id="new-user" name="new-user" type="text" class="input">
      <label for="new-user" class="anim-label">Usuario</label>

      <input id="new-pass" name="new-pass" type="password" class="input">
      <label for="new-pass" class="anim-label">Contrase&ntilde;a</label>
	    <p class="link_like" id="toLog">¿Ya tienes una cuenta?</p>

	    <div class="footer">
        <button class="button">Registrarse</button>
		  </div>
		</form>
	</div>

	<div class="circle_s"></div>
	<div class="circle_m"></div>
	<div class="circle_l"></div>
	<div class="circle_xl"></div>

	<script src="../../public/JS/actions.js"></script>
</body>
</html>
