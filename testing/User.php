<?php

namespace App\Models;

class User
{
    public $email;

    public $password;

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEmailVariables()
    {
        return [
            'email' => $this->getEmail(),
            'password' => $this->getPassword()
        ];
    }
}
