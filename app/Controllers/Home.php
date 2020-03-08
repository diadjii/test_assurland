<?php

namespace App\Controllers;

use App\Helpers\SessionManager;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
        echo view('admin-view');

    }

    public function viewLogin()
    {
        $sessionManager = new SessionManager();

        if($sessionManager->isLogin()){
            redirect()->to('/');
        }else{
            echo view("login-view");
        }
    }

    public function viewManageUsers()
    {
        $sessionManager = new SessionManager();

        if($sessionManager->isLogin()){
            echo view("manage-users-view");
        }else{
           return redirect()->to('/login');
        }
    }

    public function viewManageProspects()
    {
        $sessionManager = new SessionManager();

        if($sessionManager->isLogin()){
            echo view("manage-prospects-view");
        }else{
            return redirect()->to('/login');
        }
    }
}
