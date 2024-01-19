<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="../../../public/CSS/style.css">
	<link rel="icon" href="../../../public/res/icon/favicon.png">
  <title>Sign</title>
</head>
<body class="admin-body">
  <form action="admin_login.php" method="post" class="wrapper" id="admin-login-form">
	  <header class="admin-header">
		  <h1 class="log-head">Iniciar sesión</h1>
	  </header>
		<?php
		if(!isset($_GET['login'])) {
        echo '
    <input id="user" name="user" type="text" class="admin-input">
		<label for="user" class="admin-label">Usuario</label>';
        echo '
    <input id="pass" name="pass" type="password" class="admin-input">
	  <label for="pass" class="admin-label">Contrase&ntilde;a</label>';
    } else if($_GET['login'] == 'error'){
				echo '
		<input id="user" name="user" type="text" class="admin-input admin-input-error">
		<label for="user" class="admin-label admin-label-error">Usuario</label>';
				echo '
		<input id="pass" name="pass" type="password" class="admin-input admin-input-error">
		<label for="pass" class="admin-label admin-label-error">Contrase&ntilde;a</label>';
		}
		?>
	  <div class="admin-footer">
		  <button class="admin-login-button">Iniciar sesión</button>
	  </div>
  </form>
	<script src="../../../public/JS/admin/script.js"></script>
</body>
</html>