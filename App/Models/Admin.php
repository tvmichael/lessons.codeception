<?php
namespace App\Models;

class Admin
{
    protected $firstName = 'Admin';
    protected $lastName;

    public function getFullName()
    {
        return trim($this->lastName . ' ' . $this->firstName);
    }
}