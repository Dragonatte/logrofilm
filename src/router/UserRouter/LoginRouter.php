<?php

require_once __DIR__ . '/../../controller/UserController.php';
use RMB\Logrofilm\controller\UserController;

if(isset($_POST['user']) && isset($_POST['pass'])) {
    $user_name = $_POST['user'];
    $password = $_POST['pass'];

    $user = UserController::getUserByUserName($user_name) ?? null;

    if($user) {
        if(password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user'] = $user;
            header('Location: ../../web/');
        }
        else {
            header('Location: ../../web/login/');
        }
    }
    else {
        header('Location: ../../web/login/');
    }
}