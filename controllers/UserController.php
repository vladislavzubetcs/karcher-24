<?php

class UserController
{
    public static function auth()
    {
        if(User::checkLogin()) {
            header('Location: /');
            return true;
        }

        $login = '';

        if(isset($_POST) && !empty($_POST) && isset($_POST['login']) && isset($_POST['password'])) {

            $login = $_POST['login'];
            $password = $_POST['password'];

            $result = User::auth($login, $password);

            if($result) {
                header('Location: /');
                return true;
            }
        }

        require_once(ROOT . '/views/login.php');
        return true;
    }

    public static function exit()
    {
        User::exit();
        header('Location: /login');
        return true;
    }
}
