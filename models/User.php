<?php

class User
{
    public static function auth($login, $password)
    {
        if($login != 'root' || $password != 'AAbb2sgb')
            return false;

        $_SESSION['login'] = true;
        return true;
    }

    public static function checkLogin()
    {
        if(isset($_SESSION['login']) && $_SESSION['login'])
            return true;
            
        return false;
    }

    public static function exit()
    {
        unset($_SESSION['login']);
        return true;
    }
}
