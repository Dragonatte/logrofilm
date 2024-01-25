<?php

namespace RMB\Logrofilm\model;

use PDO;
use PDOException;

include_once __DIR__ . '/../config/config.php';

class BD
{
    private static function connect(): PDO | null
    {
        try {
            $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
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

    public static function update(string $query)
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