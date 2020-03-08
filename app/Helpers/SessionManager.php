<?php


namespace App\Helpers;


class SessionManager
{
    private static $instance;

    public function __construct() {
        session_start();
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