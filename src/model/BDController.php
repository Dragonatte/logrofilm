<?php

namespace RMB\Logrofilm\model;

use PDO;
use PDOException;

class BDController
{
    private static function connect(): PDO | null
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=phpmailer;charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Error al conectar con la base de datos: ' . $e->getMessage();
            return null;
        }
    }

    public static function getConn(): PDO | null
    {
        return self::connect();
    }

    public static function query(string $query): array | null
    {
        try {
            $pdo = self::connect();
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error al ejecutar la consulta: ' . $e->getMessage();
            return null;
        }
    }

    public static function insert(string $query): bool
    {
        try {
            $pdo = self::connect();
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Error al ejecutar la consulta: ' . $e->getMessage();
            return false;
        }
    }
}