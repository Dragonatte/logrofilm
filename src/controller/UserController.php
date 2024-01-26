<?php

namespace RMB\Logrofilm\controller;

use Exception;

require_once __DIR__ . '/../model/User.php';
use RMB\Logrofilm\model\User;

require_once __DIR__ . '/../model/UserModel.php';
use RMB\Logrofilm\model\UserModel;

require_once __DIR__ . '/../../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

class UserController
{
     public static function getAll(): array | null
    {
        return UserModel::getAll();
    }

    public static function getUserByEmail(string $email): array | null
    {
        return UserModel::getUserByEmail($email);
    }

    public static function insert(User $user): bool
    {
        if(UserModel::insert($user)) {
            self::sendValidatorEmail($user);
            return true;
        }
        else {
            return false;
        }
    }

    private static function sendValidatorEmail(User $user): void
    {
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rodrigomurillo99@gmail.com';
        $mail->Password = 'qzcd tkne ents puwc';

        $email = $user->getEmail();
        $username = $user->getUsername();

        $userFetchId = UserModel::getUserByEmail($email)[0];
        $id = $userFetchId['ID'];


        $subject = 'Valida tu cuenta';
        $message = "
            <h1>Valida tu cuenta</h1>
            <p>Para validar tu cuenta, haz click en el siguiente enlace:</p>
            <a href='http://localhost:63342/logrofilm/web/validar/index.php?user=$id'>Validar cuenta</a>
        ";

        $headers = "From: PHPMailer <" . $email . ">\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";

        try {
            $mail->setFrom('rodrigomurillo99@gmail.com');
            $mail->addAddress($email);
            $mail->isHTML();
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->send();
        }
        catch (Exception )
        {
            echo "Error al enviar el email: $mail->ErrorInfo";
        }
    }

    public static function getUserByUserName(string $user_name): array | null
    {
        return UserModel::getUserByUserName($user_name);
    }

    public static function validarUser(int $id)
    {
        return UserModel::validarUser($id);
    }
}