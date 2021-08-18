<?php

class MessageController
{
    public static function sendContactUs()
    {
        $result = false;

        if(isset($_POST) && !empty($_POST) && isset($_POST['name']) && isset($_POST['phone']))
            $result = Message::contactUs($_POST['name'], $_POST['phone']);

        if($result)
            echo 'ok';
        else
            echo 'error';

        return true;
    }

    public static function sendProblem()
    {
        $result = false;

        if(isset($_POST) && !empty($_POST) && isset($_POST['technique']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['problems']))
            $result = Message::problem($_POST['name'], $_POST['phone'], $_POST['technique'], $_POST['problems']);

        if($result)
            echo 'ok';
        else
            echo 'error';

        return true;
    }
}