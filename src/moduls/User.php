<?php

class User
{
    private $email;
    private $password;
    private $name;
    private $surname;


    public function __construct(string $email,string $password,string $name,string $surname){
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname=$surname;
    }

    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
        
    

}