<?php


namespace App\classes;


class User
{
    public $users=[],$email,$password; function __construct($post=null)
    {
//        $this->email=$post['email'];
//        $this->password=$post['password'];
        $this->users=[
            0=>[
                'id'        =>1,
                'name'      =>'Antik Kumar Das',
                'email'      =>'aj@gmail.com',
                'password'  =>'123456'
            ],
            1=>[
                'id'        =>2,
                'name'      =>'Arman',
                'email'      =>'arman@gmail.com',
                'password'  =>'111111'
            ],
            2=>[
                'id'        =>3,
                'name'      =>'Aksh',
                'email'      =>'aksh@gmail.com',
                'password'  =>'222222'
            ],
        ];
    }
    public function login()
    {
        foreach ($this->users as $user)
        {

            if($user['email']==$this->email && $user['password']==$this->password)
            {
                session_start();
                $_SESSION['id']=session_id();
                header('Location: action.php?page=home');
//                echo "You r logged in";
//                exit();
            }
        }
        echo "email or password is incorrect";
        exit();

    }
    public function getAllUser()
    {
        return $this->users;
    }

}