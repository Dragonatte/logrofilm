<?php

require_once __DIR__ . '/../../controller/UserController.php';
use RMB\Logrofilm\controller\UserController;
require_once __DIR__ . '/../../model/User.php';
use RMB\Logrofilm\model\User;

if(isset($_POST['email']) && isset($_POST['new-pass']) && isset($_POST['new-user']))
{
    $email = $_POST['email'];
    $password = $_POST['new-pass'];
    $user = UserController::getUserByEmail($email) ?? null;

    if($user !== null)
    {
        $user = new User($email, $password, $_POST['new-user']);
        $res = UserController::insert($user);
        if($res) {
            header('Location: ../../../web/index.php?user=created');
        }
        else {
            header('Location: ../../../web/login/');
        }
    }
    else
    {
        header('Location: ../../../web/login/');
    }
}
else
{
    header('Location: ../../../web/login/');
}