<?php

$defaut_image = __DIR__ . '/../../public/res/img/user.svg';

if(isset($_SESSION['user'])) {
echo `
<div class="user">
    <img src={$_SESSION['user']['image'] ?? $defaut_image} alt="User" class="w-10 rounded-full m-5">
    <div>
        <p>{$_SESSION['user']['nombre']}</p>
        <p>{$_SESSION['user']['email']}</p>
    </div>
</div>
`;
} else {
echo '
<div class="mr-10">
  <a href="../login/" class="link-login">Iniciar sesión</a>
</div>
';
}