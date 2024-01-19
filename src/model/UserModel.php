<?php

namespace RMB\Logrofilm\model;

class UserModel
{
    public static function getAll(): array | null
    {
        $query = 'SELECT * FROM usuario';
        return BDController::query($query);
    }

    public static function getUserByEmail(string $email): array | null
    {
        $query = "SELECT * FROM usuario WHERE email = '$email'";
        return BDController::query($query);
    }

    public static function insert(User $user): bool
    {
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $query = "INSERT INTO usuario (USERNAME, EMAIL, PASSWORD) VALUES ('$username', '$email', '$password')";
        return BDController::insert($query);
    }
}