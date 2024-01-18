<?php

namespace PHPMailer\PHPMailer\model;

class User
{
    private string $username;
    private string $email;
    private string $password;
    private string $image;
    private string $nombre;
    private string $apellidos;

    public function __construct(string $username, string $email, string $password, string $image = '', string $nombre = '', string $apellidos = '')
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $this->encrypt($password);
        $this->image = $image;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): User
    {
        $this->image = $image;
        return $this;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): User
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): User
    {
        $this->apellidos = $apellidos;
        return $this;
    }



    private function encrypt($password): string
    {
        return password_hash($this->password, PASSWORD_BCRYPT, ['cost' => 4]);
    }
}