<?php
namespace App\Helpers;

use App\Entities\User;

class MyHelpers
{
    private static $instance;

    public static function getUserEntity($username, $login, $password, $role):User
    {
        return new User($username,$login,$password,$role);
    }

    public function isLogin() {
        $response = false;
        if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
            $response = true;
        }

        return $response;
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new SessionManager();
        }

        return self::$instance;
    }

    public function stopSession() {
        session_destroy();
    }
}