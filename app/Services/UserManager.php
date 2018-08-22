<?php
namespace App\Services;

class UserManager
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function register($email, $password)
    {
        // Send the user an email to say hello!
        $this->mailer->mail($email, 'Hello and welcome!');
    }
}