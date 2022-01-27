<?php
namespace App;

class User
{
    protected $firstName = 'User';
    protected $lastName;

    public function getFullName()
    {
        return trim($this->lastName . ' ' . $this->firstName);
    }
}