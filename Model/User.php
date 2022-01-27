<?php
namespace Model;

class User
{
    protected $firstName = 'User not set';
    protected $lastName = '';

    public function getFullName()
    {
        return trim($this->lastName . ' ' . $this->firstName);
    }
}