<?php

require_once __DIR__ . '/../../controller/UserController.php';
use RMB\Logrofilm\controller\UserController;

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = UserController::getUserByEmail($email) ?? null;

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