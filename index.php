<?php

echo "<pre>";


// require_once stops execution if file is missing (critical files)
require_once __DIR__ . '/data/users.php';
require_once __DIR__ . '/utils/User.php';
require_once __DIR__ . '/utils/Validator.php';

// include_once is used for optional helper functions
include_once __DIR__ . '/utils/helpers.php';

use Utils\User;
use Utils\Validator as UserValidator;


$users = require __DIR__ . '/data/users.php';

$validator = new UserValidator();

foreach ($users as $userData) {

    $user = new User(
        $userData['username'],
        $userData['email'],
        $userData['password']
    );
$user->displayUser();

echo "Username: " . $validator->validateUsername($user->username) . "<br>";
echo "Email: " . $validator->validateEmail($user->email) . "<br>";
echo "Password: " . $validator->validatePassword($user->password) . "<br>";

printLine();

}

echo "</pre>";

