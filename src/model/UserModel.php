<?php

namespace RMB\Logrofilm\model;

require_once __DIR__ . '/BD.php';
use RMB\Logrofilm\model\BD;

/**
 * Class UserModel
 * @package RMB\Logrofilm\model
 * @version 1.0
 *
 * Clase que representa a un usuario
 */
class UserModel
{
    /**
     * @return array|null
     *
     * Devuelve un array con todos los usuarios de la base de datos
     */
    public static function getAll(): array | null
    {
        $query = 'SELECT * FROM usuario';
        return BD::query($query);
    }

    /**
     * @param string $email
     * @return array|null
     *
     * Devuelve un array con el usuario que tenga el email pasado por parámetro
     */
    public static function getUserByEmail(string $email): array | null
    {
        $query = "SELECT * FROM usuario WHERE email = '$email'";
        return BD::query($query);
    }

    /**
     * @param User $user
     * @return bool
     *
     * Inserta un usuario en la base de datos
     */
    public static function insert(User $user): bool
    {
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $query = "INSERT INTO usuario (USERNAME, EMAIL, PASSWORD) VALUES ('$username', '$email', '$password')";
        return BD::insert($query);
    }

    /**
     * @param User $user
     * @return bool
     *
     * Envía un email de validación al usuario
     */
    public static function getUserByUserName(string $user_name): array | null
    {
        $query = "SELECT * FROM usuario WHERE username Like '$user_name'";
        return BD::query($query);
    }

    /**
     * @param User $user
     * @return bool
     *
     * Envía un email de validación al usuario
     */
    public static function validarUser(int $id)
    {
        $query = "UPDATE usuario SET VALIDADO = 1 WHERE id = $id";
        return BD::update($query);
    }
}