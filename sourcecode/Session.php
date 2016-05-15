<?php

class Session{
    private $user;

    public function login(User $user)
    {
        $user->isLogin = true;
        return $user->username." is login";
    }

    public function logout(User $user)
    {
        $user->isLogin = false;
        return $user->username." is logout";
    }

    public function firstTimeLogin(User $user)
    {
        if ($user->firstLogin) {
            return "Redirect to Bio form";
            $user->firstLogin = false;
        }
        return "Welcome page";
    }
}
