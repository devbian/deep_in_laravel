<?php
namespace App\Services;

class Mailer
{
    public function mail($recipient, $content)
    {
        // Send an email to the recipient
        // ...
        echo $recipient . ' ' . $content;
    }
}