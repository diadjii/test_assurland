<?php
namespace App\Controllers;

use App\Helpers\MyHelpers;
use App\Helpers\SessionManager;
use App\Models\UserModel;
use CodeIgniter\Controller;
use App\Entities\User;

class UserController extends  Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function create(){
        $userRole = $this->request->getVar("user-type");
        $userName = $this->request->getVar("username");
        $userLogin = $this->request->getVar("login");
        $userPassword = $this->request->getVar("password");

        try {
            $userEntity = new User();

            $userEntity->username = $userName;
            $userEntity->login = $userLogin;
            $userEntity->password = sha1($userPassword);
            $userEntity->role = $userRole;

            $this->userModel->insert($userEntity);
            echo $userEntity->role;
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    public function edit()
    {
        $userId = $this->request->getVar('user-id');
        try {

            $data = [
            'username' => $this->request->getVar('edit-username'),
            'login'    => $this->request->getVar('edit-login'),
            'role'    => $this->request->getVar('edit-user-type'),
        ];

            $this->userModel->update($userId, $data);
            echo $userId;
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }

    public function delete($id)
    {
        $this->userModel->where('id', $id)->delete();
        echo $id;
    }

    public function listUser()
    {
        $users = $this->userModel->findAll();

        $list = array();
        foreach ($users as $user){
            array_push($list, array(
                'username' => $user->username,
                'role' => $user->role,
                'id' => $user->id,
                'login' => $user->login,
                ));
        }
        echo json_encode($list);
    }

    public function login()
    {
        $login = $this->request->getVar('login');
        $password = $this->request->getVar('password');

        if(isset($login) && isset($password)){
            $u = $this->userModel->where('login', $login)
                ->first();
           if($u){
               if($u->password == sha1($password)){
                   $sessionManager = new SessionManager();
                   $_SESSION['id'] = $u->id;
                   $_SESSION['login'] = $u->login;
                   return redirect()->to('/');
               }
           }else{
               echo "non";
           }
        }
    }

    public function logout()
    {
        $sessionManager = new SessionManager();
        $sessionManager->stopSession();

        return redirect()->to('/login');
    }
}