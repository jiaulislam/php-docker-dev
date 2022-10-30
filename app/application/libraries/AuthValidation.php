<?php

class UserNotFoundException extends Exception
{
    public function errorMessage()
    {
        $errorMsg = 'Error on link ' . $this->getLine() . ' in ' . $this->getFile() . ': <b> ' . $this->getMessage();
        return $errorMsg;
    }
}

class InvalidCredentialException extends Exception
{
    public function errorMessage()
    {
        $errorMsg = 'Error on link ' . $this->getLine() . ' in ' . $this->getFile() . ': <b> ' . $this->getMessage();
        return $errorMsg;
    }
}

class AuthValidation
{

    public function generateHash($payload): string
    {
        return password_hash($payload, PASSWORD_BCRYPT);
    }

    public function userIsValid(string $password, string $storedPassword): bool
    {
        if (!password_verify($password, $storedPassword)) {
            throw new \InvalidCredentialException("Invalid Credentials");
        }
        return true;
    }

    public function isUserLoggedIn()
    {
        return isset($_SESSION['currentUser']);
    }
}
