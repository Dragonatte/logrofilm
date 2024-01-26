
<li>
<?php if(isset($_SESSION['user'])) { ?>
        <div class="user">
            <img src="<?php echo $_SESSION['user']['IMAGEN'] ?? $_GET['sep'] === 1 ? '../public/res/img/user.svg' : '../../public/res/img/user.svg' ?>" alt="User" class="w-10 rounded-full m-5">
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