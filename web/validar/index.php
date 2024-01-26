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
        <h1>Se ha validado tu usuario</h1>
	</div>

    <?php
		require_once __DIR__ . '/../../src/controller/UserController.php';
    use RMB\Logrofilm\controller\UserController;

    UserController::validarUser($_GET['user'])
    ?>

	<div class="circle_s"></div>
	<div class="circle_m"></div>
	<div class="circle_l"></div>
	<div class="circle_xl"></div>

	<script src="../../public/JS/actions.js"></script>
</body>
</html>
