<?php
require_once "./db/users.php";

if (!session_id () && !isset($_SESSION)) {
    session_start ();
}

class Users
{

    public function register($name, $username, $age, $email, $password)
    {

        if (empty($name) && empty($username) && empty($age) && empty($email) && empty($password)) {
            return false;
        }

        if (!filter_var ($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        if (strlen ($password) <= '5') {
            return false;
        }

        return registerUser ($name, $username, $age, $email, $password);
    }

    public function login($email, $password)
    {
        return loginUser ($email, $password);
    }

    public function isLoggedIn(): bool
    {
        if (isset($_SESSION['login'])) {
            return true;
        }
        return false;
    }

    public function session()
    {
        if (isset($_SESSION['login'])) {
            return $_SESSION['login'];
        }
    }

    public function logout()
    {
        session_destroy ();
    }

    public function getCurrentUserDetails(): ?array
    {
        if (isset($_SESSION) && $_SESSION['id']) {
            $user_id = $_SESSION['id'];
            return getUserById ($user_id);
        }
        return null;
    }

    public function getCurrentUserAddresses(): ?array
    {
        if (isset($_SESSION) && $_SESSION['id']) {
            $user_id = $_SESSION['id'];
           return getAddressesByUserId ($user_id);
            }
            return [];
        }

    public function getCurrentUserOrder(): array
    {

        if (isset($_SESSION) && $_SESSION['id']) {
            $user_id = $_SESSION['id'];
            return getOrderFromDb ($user_id);

        }
        return [];
    }


}