<?php

namespace RMB\Logrofilm\model;

require_once __DIR__ . '/BD.php';
use RMB\Logrofilm\model\BD;


class UserModel
{
    public static function getAll(): array | null
    {
        $query = 'SELECT * FROM usuario';
        return BD::query($query);
    }

    public static function getUserByEmail(string $email): array | null
    {
        $query = "SELECT * FROM usuario WHERE email = '$email'";
        return BD::query($query);
    }

    public static function insert(User $user): bool
    {
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $query = "INSERT INTO usuario (USERNAME, EMAIL, PASSWORD) VALUES ('$username', '$email', '$password')";
        return BD::insert($query);
    }

    public static function getUserByUserName(string $user_name): array | null
    {
        $query = "SELECT * FROM usuario WHERE username = '$user_name'";
        return BD::query($query);
    }

    public static function validarUser(int $id)
    {
        $query = "UPDATE usuario SET VALIDADO = 1 WHERE id = $id";
        return BD::update($query);
    }
}