<?php

namespace PHPMailer\PHPMailer\controller;

use Exception;
use PHPMailer\PHPMailer\model\BDController;
use PHPMailer\PHPMailer\model\User;
use PHPMailer\PHPMailer\model\UserModel;
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

    public static function insert(User $user): void
    {
        if(UserModel::insert($user)) {
            self::sendValidatorEmail($user);
        }
    }

    private static function sendValidatorEmail(User $user)
    {
        $mail = new PHPMailer(true);
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();

        $subject = 'Valida tu cuenta';
        $message = "
            <h1>Valida tu cuenta</h1>
            <p>Para validar tu cuenta, haz click en el siguiente enlace:</p>
            <a href='http://localhost/phpmailer/src/controller/ValidatorController.php?email=$email&username=$username&password=$password'>Validar cuenta</a>
        ";

        $headers = "From: PHPMailer <" . $email . ">\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-type: text/html\r\n";

        try {
            $mail->setFrom($email, $username);
            $mail->addAddress($email, $username);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->send();
        }
        catch (Exception )
        {
            echo "Error al enviar el email: $mail->ErrorInfo";
        }
    }
}