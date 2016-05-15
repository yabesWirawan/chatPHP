<?php

class User{
    private $username;
    private $password;
    private $firstLogin;
    private $isLogin;

    public function __construct($username, $password, $firstLogin = true)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function __set($property, $value)
    {
        $this->property = $value;
    }

    public function __get($value)
    {
        return $this->$value;
    }
}
