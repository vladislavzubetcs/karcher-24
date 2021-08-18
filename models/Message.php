<?php

class Message
{
    public static function contactUs($name, $phone)
    {
        $to  = "vladislavzubetcs@gmail.com <vladislavzubetcs@gmail.com>"; 
        
        $subject = "Обращение с сайта от {$name}";

        $message = "{$name} оставил(а) заявку на сайте на обратный звонок.<br/><br/>Указанный телефон для связи: <b>{$phone}</b>";
        
        $headers  = "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: {$name} <vladislavzubetcs@gmail.com>\r\n";
        $headers .= "Reply-To: vladislavzubetcs@gmail.com\r\n";

        return mail($to, $subject, $message, $headers);
    }

    public static function problem($name, $phone, $technique, $problems)
    {
        $to  = "email <email>"; 
        
        $subject = "Обращение с сайта от {$name}";

        $problems_string = '';

        if(is_array($problems) && count($problems) > 0) {
            foreach($problems as $problem) {
                $problems_string .= '<i>- ' . $problem . '</i><br/>';
            }
        }
        else
            $problems_string = '<i>Не указано.</i><br/>';

        $message = "{$name} оставил(а) заявку на сайте на ремонт <b>{$technique}</b> со следующими проблемами:<br/>{$problems_string}<br/>Указанный телефон для связи: <b>{$phone}</b>";
        
        $headers  = "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: {$name} <email>\r\n";
        $headers .= "Reply-To: email\r\n";

        return mail($to, $subject, $message, $headers);
    }

}
