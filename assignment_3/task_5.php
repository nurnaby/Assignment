<?php

function generatePassword($length) {
    // Define character sets for lowercase, uppercase, numbers, and special characters
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

    $password = '';

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];
        $password .= $randomChar;
    }

    return $password;
}

$password = generatePassword(12);

echo "Generated Password: $password";
?>