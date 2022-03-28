<?php
class UserController{
    public function __construct()
    {

    }

    public function index(){
        return $foo;
    }

    public function getUsers()
    {
        $userModel = new UserModel();
        $users = $userModel->getLists();
        return $users;
    }
}