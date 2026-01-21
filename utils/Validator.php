<?php

namespace Utils;

class Validator
{
    public function validateUsername($username)
    {
        return strlen($username) >= 3 ? "Valid" : "Invalid";
    }

    public function validateEmail($email)
    {
        return strpos($email, '@') !== false ? "Valid" : "Invalid";
    }

    public function validatePassword($password)
    {
        return strlen($password) >= 6 ? "Strong" : "Weak";
    }
}
