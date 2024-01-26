<?php

namespace RMB\Logrofilm\model;

/**
 * Class User
 * @package RMB\Logrofilm\model
 * @version 1.0
 *
 * Clase que representa a un usuario
 */
class User
{
    private string $username;
    private string $email;
    private string $password;
    private string $image;
    private string $nombre;
    private string $apellidos;

    /**
     * @param string $username
     * @param string $email
     * @param string $password
     * @param string $image
     * @param string $nombre
     * @param string $apellidos
     */
    public function __construct(string $username, string $email, string $password, string $image = '', string $nombre = '', string $apellidos = '')
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $this->encrypt($password);
        $this->image = $image;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return User
     */
    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return User
     */
    public function setImage(string $image): User
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return User
     */
    public function setNombre(string $nombre): User
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     * @return User
     */
    public function setApellidos(string $apellidos): User
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    /**
     * @param string $password
     * @return string
     */
    private function encrypt($password): string
    {
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
    }
}