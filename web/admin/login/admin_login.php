<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

if ($user == 'admin' && $pass == 'admin') {
    session_start();
    $_SESSION['admin'] = true;
    header('Location: ../dashboard/');
}
else {
    header('Location: index.php?login=error');
}