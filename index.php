<?php

class UserValidator
{
    // Metoda wwalidujaca adres e-mail
    public function validateEmail(string $email): bool
    {
        
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    // Metoda walidujaca haslo
    public function validatePassword(string $password): bool
    {
        
        return strlen($password) >= 8
            && preg_match('/[a-z]/', $password)
            && preg_match('/[A-Z]/', $password)
            && preg_match('/[0-9]/', $password)
            && preg_match('/[\W_]/', $password);
    }
}

// Przyklad uzycia
$validator = new UserValidator();

$email = "test@test.eu";
$password = "SilneHaslo123!@#";

// Walidacja adresu e-mail
if ($validator->validateEmail($email)) {
    echo "Email is valid.\n";
} else {
    echo "Email is invalid.\n";
}

// Walidacja hasla
if ($validator->validatePassword($password)) {
    echo "Password is valid.\n";
} else {
    echo "Password is invalid.\n";
}


?>
