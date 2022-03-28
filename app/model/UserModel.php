<?php

class UserModel
{
    protected $table = 'users';

    public function getLists(){
        return [
            ['id'=>1,'username' => 'cat','email'=>'cat@gmail.com'],
            ['id'=>2,'username' => 'dog','email'=>'dog@gmail.com'],
            ['id'=>3,'username' => 'monkey','email'=>'monkey@gmail.com'],
            ['id'=>4,'username' => 'bird','email'=>'bird@gmail.com']
        ];
    }
}
